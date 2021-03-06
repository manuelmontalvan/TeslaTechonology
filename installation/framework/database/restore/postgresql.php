<?php
/**
 * ANGIE - The site restoration script for backup archives created by Akeeba Backup and Akeeba Solo
 *
 * @package   angie
 * @copyright Copyright (c)2009-2019 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   http://www.gnu.org/copyleft/gpl.html GNU/GPL v3 or later
 */

defined('_AKEEBA') or die();

class ADatabaseRestorePostgresql extends ADatabaseRestore
{
	/**
	 * Overloaded constructor, allows us to set up error codes and connect to
	 * the database.
	 *
	 * @param   string $dbkey        @see {ADatabaseRestore}
	 * @param   array  $dbjsonValues @see {ADatabaseRestore}
	 */
	public function __construct($dbkey, $dbjsonValues)
	{
		parent::__construct($dbkey, $dbjsonValues);

		// Set up allowed error codes
		$this->allowedErrorCodes = array(
		);

		// Set up allowed comment delimiters
		$this->comment = array(
			'#',
			'\'-- ',
			'---',
			'/*!',
		);

		// Connect to the database
		$this->getDatabase();

		// Suppress foreign key checks
		if ($this->dbjsonValues['foreignkey'])
		{
			// @TODO PostgreSQL does not support that. You can do
			// ALTER TABLE tablename DISABLE TRIGGER ALL
			// but does it really make any sense?
		}

		// Suppress auto value on zero
		if ($this->dbjsonValues['noautovalue'])
		{
			// @TODO PostgreSQL does not support that.
		}
	}

	/**
	 * Overloaded method which will create the database (if it doesn't exist).
	 *
	 * @return  ADatabaseDriver
	 */
	protected function getDatabase()
	{
		if (!is_object($this->db))
		{
			$db = parent::getDatabase();
			try
			{
				$x = $db->select($this->dbjsonValues['dbname']);
			}
			catch (Exception $exc)
			{
				// We couldn't connect to the database. Maybe we have to create
				// it first. Let's see...
				$options = (object)array(
					'db_name'	=> $this->dbjsonValues['dbname'],
					'db_user'	=> $this->dbjsonValues['dbuser'],
				);
				$db->createDatabase($options, true);
				$db->select($this->dbjsonValues['dbname']);
			}
		}

		return $this->db;
	}

