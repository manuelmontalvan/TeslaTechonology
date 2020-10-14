<?php
function logo_1() {
    ?>
<?php
$app = JFactory::getApplication();
$themeParams = $app->getTemplate(true)->params;
$sitename = $app->getCfg('sitename');
$logoSrc = '';
ob_start();
?>
<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/c180499e0b209c01517d5ca1e9994f39_APPLEDESIGN.png
<?php
$logoSrc = ob_get_clean();
$logoLink = '';
if ($themeParams->get('logoFile'))
{
	$logoSrc = JURI::root() . $themeParams->get('logoFile');
}
if ($themeParams->get('logoLink'))
{
    $logoLink = $themeParams->get('logoLink');
}
?>

<a class=" bd-logo-1" href="<?php echo $logoLink; ?>">
<img class=" bd-imagestyles-21" src="<?php echo $logoSrc; ?>" alt="<?php echo $sitename; ?>">
</a>

<?php
}