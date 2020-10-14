<?php function article_6($data) {
    ob_start();
    $classes = isset($data['classes']) && strlen($data['classes']) ? $data['classes'] : '';
    ?>
        
        <article class=" bd-article-6 <?php echo $classes; ?>">
            <?php 
    renderTemplateFromIncludes('postheader_6', array($data));
?>
	
		<div class=" bd-layoutcontainer-22">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-12">
    <div class="bd-layoutcolumn-49"><div class="bd-vertical-align-wrapper"><?php renderTemplateFromIncludes('posticondate_12', array($data)); ?></div></div>
</div>
	
		<div class=" 
 col-md-12">
    <div class="bd-layoutcolumn-50"><div class="bd-vertical-align-wrapper"><?php renderTemplateFromIncludes('posticonauthor_13', array($data)); ?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<?php 
    renderTemplateFromIncludes('postcontent_6', array($data));
?>
	
		<div class=" bd-layoutcontainer-23">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-8">
    <div class="bd-layoutcolumn-51"><div class="bd-vertical-align-wrapper"><?php renderTemplateFromIncludes('posticoncategory_14', array($data)); ?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
        </article>
        <div class="bd-container-inner"><?php 
    renderTemplateFromIncludes('pager_6', array($data));
?></div>
        
<?php
    return ob_get_clean();
}