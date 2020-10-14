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

</head>
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
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
    <script src="<?php echo $templateUrl; ?>/modules.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <!--hover gallery-->
	
	<?php if ($galleryc == 1) { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/style_common.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/style8.css" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<?php } ?>
 <!--animate-->
        <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/animate.css" />
    <!--slideshow header start-->

<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/js/slider/themes/default/jquery.slider.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/js/slider/themes/default/jquery.slider.ie6.css" />
<![endif]-->
<!--social-->
<link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/social.css" type="text/css" media="screen" />
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

<div id="dd-main">
<header class="dd-header"><?php echo $view->position('position-30', 'dd-nostyle'); ?>

    <div class="dd-shapes">
        <div class="dd-object1029615938"><?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/slideshow.php'; ?></div>
<div class="dd-textblock dd-object1237202581">
        <div class="dd-object1237202581-text-container">
        <div class="dd-object1237202581-text"></div>
    </div>
    
<?php if ($welc == 1) { ?></div><div class="dd-textblock dd-object1562333370">
        <div class="dd-object1562333370-text-container">
        <div class="dd-object1562333370-text"><?php echo $this->params->get('text10'); ?></div>
    </div>
    
</div><div class="dd-textblock dd-object198166789">
        <div class="dd-object198166789-text-container">
        <div class="dd-object198166789-text"><?php echo $this->params->get('text11'); ?></div>
    </div><?php } ?>
    
</div><div class="dd-textblock dd-object435794080">
        <div class="dd-object435794080-text-container">
        <div class="dd-object435794080-text"></div>
    </div>
    
</div><div class="dd-textblock dd-object924592033">
        <div class="dd-object924592033-text-container">
        <div class="dd-object924592033-text"></div>
    </div>
    
</div>
            </div>

<h2 class="dd-slogan"><?php echo $this->params->get('siteSlogan'); ?></h2>



<div class="dd-logo dd-logo-552028536">
    <img src="<?php echo $templateUrl; ?>/images/logo-552028536.png" alt="" />
</div><div class="dd-logo dd-logo-1873112609">
    <img src="<?php echo $templateUrl; ?>/images/logo-1873112609.png" alt="" />
</div><a href="#" class="dd-logo dd-logo-1542927614">
    <img src="<?php echo $this->params->get('logo'); ?>" alt="" />
</a>
<div class="dd-textblock dd-object1481210773">
    <form class="dd-search" name="Search" action="<?php echo $document->baseurl; ?>/index.php" method="post">
    <input type="text" value="" name="searchword" />
        <input type="hidden" name="task" value="search" />
<input type="hidden" name="option" value="com_search" />
<input type="submit" value="" name="search" class="dd-search-button" />
        </form>
</div>
<?php if ($allic == 1) { ?><div class="social"><?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/social.php'; ?></div><?php } ?>
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
<div class="gallery"><?php if ($galleryc == 1) { ?><?php
$app = JFactory::getApplication();
$menu = $app->getMenu();
if ($menu->getActive() == $menu->getDefault()) {
	require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/foto.php';
}
?><?php } ?></div>
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
<?php if ($view->containsModules('position-27')) : ?>
    <?php echo $view->position('position-27', 'dd-nostyle'); ?>
<?php else: ?>
<span style="font-size: 13px;">
<span style="color: #FFFFFF;">Copyright © <?php echo date("Y");?>&nbsp;</span><span style="font-weight: bold; color: #FFC638;"><?php echo $this->params->get('footer'); ?></span><span style="color: #FFFFFF;">&nbsp;</span><span style="color: #FFFFFF;">Rights Reserved.</span>
</span>
    <?php endif; ?>
<p class="dd-page-footer">
        <?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/footer.php'; ?>
    </p>
  </div>
</footer>

</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
  $(".slider").slideshow({
    width      : 1920,
    height     : 381,
	transition : 'fade'
 
  });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<?php echo $view->position('debug'); ?>
</body>
</html>