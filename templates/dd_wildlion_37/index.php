<?php
/**
 *-------------------------------------------
 * Szablon został wypalony w  Diablodesign.
 * www.diablodesign.eu
 * biuro@diablodesign.eu
 * tel.666-977-944
 *-------------------------------------------
 */
defined('_JEXEC') or die;
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = $this;
$templateUrl = $document->baseurl . '/templates/' . $document->template;
Artx::load("Artx_Page");
$view = $this->artx = new ArtxPage($this);
$view->componentWrapper();
JHtml::_('behavior.framework', true);
?>
<?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/close.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" type="text/css" />
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all" type="text/css" />

<link rel="shortcut icon" href="<?php echo $templateUrl; ?>/favicon.ico" type="image/x-icon" />
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script src="<?php echo $templateUrl; ?>/js/matrix.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
    <script src="<?php echo $templateUrl; ?>/modules.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
   
<!--slideshow header start-->

<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/js/slider/themes/default/jquery.slider.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/js/slider/themes/default/jquery.slider.ie6.css" />
<![endif]-->

<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/slider/jquery.slider.min.js"></script>

<!--To Top-->
		<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
</head>
<body>
<!--License Number :<?php echo $this->params->get('license'); ?>-->


<div id="dd-main">
<header class="dd-header"><?php echo $view->position('position-30', 'dd-nostyle'); ?>

    <div class="dd-shapes">
        <div class="dd-object611588441"></div>
<div class="dd-object509234563"><?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/slideshow.php'; ?></div>
<?php if ($textc == 1) { ?><div class="dd-textblock dd-object381997192">
        <div class="dd-object381997192-text-container">
        <div class="dd-object381997192-text">
        
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>


  <span class="typewrite" data-period="2000" data-type='[ "<?php echo $this->params->get('text1'); ?>", "<?php echo $this->params->get('text2'); ?>", "<?php echo $this->params->get('text3'); ?>", "<?php echo $this->params->get('text4'); ?>" ]'>
    <span class="wrap"></span>
  </span>
</div>
    </div>
    
</div><?php } ?>
            </div>


<?php if ($banerc == 1) { ?><div class="dd-positioncontrol dd-positioncontrol-1965135690" id="social_icon">
<div class="container">
    <div class="header">
        <div class="clr"></div>
    </div>
    <div class="sp-container">
        <div class="sp-content">
            <div class="sp-globe"></div>
            	<h2 class="frame-1"><?php echo $this->params->get('baner1'); ?></h2>

            	<h2 class="frame-2"><?php echo $this->params->get('baner2'); ?></h2>

            	<h2 class="frame-3"><?php echo $this->params->get('baner3'); ?></h2>

            	<h2 class="frame-4"><?php echo $this->params->get('baner4'); ?></h2>

            	<h2 class="frame-5"><span><?php echo $this->params->get('baner5'); ?></span></h2>


        </div>
    </div>
</div></div><?php } ?>

<div class="dd-textblock dd-textblock-711025143">
        <?php if ($fbc == 1) { ?><div class="dd-textblock-711025143-text-container">
        <div class="dd-textblock-711025143-text"><a href="<?php echo $this->params->get('facebook'); ?>" target="_blank" class="dd-facebook-tag-icon"></a></div>
    </div><?php } ?>
    
</div><div class="dd-textblock dd-textblock-2097708243">
        <?php if ($twc == 1) { ?><div class="dd-textblock-2097708243-text-container">
        <div class="dd-textblock-2097708243-text"><a href="<?php echo $this->params->get('twiter'); ?>" target="_blank" class="dd-twitter-tag-icon"></a></div>
    </div><?php } ?>
    
</div><div class="dd-textblock dd-textblock-1528111634">
        <?php if ($vc == 1) { ?><div class="dd-textblock-1528111634-text-container">
        <div class="dd-textblock-1528111634-text"><a href="<?php echo $this->params->get('vimeo'); ?>" target="_blank" class="dd-vimeo-tag-icon"></a></div>
    </div><?php } ?>
    