	/**
	 * Processes and runs the query
	 *
	 * @param   string  $query  The query to process
	 *
	 * @return  boolean  True on success
	 */
	protected function processQueryLine($query)
	{
		$db = $this->getDatabase();

		$prefix     = $this->dbjsonValues['prefix'];
		$existing   = $this->dbjsonValues['existing'];
		$forceutf8  = $this->dbjsonValues['utf8tables'];
		$replacesql = $this->dbjsonValues['replace'];

		$replaceAll     = false;
		$changeEncoding = false;
		$useDelimiter   = false;
		$identityTable  = null;
		$sequenceName   = '';
		$idColName      = '';

		// CREATE TABLE query pre-processing
		// If the table has a prefix, back it up (if requested). In any case, drop
		// the table. before attempting to create it.
		if( substr($query, 0, 12) == 'CREATE TABLE')
		{
			// Yes, try to get the table name
			$restOfQuery = trim(substr($query, 12, strlen($query)-12 )); // Rest of query, after CREATE TABLE
			// Is there a bracket?
			if (substr($restOfQuery,0,1) == '"')
			{
				// There is... Good, we'll just find the matching bracket
				$pos = strpos($restOfQuery, '"', 1);
				$tableName = substr($restOfQuery,1,$pos - 1);
			}
			else
			{
				// Nope, let's assume the table name ends in the next blank character
				$pos = strpos($restOfQuery, ' ', 1);
				$tableName = substr($restOfQuery,1,$pos - 1);
			}
			unset($restOfQuery);

			// Should I back the table up?
			if(($prefix != '') && ($existing == 'backup') && (strpos($tableName, '#__') == 0))
			{
				// It's a table with a prefix, a prefix IS specified and we are asked to back it up.
				// Start by dropping any existing backup tables
				$backupTable = str_replace('#__', 'bak_', $tableName);
				try
				{
					$db->dropTable($backupTable);
					$db->renameTable($tableName, $backupTable);
				} catch (Exception $exc) {
					// We can't rename the table. Try deleting it.
					$db->dropTable($tableName);
				}
			}
			else
			{
				// Try to drop the table anyway
				$db->dropTable($tableName);
			}

			$replaceAll = true; // When processing CREATE TABLE commands, we might have to replace SEVERAL metaprefixes.

			// Crude check: Community builder's #__comprofiler_fields includes a DEFAULT value which use a metaprefix,
			// so replaceAll must be false in that case.
			if($tableName == '#__comprofiler_fields') {
				$replaceAll = false;
			}

			$changeEncoding = $forceutf8;
		}

		// CREATE VIEW query pre-processing
		// In any case, drop the view before attempting to create it. (Views can't be renamed)
		elseif ((substr($query, 0, 7) == 'CREATE ') && (strpos($query, ' VIEW ') !== false))
		{
			// Yes, try to get the view name
			$view_pos = strpos($query, ' VIEW ');
			$restOfQuery = trim( substr($query, $view_pos + 6) ); // Rest of query, after VIEW string
			// Is there a bracket?
			if (substr($restOfQuery,0,1) == '"')
			{
				// There is... Good, we'll just find the matching bracket
				$pos = strpos($restOfQuery, '"', 1);
				$tableName = substr($restOfQuery,1,$pos - 1);
			}
			else
			{
				// Nope, let's assume the table name ends in the next blank character
				$pos = strpos($restOfQuery, ' ', 1);
				$tableName = substr($restOfQuery,1,$pos - 1);
			}
			unset($restOfQuery);

			// Try to drop the view anyway
			$dropQuery = 'DROP VIEW "'.$tableName.'";';
			$db->setQuery(trim($dropQuery));
			try {
				$db->execute();
			} catch (Exception $exc) {
				// Do nothing
			}

			$replaceAll = true; // When processing views, we might have to replace SEVERAL metaprefixes.
		}

		// CREATE FUNCTION pre-processing
		elseif ((substr($query, 0, 7) == 'CREATE ') && (strpos($query, 'FUNCTION ') !== false))
		{
			// Try to get the procedure name
			$entity_keyword = ' FUNCTION ';
			$entity_pos = strpos($query, $entity_keyword);
			$restOfQuery = trim( substr($query, $entity_pos + strlen($entity_keyword)) ); // Rest of query, after entity key string

			// Is there a quote?
			if (substr($restOfQuery,0,1) == '"')
			{
				// There is... Good, we'll just find the matching quote
				$pos = strpos($restOfQuery, '"', 1);
				$entity_name = substr($restOfQuery,1,$pos - 1);
			}
			else
			{
				// Nope, let's assume the entity name ends in the next blank character
				$pos = strpos($restOfQuery, ' ', 1);
				$entity_name = substr($restOfQuery,1,$pos - 1);
			}
			unset($restOfQuery);

			// Try to drop the entity anyway
			$dropQuery = 'DROP'.$entity_keyword.'IF EXISTS '.$entity_name.';';
			$db->setQuery(trim($dropQuery));
			$db->execute();

			$replaceAll = true; // When processing entities, we might have to replace SEVERAL metaprefixes.
			$useDelimiter = true; // Instruct the engine to change the delimiter for this query to //
		}
		/**
		// CREATE PROCEDURE pre-processing
		elseif ((substr($query, 0, 7) == 'CREATE ') && (strpos($query, 'PROCEDURE ') !== false))
		{
			// Try to get the procedure name
			$entity_keyword = ' PROCEDURE ';
			$entity_pos = strpos($query, $entity_keyword);
			$restOfQuery = trim( substr($query, $entity_pos + strlen($entity_keyword)) ); // Rest of query, after entity key string
			// Is there a backtick?
			if (substr($restOfQuery,0,1) == '`')
			{
				// There is... Good, we'll just find the matching backtick
				$pos = strpos($restOfQuery, '`', 1);
				$entity_name = substr($restOfQuery,1,$pos - 1);
			}
			else
			{
				// Nope, let's assume the entity name ends in the next blank character
				$pos = strpos($restOfQuery, ' ', 1);
				$entity_name = substr($restOfQuery,1,$pos - 1);
			}
			unset($restOfQuery);

			// Try to drop the entity anyway
			$dropQuery = 'DROP' . $entity_keyword . 'IF EXISTS `'.$entity_name.'`;';
			$db->setQuery(trim($dropQuery));
			$db->execute();

			$replaceAll = true; // When processing entities, we might have to replace SEVERAL metaprefixes.
			$useDelimiter = true; // Instruct the engine to change the delimiter for this query to //
		}

		// CREATE TRIGGER pre-processing
		elseif ((substr($query, 0, 7) == 'CREATE ') && (strpos($query, 'TRIGGER ') !== false))
		{
			// Try to get the procedure name
			$entity_keyword = ' TRIGGER ';
			$entity_pos = strpos($query, $entity_keyword);
			$restOfQuery = trim( substr($query, $entity_pos + strlen($entity_keyword)) ); // Rest of query, after entity key string
			// Is there a backtick?
			if(substr($restOfQuery,0,1) == '`')
			{
				// There is... Good, we'll just find the matching backtick
				$pos = strpos($restOfQuery, '`', 1);
				$entity_name = substr($restOfQuery,1,$pos - 1);
			}
			else
			{
				// Nope, let's assume the entity name ends in the next blank character
				$pos = strpos($restOfQuery, ' ', 1);
				$entity_name = substr($restOfQuery,1,$pos - 1);
			}
			unset($restOfQuery);

			// Try to drop the entity anyway
			$dropQuery = 'DROP'.$entity_keyword.'IF EXISTS `'.$entity_name.'`;';
			$db->setQuery(trim($dropQuery));
			$db->execute();

			$replaceAll = true; // When processing entities, we might have to replace SEVERAL metaprefixes.
			$useDelimiter = true; // Instruct the engine to change the delimiter for this query to //
		}
		**/
		elseif( substr($query,0,6) == 'INSERT' )
		{
			if($replacesql)
			{
				// Nope, SQL Server doesn't support this. You lose.
			}
			$replaceAll = false;

			// Yes, try to get the table name
			$restOfQuery = trim(substr($query, 11, strlen($query)-12 )); // Rest of query, after INSERT INTO
			// Is there a bracket?
			if (substr($restOfQuery,0,1) == '"')
			{
				// There is... Good, we'll just find the matching bracket
				$pos = strpos($restOfQuery, '"', 1);
				$tableName = substr($restOfQuery,1,$pos - 1);
			}
			else
			{
				// Nope, let's assume the table name ends in the next blank character
				$pos = strpos($restOfQuery, ' ', 1);
				$tableName = substr($restOfQuery,1,$pos - 1);
			}
			unset($restOfQuery);

			// Get the concrete table name
			$tableName = $db->replacePrefix($tableName);

			// Do we have identity columns?

			$q = $db->getQuery(true)
				->select('*')
				->from('information_schema.columns')
				->where($db->qn('table_name') . ' = ' . $db->q($tableName))
				->where($db->qn('table_catalog') . ' = ' . $db->q($this->dbjsonValues['dbname']))
				->where($db->qn('column_default') . ' LIKE ' . $db->q('nextval(%::regclass)'));
			$db->setQuery($q);
			$idColumn = $db->loadAssoc();

			if (count($idColumn) >= 1)
			{
				$identityTable = $tableName;

				$identityColumn = '';
				$newIdentityColumn = '';

				$identityColumn = $db->nq($idColumn['column_name']);
				$newIdentityColumn = 'NEW.' . $db->nq($idColumn['column_name']);
				$sequenceName = $identityTable . '_' . $idColumn['column_name'] . '_seq';
				$idColName = $idColumn['column_name'];
			}
		}
		else
		{
			// Maybe a DROP statement from the extensions filter?
			$replaceAll = true;
		}

		if(!empty($query))
		{
			if (!is_null($identityTable))
			{
				$sql = 'CREATE RULE "'.$identityTable.'_on_duplicate_ignore" AS ON INSERT TO "'.$identityTable.'" '
					. 'WHERE EXISTS(SELECT 1 FROM "'.$identityTable.'" WHERE ('.$identityColumn.') '
					. ' = ('.$newIdentityColumn.')) DO INSTEAD NOTHING;';
				$this->execute($sql);
			}

			$this->execute($query);

			if (!is_null($identityTable))
			{
				$sql = 'DROP RULE "'.$identityTable.'_on_duplicate_ignore" ON "'.$identityTable.'";';
				$this->execute($sql);

				$sql = 'SELECT * FROM "' . $identityTable.'" ORDER BY ' . $identityColumn . ' ASC;';
				$result = $this->execute($sql);

				$lastValue = 1;
				while ($myRow = $db->fetchAssoc($result))
				{
					$lastValue = $myRow[$idColName];
				}
				$db->freeResult($result);

				$sql = 'SELECT setval(\'' . $sequenceName . '\', ' . (string) $lastValue . ', true' . ')';
				$this->execute($sql);
			}

			// Do we have to force UTF8 encoding?
			if ($changeEncoding)
			{
				// ROFL! Not on SQL Server, amigo!
			}
		}

		return true;
	}
}
