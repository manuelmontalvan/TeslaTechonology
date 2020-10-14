<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="utf-8" />
    <?php
        $base = $document->getBase();
        if (!empty($base)) {
            echo '<base href="' . $base . '" />';
            $document->setBase('');
        }
    ?>
    <?php renderTemplateFromIncludes('SZKL_security');
	$app = JFactory::getApplication();
    $tplparams	= $app->getTemplate(true)->params;
	$fc = htmlspecialchars($tplparams->get('fc'));
$tc = htmlspecialchars($tplparams->get('tc'));
$yc = htmlspecialchars($tplparams->get('yc'));
$gc = htmlspecialchars($tplparams->get('gc'));
$ic = htmlspecialchars($tplparams->get('ic'));
$pc = htmlspecialchars($tplparams->get('pc'));
$mc = htmlspecialchars($tplparams->get('mc'));
$allic = htmlspecialchars($tplparams->get('allic'));
$infoc = htmlspecialchars($tplparams->get('infoc'));
$galleryc = htmlspecialchars($tplparams->get('galleryc'));
$c1c = htmlspecialchars($tplparams->get('c1c'));
$c2c = htmlspecialchars($tplparams->get('c2c'));
$c3c = htmlspecialchars($tplparams->get('c3c'));
$c4c = htmlspecialchars($tplparams->get('c4c'));
$c5c = htmlspecialchars($tplparams->get('c5c'));
	 ?>
    <link href="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/f70dbac00277cc83b2f7a8652aa2cbf0_f5669573ecedc4f35398b17f15911b23_favicon.ico" rel="icon" type="image/x-icon" />
    <script>
    var themeHasJQuery = !!window.jQuery;
