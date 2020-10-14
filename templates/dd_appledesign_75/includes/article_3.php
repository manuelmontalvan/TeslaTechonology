<?php function article_3($data) {
    ob_start();
    $classes = isset($data['classes']) && strlen($data['classes']) ? $data['classes'] : '';
    ?>
        
        <article class=" bd-article-3 <?php echo $classes; ?>">
            <?php 
    renderTemplateFromIncludes('postheader_3', array($data));
?>
	
		<div class=" bd-layoutbox-8 clearfix">
    <div class="bd-container-inner">
        <?php renderTemplateFromIncludes('posticondate_4', array($data)); ?>
	
		<?php renderTemplateFromIncludes('posticonauthor_5', array($data)); ?>
	
		<?php renderTemplateFromIncludes('posticonprint_6', array($data)); ?>
	
		<?php renderTemplateFromIncludes('posticonemail_7', array($data)); ?>
	
		<?php renderTemplateFromIncludes('posticonedit_8', array($data)); ?>
    </div>
</div>
	
		<div class=" bd-layoutbox-10 clearfix">
    <div class="bd-container-inner">
        <?php renderTemplateFromIncludes('extendedpostimage_3', array($data)); ?>
	
		<?php 
    renderTemplateFromIncludes('postcontent_3', array($data));
?>
    </div>
</div>
	
		<div class=" bd-layoutbox-12 clearfix">
    <div class="bd-container-inner">
        <?php renderTemplateFromIncludes('posticoncategory_9', array($data)); ?>
	
		<?php renderTemplateFromIncludes('posticontags_18', array($data)); ?>
    </div>
</div>
        </article>
        <div class="bd-container-inner"><?php 
    renderTemplateFromIncludes('pager_3', array($data));
?></div>
        
<?php
    return ob_get_clean();
}