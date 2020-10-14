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
<body class=" bootstrap bd-body-3 bd-pagebackground">
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
    <div>Company Inc.</div><div>1235 Main Street, City, State 56789</div><div>Ph.: +1 555 123 4567</div><div>Fax: +1 555 123 4567</div><div>E-mail: email@company.com</div>
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
            <div class=" bd-animation-20 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-2 " href="#"
 target="_blank">
    <span class=" bd-icon-25"></span>
</a>
</div>
	
		<div class=" bd-animation-29 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-3 " href="#"
 target="_blank">
    <span class=" bd-icon-30"></span>
</a>
</div>
	
		<div class=" bd-animation-30 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-4 " href="#"
 target="_blank">
    <span class=" bd-icon-33"></span>
</a>
</div>
	
		<div class=" bd-animation-31 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-5 " href="#"
 target="_blank">
    <span class=" bd-icon-35"></span>
</a>
</div>
	
		<div class=" bd-animation-32 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-6 " href="#"
 target="_blank">
    <span class=" bd-icon-40"></span>
</a>
</div>
	
		<div class=" bd-animation-33 animated" data-animation-name="bounce"
                                    data-animation-event="hover"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<a class="bd-iconlink-7 " href="#"
 target="_blank">
    <span class=" bd-icon-42"></span>
</a>
</div>
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
	
		<?php 
    renderTemplateFromIncludes('breadcrumbs_1');
?>
	
		<div class="bd-sheetstyles bd-contentlayout-3 ">
    <div class="bd-container-inner">
        <div class="bd-flex-vertical">
            
            <div class="bd-flex-horizontal bd-flex-wide">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide">
                    
                    <div class=" bd-layoutitemsbox-19 bd-flex-wide">
    <div class=" bd-content-5">
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
                
            </div>
            
        </div>
    </div>
</div>
	
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
    Copyright © 2015 Apple Design Rights Reserved.
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
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-10">
    <div class="bd-layoutcolumn-72"><div class="bd-vertical-align-wrapper"><img class="bd-imagestyles bd-imagelink-2   " src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/79692467efa93aa1791d08971c3458b5_l.png"></div></div>
</div>
	
		<div class=" 
 col-md-14">
    <div class="bd-layoutcolumn-87"><div class="bd-vertical-align-wrapper"><div class=" bd-textblock-90 bd-tagstyles">
    Designed by <a href="http://www.diablodesign.eu" target="_blank">www.diablodesign.eu</a>.
</div></div></div>
</div>
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