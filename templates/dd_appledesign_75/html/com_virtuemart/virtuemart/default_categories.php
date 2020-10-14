<?php
defined('_JEXEC') or die;
?>

<?php require_once dirname(dirname(dirname(dirname(__FILE__)))) . DIRECTORY_SEPARATOR . 'functions.php'; ?>
<div class=" bd-productcategories-1">
  <div class="container-fluid">
    <div class="separated-grid row">
    <div class=" bd-container-9 bd-tagstyles">
    <?php echo JText::_('COM_VIRTUEMART_CATEGORIES') ?>
</div>
    <?php foreach ($this->categories as $category) : ?>
    <?php
            $categoryNameDecorator = new stdClass();
            $categoryNameDecorator->link = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_category_id=' . $category->virtuemart_category_id, FALSE);
    $categoryNameDecorator->name = $category->category_name;
    $categoryImageDecorator = new stdClass();
    $categoryImageDecorator->image = $category->images[0];
    $categoryImageDecorator->link = $categoryNameDecorator->link;
    $categoryItems = new stdClass();
    $categoryItems->categoryName = $categoryNameDecorator;
    $categoryItems->categoryImage = $categoryImageDecorator;
    ?>
    
    <div class="separated-item-3 col-md-24 grid">
        <div class=" bd-griditem-3">
            <?php 
    renderTemplateFromIncludes('category_name_1', array($categoryItems));
?>
	
		<?php 
    renderTemplateFromIncludes('category_image_1', array($categoryItems));
?>
        </div>
    </div>
    <?php endforeach; ?>
    </div>
  </div>
</div>
