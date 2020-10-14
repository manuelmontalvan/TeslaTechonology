<?php
require( __DIR__ . "/SZKL_security.php" );
$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;
//on off
$fbc = htmlspecialchars($tplparams->get('fbc'));
$twc = htmlspecialchars($tplparams->get('twc'));
$vc = htmlspecialchars($tplparams->get('vc'));
$pc = htmlspecialchars($tplparams->get('pc'));
$rssc = htmlspecialchars($tplparams->get('rssc'));

$textc = htmlspecialchars($tplparams->get('textc'));

$flash = htmlspecialchars($tplparams->get('flash'));
$banerc = htmlspecialchars($tplparams->get('banerc'));

?>