<?php
require( __DIR__ . "/SZKL_security.php" );

$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;

$allic = htmlspecialchars($tplparams->get('allic'));
$fc = htmlspecialchars($tplparams->get('fc'));
$tc = htmlspecialchars($tplparams->get('tc'));
$gc = htmlspecialchars($tplparams->get('gc'));
$lc = htmlspecialchars($tplparams->get('lc'));
$ccb = htmlspecialchars($tplparams->get('ccb'));
$cc = htmlspecialchars($tplparams->get('cc'));
?>
