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
$stc = htmlspecialchars($tplparams->get('stc'));
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
<body class=" bootstrap bd-body-1 bd-pagebackground">
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
	    <style>
.bd-slide-1{background-image: url(<?php echo $document->params->get('foto1'); ?>);}
.bd-slide-2 {background-image: url(<?php echo $document->params->get('foto2'); ?>);}
.bd-slide-3{background-image: url(<?php echo $document->params->get('foto3'); ?>);}
.bd-slide-4{background-image: url(<?php echo $document->params->get('foto4'); ?>);}
</style>

	    <style>
.bd-container-75 { background-image: url(<?php echo $document->params->get('foto6'); ?>);}
.bd-container-77 { background-image: url(<?php echo $document->params->get('foto7'); ?>);}
.bd-container-69{ background-image: url(<?php echo $document->params->get('foto8'); ?>);}
.bd-container-79 { background-image: url(<?php echo $document->params->get('foto9'); ?>);}
</style>


	
		<div id="carousel-1" class=" bd-slider-1 carousel slide">
    

    

    
        <div class=" bd-sliderindicators-3"><ol class=" bd-indicators-1">
    
        <li class=" bd-menuitem-5 
 active"><a href="#" data-target="#carousel-1" data-slide-to="0"></a></li>
        <li class=" bd-menuitem-5 "><a href="#" data-target="#carousel-1" data-slide-to="1"></a></li>
        <li class=" bd-menuitem-5 "><a href="#" data-target="#carousel-1" data-slide-to="2"></a></li>
        <li class=" bd-menuitem-5 "><a href="#" data-target="#carousel-1" data-slide-to="3"></a></li>
</ol></div>

    <div class="bd-slides carousel-inner">
        <div class=" bd-slide-1 item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-4 animated" data-animation-name="slideInDown"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<div class=" bd-animation-5 animated" data-animation-name="bounce"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="300ms"
                                    data-animation-infinited="false"><div class=" bd-boxcontrol-2">
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
           <?php if ($stc == 1) { ?> <div class=" bd-textblock-4 hidden-sm hidden-xs bd-tagstyles">
    <p style=""><?php echo $document->params->get('person_text1'); ?><br></p>
</div>
	
		<a href="<?php echo $document->params->get('buttonl1'); ?>" class=" bd-linkbutton-1 hidden-sm hidden-xs bd-button-17 bd-icon-70"   >
<?php echo $document->params->get('button1'); ?>
</a>
	
		<div class=" bd-animation-11 animated" data-animation-name="zoomInRight"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<img class="bd-imagestyles-30 bd-imagelink-3 hidden-sm hidden-xs   " src="<?php echo $document->params->get('foto1p'); ?>"></div><?php } ?>
        </div>
    </div>
</div>
</div>
</div>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-3 item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-34 animated" data-animation-name="slideInUp"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<div class=" bd-animation-35 animated" data-animation-name="bounce"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="300ms"
                                    data-animation-infinited="false"><div class=" bd-boxcontrol-4">
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <?php if ($stc == 1) { ?><div class=" bd-textblock-81 hidden-sm hidden-xs bd-tagstyles">
    <p style=""><?php echo $document->params->get('person_text2'); ?><br></p>
</div>
	
		<div class=" bd-animation-9 animated" data-animation-name="zoomInRight"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<img class="bd-imagestyles-40 bd-imagelink-7 hidden-sm hidden-xs   " src="<?php echo $document->params->get('foto2p'); ?>"></div>
	
		<a href="<?php echo $document->params->get('buttonl2'); ?>" class=" bd-linkbutton-19 hidden-sm hidden-xs bd-button bd-icon-91"   >
<?php echo $document->params->get('button2'); ?>
</a><?php } ?>
        </div>
    </div>
</div>
</div>
</div>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-2 item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-36 animated" data-animation-name="slideInRight"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"><div class=" bd-boxcontrol-5">
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <?php if ($stc == 1) { ?><div class=" bd-textblock-82 hidden-sm hidden-xs bd-tagstyles">
    <p style=""><?php echo $document->params->get('person_text3'); ?><br></p>
</div>
	
		<div class=" bd-animation-14 animated" data-animation-name="zoomInRight"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<img class="bd-imagestyles-41 bd-imagelink-8 hidden-sm hidden-xs   " src="<?php echo $document->params->get('foto3p'); ?>"></div>
	
		<a href="<?php echo $document->params->get('buttonl3'); ?>" class=" bd-linkbutton-20 hidden-sm hidden-xs bd-button bd-icon-92"   >
<?php echo $document->params->get('button3'); ?>
</a><?php } ?>
        </div>
    </div>
