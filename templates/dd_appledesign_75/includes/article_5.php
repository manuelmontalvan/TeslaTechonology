<?php function article_5($data) {
    ob_start();
    $classes = isset($data['classes']) && strlen($data['classes']) ? $data['classes'] : '';
    ?>
        
        <article class=" bd-article-5 <?php echo $classes; ?>">
            <?php 
    renderTemplateFromIncludes('postheader_5', array($data));
?>
	
		<div class=" bd-layoutcontainer-20">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-12">
    <div class="bd-layoutcolumn-45"><div class="bd-vertical-align-wrapper"><?php renderTemplateFromIncludes('posticondate_10', array($data)); ?></div></div>
</div>
	
		<div class=" 
 col-md-12">
    <div class="bd-layoutcolumn-46"><div class="bd-vertical-align-wrapper"><?php renderTemplateFromIncludes('posticonauthor_11', array($data)); ?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<?php 
    renderTemplateFromIncludes('postcontent_5', array($data));
?>
        </article>
        <div class="bd-container-inner"><?php 
    renderTemplateFromIncludes('pager_5', array($data));
?></div>
        
<?php
    return ob_get_clean();
}