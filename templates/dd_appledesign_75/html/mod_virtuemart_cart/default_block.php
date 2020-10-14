<?php
defined('_JEXEC') or die;
?>
<?php /*BEGIN_EDITOR_OPEN*/
$app = JFactory::getApplication('site');
$templateName = $app->getTemplate();

$ret = false;
$templateDir = JPATH_THEMES . '/' . $templateName;
$editorClass = $templateDir . '/app/' . 'Editor.php';

if (!$app->isAdmin() && file_exists($editorClass)) {
    require_once $templateDir . '/app/' . 'Editor.php';
    $ret = DesignerEditor::override($templateName, __FILE__);
}

if ($ret) {
    $editorDir = $templateName . '/editor';
    require($ret);
    return;
} else {
/*BEGIN_EDITOR_CLOSE*/ ?>
<div class=" bd-cartcontainer-1">
    <?php $currentRawProduct = reset($data->rawProducts); ?>
<div class=" bd-grid-15">
    <div class="container-fluid">
        <div class="separated-grid row">
        <?php foreach ($data->products as $product): ?>
            <?php
                preg_match('/href="(.*?)"/i', $product['product_name'], $hrefParts);
                $product['href'] = $hrefParts[1];
                //create product title decorator object
                $productTitleDecorator = new stdClass();
                $productTitleDecorator->link = $product['href'];
                $productTitleDecorator->name = $product['product_name'];
                //cretae products items collection
                $productItems = new stdClass();
                $productItems->productTitle = $productTitleDecorator;
                $productImageDecorator = new stdClass();
                $productImageDecorator->imagesExists = true;
                if ($currentRawProduct && $currentRawProduct->virtuemart_media_id && $currentRawProduct->virtuemart_media_id[0]) {
                    if (!class_exists ('TableMedias'))
                        require(JPATH_VM_ADMINISTRATOR . DS . 'tables' . DS . 'medias.php');
                    $db = JFactory::getDBO ();
                    $result = new TableMedias($db);
                    $result->load((int)$currentRawProduct->virtuemart_media_id[0]);
                    if (!class_exists ('VmMediaHandler'))
                        require(JPATH_VM_ADMINISTRATOR . DS . 'helpers' . DS . 'mediahandler.php');
                    $media = VmMediaHandler::createMedia ($result, 'product');
                    $productImageDecorator->image = $media;
                } else {
                    $themeUrl = VmConfig::get('vm_themeurl',0);
                    if(empty($themeUrl)) {
                        $themeUrl = JURI::root().'components/com_virtuemart/';
                    }
                    $src = $themeUrl.'assets/images/vmgeneral/' . VmConfig::get('no_image_set');
                    $alt = JText::_('COM_VIRTUEMART_NO_IMAGE_SET');
                    $productImageDecorator->image = '<img src="' . $src . '" alt="' . $alt . '" />';
                }
                $productImageDecorator->link = $product['href'];
                $productImageDecorator->offsetHeight = 0;
                $productImageDecorator->offsetWidth = 0;
                $productItems->productImage = $productImageDecorator;
            ?>
            <div class="separated-item-1 col-md-24 list">
    <div class=" bd-griditem-1"><div class=" bd-layoutcontainer-14">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
 bd-collapsed-gutter
                ">
                <div class=" 
 col-md-6">
    <div class="bd-layoutcolumn-35"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('product_image_12', array($productItems));
?></div></div>
</div>
	
		<div class=" 
 col-md-16">
    <div class="bd-layoutcolumn-36"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('product_title_19', array($productItems));
?>
	
		<?php 
    renderTemplateFromIncludes('cart_price_7', array($product));
?></div></div>
</div>
	
		<div class=" 
 col-md-2">
    <div class="bd-layoutcolumn-37"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('item_edit_link_6', array($product));
?>
	
		<?php 
    renderTemplateFromIncludes('item_remove_link_7');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div></div>
</div>
        <?php $currentRawProduct = next($data->rawProducts); ?>
        <?php endforeach; ?>
        </div>
    </div>
</div>
	
		<div class=" bd-pricetext-4">
    <span class=" bd-label-4">
	<?php echo $totalLabel; ?>
</span>
    <span class=" bd-container-6 bd-tagstyles">
        <?php echo $totalPrice; ?>
    </span>
</div>
	
		<div class=" bd-layoutcontainer-2">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-8">
    <div class="bd-layoutcolumn-4"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('cart_view_1', array($cartHref, $cartText));
?></div></div>
</div>
	
		<div class=" 
 col-md-16">
    <div class="bd-layoutcolumn-5"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('cart_checkout_1', array());
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
</div>
<?php /*END_EDITOR_OPEN*/ } /*END_EDITOR_CLOSE*/ ?>