</div><div class="dd-textblock dd-textblock-829869460">
        <?php if ($pc == 1) { ?><div class="dd-textblock-829869460-text-container">
        <div class="dd-textblock-829869460-text"><a href="<?php echo $this->params->get('pinterest'); ?>" target="_blank" class="dd-pinterest-tag-icon"></a></div>
    </div><?php } ?>
    
</div>
<a href="index.php" class="dd-logo dd-logo-2133719317">
    <img src="<?php echo $this->params->get('logo'); ?>" alt="logo" />
</a>
<div class="dd-textblock dd-object891648705">
    <form class="dd-search" name="Search" action="<?php echo $document->baseurl; ?>/index.php" method="post">
    <input type="text" value="" name="searchword" />
        <input type="hidden" name="task" value="search" />
<input type="hidden" name="option" value="com_search" />
<input type="submit" value="" name="search" class="dd-search-button" />
        </form>
</div>

<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="dd-nav">
    <div class="dd-nav-inner">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="dd-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="dd-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
        </div>
    </nav>
<?php endif; ?>

                    
</header>
<div class="dd-sheet clearfix">
            <?php echo $view->position('position-15', 'dd-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'dd-block'); ?>
<div class="dd-layout-wrapper">
                <div class="dd-content-layout">
                    <div class="dd-content-layout-row">
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="dd-layout-cell dd-sidebar1">
<?php echo $view->position('position-7', 'dd-block'); ?>
<?php echo $view->position('position-4', 'dd-block'); ?>
<?php echo $view->position('position-5', 'dd-block'); ?>




                        </div>
<?php endif; ?>

                        <div class="dd-layout-cell dd-content">
<?php
  echo $view->position('position-19', 'dd-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'dd-article');
  echo $view->position('position-12', 'dd-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' dd-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'dd-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'dd-article');
  echo $view->position('position-25', 'dd-nostyle');
?>



                        </div>
                        <?php if ($view->containsModules('position-6', 'position-8', 'position-3')) : ?>
<div class="dd-layout-cell dd-sidebar2">
<?php echo $view->position('position-6', 'dd-block'); ?>
<?php echo $view->position('position-8', 'dd-block'); ?>
<?php echo $view->position('position-3', 'dd-block'); ?>


                        </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'dd-block'); ?>
<?php echo $view->position('position-26', 'dd-nostyle'); ?>


    </div>
<footer class="dd-footer">
  <div class="dd-footer-inner">
<div class="dd-content-layout layout-item-0">
    <div class="dd-content-layout-row">
    <div class="dd-layout-cell layout-item-1" style="width: 33%">
<?php if ($view->containsModules('position-32')) : ?>
    <?php echo $view->position('position-32', 'dd-nostyle'); ?>
<?php else: ?>
        <div style="position:relative;padding-left:0px;padding-right:0px"><span style="color: #FF9233;">Copyright © <?php echo date("Y");?>.</span>&nbsp;<span style="font-weight: bold;"><?php echo $this->params->get('footer'); ?></span> Rights Reserved.</div>
    <?php endif; ?>
</div><div class="dd-layout-cell layout-item-2" style="width: 34%">
<?php if ($view->containsModules('position-33')) : ?>
    <?php echo $view->position('position-33', 'dd-nostyle'); ?>
<?php else: ?>
        <p><br /></p>
    <?php endif; ?>
</div><div class="dd-layout-cell layout-item-3" style="width: 33%">
<?php if ($view->containsModules('position-34')) : ?>
    <?php echo $view->position('position-34', 'dd-nostyle'); ?>
<?php else: ?>
        <p style="text-align: right;"><br /></p>
    <?php endif; ?>
</div>
    </div>
</div>

    <p class="dd-page-footer">
        <?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/footer.php'; ?>
    </p>
  </div>
</footer>

</div>


<?php echo $view->position('debug'); ?>
<!--start slideshow--><script type="text/javascript">
jQuery(document).ready(function($) {
  $(".slider").slideshow({
    width      : 1000,
    height     : 292,
    transition : 'explode'
  });
});
</script>
<!--To Top-->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>