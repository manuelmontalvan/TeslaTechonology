<?php function article_4($data) {
    ob_start();
    $classes = isset($data['classes']) && strlen($data['classes']) ? $data['classes'] : '';
    ?>
        
        <article class=" bd-article-4 <?php echo $classes; ?>">
            <?php 
    renderTemplateFromIncludes('postheader_4', array($data));
?>
	
		<?php 
    renderTemplateFromIncludes('postcontent_4', array($data));
?>
        </article>
        <div class="bd-container-inner"><?php 
    renderTemplateFromIncludes('pager_4', array($data));
?></div>
        
<?php
    return ob_get_clean();
}