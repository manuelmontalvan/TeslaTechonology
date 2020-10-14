<?php function article_2($data) {
    ob_start();
    $classes = isset($data['classes']) && strlen($data['classes']) ? $data['classes'] : '';
    ?>
        
        <article class=" bd-article-2 <?php echo $classes; ?>">
            <div class=" bd-layoutcontainer-10">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-1">
    <div class="bd-layoutcolumn-40"><div class="bd-vertical-align-wrapper"><img class="bd-imagestyles bd-imagelink-1   " src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/c554de0a5a95e71c0ef31dffa1af5b72_ktip.png"></div></div>
</div>
	
		<div class=" 
 col-md-23">
    <div class="bd-layoutcolumn-68"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('postheader_2', array($data));
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<div class=" bd-layoutbox-2 clearfix">
    <div class="bd-container-inner">
        <?php renderTemplateFromIncludes('posticonauthor_3', array($data)); ?>
	
		<?php renderTemplateFromIncludes('posticondate_16', array($data)); ?>
    </div>
</div>
	
		<div class=" bd-layoutbox-4 clearfix">
    <div class="bd-container-inner">
        <?php renderTemplateFromIncludes('extendedpostimage_1', array($data)); ?>
	
		<?php 
    renderTemplateFromIncludes('postcontent_2', array($data));
?>
	
		<?php renderTemplateFromIncludes('postreadmore_1', array($data)); ?>
    </div>
</div>
	
		<div class=" bd-layoutbox-6 clearfix">
    <div class="bd-container-inner">
        <?php renderTemplateFromIncludes('posticontags_19', array($data)); ?>
    </div>
</div>
        </article>
        <div class="bd-container-inner"><?php 
    renderTemplateFromIncludes('pager_2', array($data));
?></div>
        
<?php
    return ob_get_clean();
}