</div>
</div>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-4 item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-38 animated" data-animation-name="slideInLeft"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"><div class=" bd-boxcontrol-7">
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <?php if ($stc == 1) { ?><div class=" bd-textblock-84 hidden-sm hidden-xs bd-tagstyles">
    <p style=""><?php echo $document->params->get('person_text4'); ?><br style=""></p>
</div>
	
		<div class=" bd-animation-12 animated" data-animation-name="zoomInRight"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<img class="bd-imagestyles-44 bd-imagelink-10 hidden-sm hidden-xs   " src="<?php echo $document->params->get('foto4p'); ?>"
 alt="Person"></div>
	
		<a href="<?php echo $document->params->get('buttonl4'); ?>" class=" bd-linkbutton-21 hidden-sm hidden-xs bd-button-40 bd-icon-93"   >
<?php echo $document->params->get('button4'); ?>
</a><?php } ?>
        </div>
    </div>
</div>
</div>
        </div>
    </div>
</div>
    </div>

    

    

    
        <div class="left-button">
    <a class=" bd-carousel-8" href="#">
        <span class=" bd-icon-39"></span>
    </a>
</div>

<div class="right-button">
    <a class=" bd-carousel-8" href="#">
        <span class=" bd-icon-39"></span>
    </a>
</div>

    <script>
        if ('undefined' !== typeof initSlider){
            initSlider('.bd-slider-1', 'left-button', 'right-button', '.bd-carousel-8', '.bd-indicators-1', 3000, "hover", true, true);
        }
    </script>
