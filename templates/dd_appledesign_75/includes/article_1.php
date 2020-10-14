<?php function article_1($data) {
    if (is_string($data))
        $data = array('content' => $data);
    $classes = isset($data['classes']) && strlen($data['classes']) ? $data['classes'] : '';
    ?>
        
        <article class=" bd-article-1 clearfix <?php echo $classes; ?>">
            <?php 
    renderTemplateFromIncludes('postheader_1', array($data));
?>
	
		<?php 
    renderTemplateFromIncludes('postcontent_1', array($data));
?>
	
		
        </article>
        <div class="bd-container-inner"><?php 
    renderTemplateFromIncludes('pager_1', array($data));
?></div>
        
<?php
}