</script>
<script src="<?php echo addThemeVersion($document->templateUrl . '/jquery.js'); ?>"></script>
<script>
    window._$ = jQuery.noConflict(themeHasJQuery);
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="<?php echo addThemeVersion($document->templateUrl . '/bootstrap.min.js'); ?>"></script>
<link class="" href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&subset=latin' rel='stylesheet' type='text/css'>
<script src="<?php echo addThemeVersion($document->templateUrl . '/CloudZoom.js'); ?>" type="text/javascript"></script>
    
    <?php echo $document->head; ?>
    <?php if ($GLOBALS['designer_settings']['is_preview'] || !file_exists($themeDir . '/css/bootstrap.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <?php if ($GLOBALS['designer_settings']['is_preview'] || !file_exists($themeDir . '/css/template.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.ie.css'); ?>" media="screen"/>
    <![endif]-->
    <script src="<?php echo addThemeVersion($document->templateUrl . '/script.js'); ?>"></script>
    <!--[if lte IE 9]>
    <script src="<?php echo addThemeVersion($document->templateUrl . '/script.ie.js'); ?>"></script>
    <![endif]-->
    <?php
/**
 *-------------------------------------------
 * Szablon został wypalony w  Diablodesign.
 * www.diablodesign.eu
 * biuro@diablodesign.eu
 * tel.666-977-944
 *-------------------------------------------
 */
?>
</head>
<body class=" bootstrap bd-body-5 bd-pagebackground">
      <header class=" bd-headerarea-1">
        <div class=" bd-layoutcontainer-17 hidden-sm hidden-xs">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-15">
    <div class="bd-layoutcolumn-71"><div class="bd-vertical-align-wrapper"></div></div>
</div>
	
		<div class=" 
 col-md-9">
    <div class="bd-layoutcolumn-23"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('top_menu_1');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<div class=" bd-boxcontrol-1">
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <?php 
    renderTemplateFromIncludes('logo_1');
?>
	
		<div class=" bd-textblock-74 hidden-sm hidden-xs bd-tagstyles">
    <?php if ($c1c == 1) { ?><div><?php echo $document->params->get('c1'); ?></div><?php } ?>
   <?php if ($c2c == 1) { ?><div><?php echo $document->params->get('c2'); ?></div><?php } ?>
   <?php if ($c3c == 1) { ?><div><?php echo $document->params->get('c3'); ?></div><?php } ?>
   <?php if ($c4c == 1) { ?><div><?php echo $document->params->get('c4'); ?></div><?php } ?>
  <?php if ($c5c == 1) { ?> <div><?php echo $document->params->get('c5'); ?></div><?php } ?>
</div>
        </div>
    </div>
</div>
	
		<div class=" bd-layoutbox-11 clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutcontainer-30">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-16">
    <div class="bd-layoutcolumn-79"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('hmenu_1', array());
?></div></div>
</div>
	
		<div class=" 
 col-md-5">
    <div class="bd-layoutcolumn-88"><div class="bd-vertical-align-wrapper"><div class=" bd-boxcontrol-3">
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <?php if ($allic == 1) { ?>  <?php if ($fc == 1) { ?><div class=" bd-animation-20 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-2 " href="<?php echo $document->params->get('facebook'); ?>"
 target="_blank">
    <span class=" bd-icon-25"></span>
</a>
</div><?php } ?>
	
		<?php if ($tc == 1) { ?><div class=" bd-animation-29 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-3 " href="<?php echo $document->params->get('twitter'); ?>"
 target="_blank">
    <span class=" bd-icon-30"></span>
</a>
</div><?php } ?>
	
		<?php if ($yc == 1) { ?><div class=" bd-animation-30 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-4 " href="<?php echo $document->params->get('youtube'); ?>"
 target="_blank">
    <span class=" bd-icon-33"></span>
</a>
</div><?php } ?>
	
		<?php if ($gc == 1) { ?><div class=" bd-animation-31 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"

                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-5 " href="<?php echo $document->params->get('google'); ?>"
 target="_blank">
    <span class=" bd-icon-35"></span>
</a>
</div><?php } ?>
	
		<?php if ($pc == 1) { ?><div class=" bd-animation-32 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-6 " href="<?php echo $document->params->get('pinterest'); ?>"
 target="_blank">
    <span class=" bd-icon-40"></span>
</a>
</div><?php } ?>
	
		<?php if ($ic == 1) { ?><div class=" bd-animation-33 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-7 " href="<?php echo $document->params->get('instagram'); ?>"
 target="_blank">
    <span class=" bd-icon-42"></span>
</a>
</div><?php } ?><?php } ?>
        </div>
    </div>
</div></div></div>
</div>
	
		<div class=" 
 col-md-3">
    <div class="bd-layoutcolumn-75"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('language_4');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</header>
	
		<div class=" bd-stretchtobottom-4 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-5"><div class="bd-sheetstyles bd-contentlayout-5 ">
    <div class="bd-container-inner">
        <div class="bd-flex-vertical">
            
 <?php renderTemplateFromIncludes('sidebar_area_1'); ?>
            <div class="bd-flex-horizontal bd-flex-wide">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide">
                    
                    <div class=" bd-layoutitemsbox-22 bd-flex-wide">
    <div class=" bd-content-4">
    <div class="bd-container-inner">
        <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
            $document->view->componentWrapper('common');
            echo '<jdoc:include type="component" />';
        ?>
    </div>
</div>
</div>
                    
                </div>
                
 <?php renderTemplateFromIncludes('sidebar_area_2'); ?>
            </div>
            
        </div>
    </div>
</div></div>
	
		<footer class=" bd-footerarea-1">
        <div class=" bd-layoutcontainer-28">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-6
 col-sm-12
 col-xs-24">
    <div class="bd-layoutcolumn-60"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_2');
?></div></div>
</div>
	
		<div class=" 
 col-md-6
 col-sm-12
 col-xs-24">
    <div class="bd-layoutcolumn-61"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_3');
?></div></div>
</div>
	
		<div class=" 
 col-md-6
 col-sm-12
 col-xs-24">
    <div class="bd-layoutcolumn-62"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_4');
?></div></div>
</div>
	
		<div class=" 
 col-md-6
 col-sm-12
 col-xs-24">
    <div class="bd-layoutcolumn-63"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_5');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<div class=" bd-layoutcontainer-34">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-24">
    <div class="bd-layoutcolumn-84"><div class="bd-vertical-align-wrapper"><div class=" bd-textblock-86 bd-tagstyles">
    Copyright © <?php echo date("Y");?> <b><?php echo $document->params->get('footer1'); ?></b> Rights Reserved.
</div></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<div class=" bd-layoutbox-7 clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutcontainer-25">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row bd-row-align-top">
                <?php renderTemplateFromIncludes('footer'); ?>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</footer>
	
		<div data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1">
    <span class=" bd-icon-66"></span>
</a></div>
</body>
</html>