</div>
	
		<?php if ($infoc == 1) { ?><div class=" bd-layoutcontainer-32">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-24">
    <div class="bd-layoutcolumn-85"><div class="bd-vertical-align-wrapper"><div class=" bd-animation-37 animated" data-animation-name="flipInY"
                                    data-animation-event="scroll"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"><div class=" bd-textblock-68 bd-tagstyles">
    <p>"<?php echo $document->params->get('info'); ?>"<br></p>
</div></div></div></div>
</div>
            </div>
        </div>
    </div>
</div><?php } ?>
	<?php if ($galleryc == 1) { ?> 
		<div class=" bd-layoutcontainer-33 hidden-sm hidden-xs">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-6">
    <div class="bd-layoutcolumn-91"><div class="bd-vertical-align-wrapper"><div class=" bd-animation-1 animated" data-animation-name="fadeInLeft"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<div class=" bd-shadowinnerout-1">
    <div class="bd-outer-shadow">
        <div class="bd-shadow-inner"><div class=" bd-hoverbox-4 bd-effect-zoom">
  <div class="bd-slidesWrapper">
    <div class="bd-backSlide"><div class=" bd-container-75 bd-tagstyles">
    
    
 </div></div>
    <div class="bd-overSlide"
        
 data-url="#"
        
        ><div class=" bd-container-76 bd-tagstyles">
    <div class=" bd-textblock-65 bd-tagstyles">
    <p><?php echo $document->params->get('title6'); ?></p>
</div>
	
		<div class=" bd-textblock-66 bd-tagstyles">
    <p><?php echo $document->params->get('text6'); ?></p>
</div>
	
		<a href="<?php echo $document->params->get('link6'); ?>" class=" bd-linkbutton-12 bd-button-14 bd-icon-72"   >
<?php echo $document->params->get('button6'); ?>
</a>
    
 </div></div>
  </div>
</div>
</div>
    </div>
</div>
</div></div></div>
</div>
	
		<div class=" 
 col-md-6">
    <div class="bd-layoutcolumn-93"><div class="bd-vertical-align-wrapper"><div class=" bd-animation-2 animated" data-animation-name="slideInLeft"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<div class=" bd-bottomcornersshadow-1"><div class=" bd-hoverbox-5 bd-effect-zoom">
  <div class="bd-slidesWrapper">
    <div class="bd-backSlide"><div class=" bd-container-77 bd-tagstyles">
    
    
 </div></div>
    <div class="bd-overSlide"
        
        
        ><div class=" bd-container-78 bd-tagstyles">
    <div class=" bd-textblock-73 bd-tagstyles">
    <p><?php echo $document->params->get('title7'); ?></p>
</div>
	
		<div class=" bd-textblock-85 bd-tagstyles">
    <p><?php echo $document->params->get('text7'); ?></p>
</div>
	
		<a href="<?php echo $document->params->get('link7'); ?>" class=" bd-linkbutton-5 bd-button-20 bd-icon-57"   >
<?php echo $document->params->get('button7'); ?>
</a>
    
 </div></div>
  </div>
</div>
</div>
</div></div></div>
</div>
	
		<div class=" 
 col-md-6">
    <div class="bd-layoutcolumn-94"><div class="bd-vertical-align-wrapper"><div class=" bd-animation-3 animated" data-animation-name="slideInRight"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<div class=" bd-bottomcornersshadow-2"><div class=" bd-hoverbox-6 bd-effect-zoom">
  <div class="bd-slidesWrapper">
    <div class="bd-backSlide"><div class=" bd-container-79 bd-tagstyles">
    
    
 </div></div>
    <div class="bd-overSlide"
        
        
        ><div class=" bd-container-80 bd-tagstyles">
    <div class=" bd-textblock-87 bd-tagstyles">
    <p><?php echo $document->params->get('title8'); ?></p>
</div>
	
		<div class=" bd-textblock-89 bd-tagstyles">
    <p><?php echo $document->params->get('text8'); ?></p>
</div>
	
		<a href="<?php echo $document->params->get('link8'); ?>" class=" bd-linkbutton-8 bd-button-22 bd-icon-71"   >
<?php echo $document->params->get('button8'); ?>
</a>
    
 </div></div>
  </div>
</div>
</div>
</div></div></div>
</div>
	
		<div class=" 
 col-md-6">
    <div class="bd-layoutcolumn-92"><div class="bd-vertical-align-wrapper"><div class=" bd-layoutbox-3 clearfix">
    <div class="bd-container-inner">
        <div class=" bd-animation-6 animated" data-animation-name="slideInRight"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false">
<div class=" bd-bottomcornersshadow-3"><div class=" bd-hoverbox-2 bd-effect-zoom">
  <div class="bd-slidesWrapper">
    <div class="bd-backSlide"><div class=" bd-container-69 bd-tagstyles">
    
    
 </div></div>
    <div class="bd-overSlide"
        
        
        ><div class=" bd-container-72 bd-tagstyles">
    <div class=" bd-textblock-92 bd-tagstyles">
    <p><?php echo $document->params->get('title9'); ?></p>
</div>
	
		<div class=" bd-textblock-94 bd-tagstyles">
    <p><?php echo $document->params->get('text9'); ?></p>
</div>
	
		<a href="<?php echo $document->params->get('link9'); ?>" class=" bd-linkbutton-15 bd-button-31 bd-icon-83"   >
<?php echo $document->params->get('button9'); ?>
</a>
    
 </div></div>
  </div>
</div>
</div>
</div>
    </div>
</div></div></div>
</div>
            </div>
        </div>
    </div>
</div><?php } ?>
	
		<div class=" bd-stretchtobottom-1 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-9"><div class="bd-sheetstyles bd-contentlayout-9 ">
    <div class="bd-container-inner">
        <div class="bd-flex-vertical">
            
            <div class="bd-flex-horizontal bd-flex-wide">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide">
                    
                    <div class=" bd-layoutitemsbox-27 bd-flex-wide">
    <div class=" bd-content-9">
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
	<?php if ($mc == 1) { ?>
		<div class=" bd-layoutbox-1 clearfix">
    <div class="bd-container-inner">
        <div class=" bd-animation-15 animated" data-animation-name="zoomInRight"
                                    data-animation-event="scroll"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"><div class="bd-imagestyles-26 bd-googlemap-2 ">
    <div class="embed-responsive" style="height: 100%; width: 100%;">
        <iframe class="embed-responsive-item"
                src="http://maps.google.com/maps?output=embed&q=<?php echo $document->params->get('map1'); ?>, <?php echo $document->params->get('map2'); ?>&t=m"></iframe>
    </div>
</div>
</div>
    </div>
</div><?php } ?>
	
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