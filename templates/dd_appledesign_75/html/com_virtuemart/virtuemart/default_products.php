<?php
defined('_JEXEC') or die;
?>


<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))) . DIRECTORY_SEPARATOR . 'functions.php';

foreach ($this->products as $type => $productList ) {

if (count($productList) > 0) {

$productTitle = JText::_('COM_VIRTUEMART_'.$type.'_PRODUCT');

$productsCount = count($productList);
$i = 0;

$themeParams = JFactory::getApplication()->getTemplate(true)->params;

$itemsInRow = $themeParams->get('itemsInRow', '');

$desktops =  ''; $laptops = ''; $tablets = ''; $phones = '';

$slidersOptions = $themeParams->get('slidersOptions', '');
if ('' !== $slidersOptions  && '' !== $slidersOptions && isset($slidersOptions['-1'])) {
    $slidersOptions = json_decode(base64_decode($slidersOptions), true);
    $desktops =  $slidersOptions['-1']['desktops'];
    $laptops = $slidersOptions['-1']['laptops'];
    $tablets = $slidersOptions['-1']['tablets'];
    $phones = $slidersOptions['-1']['phones'];
}

$products_per_row = VmConfig::get ( 'homepage_products_per_row', '');
if ('' == $products_per_row) {
    $products_per_row = $itemsInRow;
}
$_itemsInRow = empty($products_per_row) ? '2' : intval($products_per_row);

$_itemClass = 'separated-item-2  grid';

$_widthLg = empty($desktops) ? '' : $desktops;
$_widthMd = empty($laptops) ? '' : $laptops;
$_widthSm = empty($tablets) ? '12' : $tablets;
$_widthXs = empty($phones) ? '' : $phones;

if ($_widthLg) {
    $_itemClass .= ' col-lg-' . $_widthLg;
}
if ($_widthMd) {
    $_itemClass .= ' col-md-' . $_widthMd;
}
if ($_widthSm) {
    $_itemClass .= ' col-sm-' . $_widthSm;
}
if ($_widthXs) {
    $_itemClass .= ' col-xs-' . $_widthXs;
}

?>
    
	<div data-slider-id="products_slider" class=" bd-productsslider-1" data-elements-per-row="<?php echo VmConfig::get ( 'homepage_products_per_row', 3 ); ?>">
	    <div class="bd-container-inner">
            <div class=" bd-block">
                <div class=" bd-container-53 bd-tagstyles">
                    <h4><?php echo $productTitle; ?></h4>
                </div>
                <div class=" bd-container-49 bd-tagstyles shape-only">
                <div class=" bd-grid-26">
                  <div class="container-fluid">
                    <div class="separated-grid row">
                        <div class="carousel slide<?php if ($productsCount <= $_itemsInRow): ?> single<?php endif; ?>">
                            <div class="carousel-inner">
                            <?php foreach ( $productList as $product ): ?>
                                <?php if ($i % $_itemsInRow == 0): ?>
                                    <div class="item<?php if ($i == 0): ?> active<?php endif ?>">
                                <?php endif; ?>
                                <?php
                                //create product title decorator object
                                $productTitleDecorator = new stdClass();
                                $productTitleDecorator->link = $product->link;
                                $productTitleDecorator->name = $product->product_name;
                                //create product manufacturer decorator object
                                $productManufacturerDecorator = new stdClass();
                                $productManufacturerDecorator->name = $product->mf_name;
                                //create product price decorator object
                                $productPriceDecorator = new stdClass();
                                $productPriceDecorator->show_prices = VmConfig::get ( 'show_prices' );
                                $productPriceDecorator->currency = $this->currency;
                                $productPriceDecorator->prices = $product->prices;
                                $productPriceDecorator->imagesExists = isset($product->images) ? true : false;
                                $productPriceDecorator->image = $productPriceDecorator->imagesExists ? $product->images[0] : null;
                                //create product image decorator object
                                $productImageDecorator = new stdClass();
                                $productImageDecorator->imagesExists = isset($product->images) ? true : false;
                                $productImageDecorator->image = $productImageDecorator->imagesExists ? $product->images[0] : null;
                                $productImageDecorator->link = $product->link;
                                //cretae products items collection
                                $productItems = new stdClass();
                                $productItems->productTitle = $productTitleDecorator;
                                $productItems->productManufacturer = $productManufacturerDecorator;
                                $productItems->productPrice = $productPriceDecorator;
                                $productItems->productImage = $productImageDecorator;
                                ?>
                                <div class="<?php echo $_itemClass; ?>">
                                    <div class=" bd-griditem-2">
                                        <?php 
    renderTemplateFromIncludes('product_image_2', array($productItems));
?>
	
		<?php 
    // todo context can be self product
    renderTemplateFromIncludes('product_sale_1', array($productItems));
?>
	
		<?php 
    // todo context can be self product
    renderTemplateFromIncludes('product_outofstock_1', array($productItems));
?>
	
		<?php 
    renderTemplateFromIncludes('product_title_3', array($productItems));
?>
	
		<?php 
    renderTemplateFromIncludes('product_price_2', array($productItems));
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
                echo JHTML::link (JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&layout=notify&virtuemart_product_id=' . $product->virtuemart_product_id), vmText::_ ('COM_VIRTUEMART_CART_NOTIFY'), array('class' => ' bd-productbuy-1 bd-button notify'));
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
                            'class' => ' bd-productbuy-1 bd-button add_to_cart_button'
                        );
                        echo JHTML::link ('#', JText::_ ('COM_VIRTUEMART_CART_ADD_TO'), $attributes);
                    } else {
                        $button = JHTML::link ($product->link, JText::_ ('COM_VIRTUEMART_CART_ADD_TO'),
                            array('title' => $product->name, 'class' => ' bd-productbuy-1 bd-button'));
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
<!-- end productbuy layout -->
                                    </div>
                                </div>
                            <?php if (($i + 1) % $_itemsInRow == 0 || $i == $productsCount - 1): ?>
                                </div>
                            <?php endif ?>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                            </div>
                    <?php if ($productsCount > $_itemsInRow): ?>
                            
                                <div class="left-button">
    <a class=" bd-carousel-5" href="#">
        <span class=" bd-icon-8"></span>
    </a>
</div>

<div class="right-button">
    <a class=" bd-carousel-5" href="#">
        <span class=" bd-icon-8"></span>
    </a>
</div>
                    <?php endif; ?>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
		</div>
	</div>
	</div>
	
<?php }
} ?>
