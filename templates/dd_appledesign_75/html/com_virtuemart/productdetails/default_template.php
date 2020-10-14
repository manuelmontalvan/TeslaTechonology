<!--COMPONENT common -->
<?php ob_start();

if (method_exists('shopFunctionsF', 'renderVmSubLayout')) {
    echo shopFunctionsF::renderVmSubLayout('askrecomjs',array('product'=>$this->product));
}

/* Let's see if we found the product */
if (empty($this->product)) {
    echo JText::_('COM_VIRTUEMART_PRODUCT_NOT_FOUND');
    echo '<br /><br />  ' . $this->continue_link_html;
    return;
}

$product = $this->product;
$product->isDetailsLayout = true;

//create product title decorator object
$productTitleDecorator = new stdClass();
$productTitleDecorator->link = '';
$productTitleDecorator->name = $this->product->product_name;
//create product desc decorator object
$productDescDecorator = new stdClass();
$productDescDecorator->desc = $this->product->product_desc;
$productDescDecorator->isFull = true;
//create product manufacturer decorator object
$productManufacturerDecorator = new stdClass();
$productManufacturerDecorator->name = $product->mf_name;
//create product price decorator object
$productPriceDecorator = new stdClass();
$productPriceDecorator->show_prices = $this->show_prices;
$productPriceDecorator->currency = $this->currency;
$productPriceDecorator->prices = $this->product->prices;
$productPriceDecorator->imagesExists = isset($this->product->images) ? true : false;
$productPriceDecorator->image = $productPriceDecorator->imagesExists ? $this->product->images[0] : null;
//cretae products items collection
$productItems = new stdClass();
$productItems->productTitle = $productTitleDecorator;
$productItems->productDesc  = $productDescDecorator;
$productItems->productManufacturer = $productManufacturerDecorator;
$productItems->productPrice = $productPriceDecorator;
$productItems->askquestion_url = JRoute::_('index.php?option=com_virtuemart&view=productdetails&task=askquestion&virtuemart_product_id=' . $this->product->virtuemart_product_id . '&virtuemart_category_id=' . $this->product->virtuemart_category_id . '&tmpl=component', FALSE);
?>
<div class=" bd-productoverview">
    <div class=" bd-layoutcontainer-29">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-16">
    <div class="bd-layoutcolumn-64"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('product_overview_title_1', array($productItems));
?>
	
		<?php 
    renderTemplateFromIncludes('product_overview_image_1', array($this));
?>
	
		<?php 
    renderTemplateFromIncludes('image_thumbnails_1', array($this));
?></div></div>
</div>
	
		<div class=" 
 col-md-8">
    <div class="bd-layoutcolumn-65"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('product_price_5', array($productItems));
?>
	
		<?php 
    renderTemplateFromIncludes('product_rating_1', array($this));
?>
	
		<?php 
    renderTemplateFromIncludes('product_desc_3', array($productItems));
?>
	
		<?php 
    renderTemplateFromIncludes('product_variations_1', array($this));
?>
	
		<!-- start productbuy layout -->
<form method="post" class="product" action="<?php echo JRoute::_ ('index.php'); ?>">
    <?php // todo output customfields ?>
    <?php if (!VmConfig::get('use_as_catalog', 0)) : ?>
        <?php
            $quantity = 1;
            if (isset($product->step_order_level) && (int)$product->step_order_level > 0) {
                $quantity = $product->step_order_level;
            } else if (!empty($product->min_order_level)){
                $quantity = $product->min_order_level;
            }
        ?>
        <?php $stockhandle = VmConfig::get ('stockhandle', 'none'); ?>
        <?php if (($stockhandle == 'disableit' or $stockhandle == 'disableadd') and ($product->product_in_stock - $product->product_ordered) < 1) : ?>
            <?php
                echo JHTML::link (JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&layout=notify&virtuemart_product_id=' . $product->virtuemart_product_id), vmText::_ ('COM_VIRTUEMART_CART_NOTIFY'), array('class' => ' bd-productbuy-4 bd-button notify'));
            ?>
        <?php else : ?>
            <?php
                $tmpPrice = (float) $product->prices['costPrice'];
                if (!(VmConfig::get('askprice', true) and empty($tmpPrice))) {
                    if (isset($product->orderable)) {
                        $vmLang = VmConfig::get ('vmlang_js', 1) ? '&lang=' . substr (VmConfig::$vmlang, 0, 2) : '';
                        $attributes = array(
                            'data-vmsiteurl' => JURI::root( ),
                            'data-vmlang' => $vmLang,
                            'data-vmsuccessmsg' => 'Added',
                            'title' => $product->product_name,
                            'class' => ' bd-productbuy-4 bd-button add_to_cart_button'
                        );
                        echo JHTML::link ('#', JText::_ ('COM_VIRTUEMART_CART_ADD_TO'), $attributes);
                    } else {
                        $button = JHTML::link ($product->link, JText::_ ('COM_VIRTUEMART_CART_ADD_TO'),
                            array('title' => $product->name, 'class' => ' bd-productbuy-4 bd-button'));
                        if (isset($product->isDetailsLayout))
                            $button = JText::_('COM_VIRTUEMART_ADDTOCART_CHOOSE_VARIANT');
                        echo $button;
                    }
                }
            ?>
        <?php endif; ?>
    <?php endif; ?>
    <input type="hidden" name="quantity[]" value="<?php echo $quantity; ?>"/>
    <noscript><input type="hidden" name="task" value="add"/></noscript>
    <input type="hidden" name="option" value="com_virtuemart"/>
    <input type="hidden" name="view" value="cart"/>
    <input type="hidden" name="virtuemart_product_id[]" value="<?php echo $product->virtuemart_product_id ?>"/>
    <input type="hidden" class="pname" value="<?php echo htmlentities($product->product_name) ?>"/>
</form>
<!-- end productbuy layout --></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<?php 
    renderTemplateFromIncludes('tab_information_control_1', array($this));
?>
<?php if (method_exists('vmJsApi', 'writeJS')) : ?>
<?php
$j = "Virtuemart.container = jQuery('.bd-productoverview');
Virtuemart.containerSelector = '.bd-productoverview';";
vmJsApi::addJScript('ajaxContent', $j);
echo vmJsApi::writeJS();
?>
<?php endif; ?>
</div>
<?php
echo ob_get_clean();
?>
<!--COMPONENT common /-->