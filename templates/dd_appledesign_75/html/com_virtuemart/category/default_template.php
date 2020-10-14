<!--COMPONENT common -->
<?php ob_start(); ?>

<div class=" bd-products">
    <?php if (!empty($this->keyword)) : ?>
        <h3><?php echo $this->keyword; ?></h3>
    <?php endif; ?>
    
    <div class=" bd-container-52 bd-tagstyles">
    <h2><?php echo $this->category->category_name; ?></h2>
</div>
    
    <div class=" bd-categories-24">
    
    
</div>
    <?php if (!empty($this->products)) : ?>
    <div class=" bd-productsgridbar-28">
    <div class="bd-container-inner">
        <div class=" bd-layoutcontainer-27">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-8">
    <div class="bd-layoutcolumn-57"><div class="bd-vertical-align-wrapper"><div class=" bd-typeselector-1">
    
</div></div></div>
</div>
	
		<div class=" 
 col-md-9">
    <div class="bd-layoutcolumn-58"><div class="bd-vertical-align-wrapper"><?php   
    renderTemplateFromIncludes('products_sorter_1', array($this));
?></div></div>
</div>
	
		<div class=" 
 col-md-7">
    <div class="bd-layoutcolumn-59"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('products_per_page_1', array($this));
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<?php renderTemplateFromIncludes('products_grid_pagination_1', array($this)); ?>
    </div>
</div>
    <div class=" bd-grid-53">
      <div class="container-fluid">
        <div class="separated-grid row">
          <?php foreach ( $this->products as $product ) : ?>
    <?php
        //create product title decorator object
        $productTitleDecorator = new stdClass();
        $productTitleDecorator->link = $product->link;
        $productTitleDecorator->name = $product->product_name;
        //create product desc decorator object
        $productDescDecorator = new stdClass();
        $productDescDecorator->desc = $product->product_s_desc;
        //create product manufacturer decorator object
        $productManufacturerDecorator = new stdClass();
        $productManufacturerDecorator->name = $product->mf_name;
        //create product price decorator object
        $productPriceDecorator = new stdClass();
        $productPriceDecorator->show_prices = $this->show_prices;
        $productPriceDecorator->currency = $this->currency;
        $productPriceDecorator->prices = $product->prices;
        $productPriceDecorator->imagesExists = isset($product->images) ? true : false;
        $productPriceDecorator->image = $productPriceDecorator->imagesExists ? $product->images[0] : null;
        //create product image decorator object
        $productImageDecorator = new stdClass();
        $productImageDecorator->imagesExists = isset($product->images) ? true : false;
        $productImageDecorator->image = $productImageDecorator->imagesExists ? $product->images[0] : null;
        $productImageDecorator->link = $product->link;
        //create product sale decorator object
        $productSaleDecorator = new stdClass();
        $productSaleDecorator->prices = $product->prices;
        $productSaleDecorator->currency = $this->currency;
        //create product out of stock decorator object
        $productOutOfStockDecorator = new stdClass();
        if (isset($product->product_in_stock) && isset($product->product_ordered)) {
            $productOutOfStockDecorator->product_in_stock = $product->product_in_stock;
            $productOutOfStockDecorator->product_ordered = $product->product_ordered;
        } else {
            $productOutOfStockDecorator = null;
        }
        $productOutOfStockDecorator->product_in_stock = isset($product->product_in_stock) ? $product->product_in_stock : null;
        $productOutOfStockDecorator->product_ordered = isset($product->product_ordered) ? $product->product_ordered : null;
        //create products items collection
        $productItems = new stdClass();
        $productItems->productTitle = $productTitleDecorator;
        $productItems->productDesc  = $productDescDecorator;
        $productItems->productManufacturer = $productManufacturerDecorator;
        $productItems->productPrice = $productPriceDecorator;
        $productItems->productImage = $productImageDecorator;
        $productItems->productSale = $productSaleDecorator;
        $productItems->productOutOfStock = $productOutOfStockDecorator;

        $defaultLayoutName = "grid";
        $activeLayoutName = empty($_COOKIE['layoutType']) ? $defaultLayoutName : $_COOKIE['layoutType'];
    ?>
    
    <div class="separated-item-5 col-lg-6 col-md-8 col-sm-12 grid"<?php if ('grid' !== $activeLayoutName): ?> style="display: none;"<?php endif ?>>
        <div class=" bd-griditem-5">
            <?php 
    renderTemplateFromIncludes('product_image_4', array($productItems));
?>
	
		<?php 
    renderTemplateFromIncludes('product_title_7', array($productItems));
?>
	
		<?php 
    renderTemplateFromIncludes('product_price_3', array($productItems));
?>
	
		<div class=" bd-layoutcontainer-41">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-24
 col-sm-12
 col-xs-12">
    <div class="bd-layoutcolumn-119"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('product_desc_1', array($productItems));
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
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
                echo JHTML::link (JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&layout=notify&virtuemart_product_id=' . $product->virtuemart_product_id), vmText::_ ('COM_VIRTUEMART_CART_NOTIFY'), array('class' => ' bd-productbuy-2 bd-button notify'));
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
                            'class' => ' bd-productbuy-2 bd-button add_to_cart_button'
                        );
                        echo JHTML::link ('#', JText::_ ('COM_VIRTUEMART_CART_ADD_TO'), $attributes);
                    } else {
                        $button = JHTML::link ($product->link, JText::_ ('COM_VIRTUEMART_CART_ADD_TO'),
                            array('title' => $product->name, 'class' => ' bd-productbuy-2 bd-button'));
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
	
		<?php 
    // todo context can be self product
    renderTemplateFromIncludes('product_sale_2', array($productItems));
?>
        </div>
    </div>
    <div class="separated-item-6 col-md-24 list"<?php if ('list' !== $activeLayoutName): ?> style="display: none;"<?php endif ?>>
        <div class=" bd-griditem-6">
            <div class=" bd-layoutcontainer-26">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                
 bd-row-align-top
                
                ">
                <div class=" 
 col-md-5">
    <div class="bd-layoutcolumn-54"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('product_image_5', array($productItems));
?>
	
		<?php 
    // todo context can be self product
    renderTemplateFromIncludes('product_sale_3', array($productItems));
?>
	
		<?php 
    // todo context can be self product
    renderTemplateFromIncludes('product_outofstock_3', array($productItems));
?></div></div>
</div>
	
		<div class=" 
 col-md-13">
    <div class="bd-layoutcolumn-55"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('product_title_9', array($productItems));
?>
	
		<?php 
    renderTemplateFromIncludes('product_desc_2', array($productItems));
?></div></div>
</div>
	
		<div class=" 
 col-md-6">
    <div class="bd-layoutcolumn-56"><div class="bd-vertical-align-wrapper"><?php 
    renderTemplateFromIncludes('product_price_4', array($productItems));
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
                echo JHTML::link (JRoute::_ ('index.php?option=com_virtuemart&view=productdetails&layout=notify&virtuemart_product_id=' . $product->virtuemart_product_id), vmText::_ ('COM_VIRTUEMART_CART_NOTIFY'), array('class' => ' bd-productbuy-3 bd-button notify'));
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
                            'class' => ' bd-productbuy-3 bd-button add_to_cart_button'
                        );
                        echo JHTML::link ('#', JText::_ ('COM_VIRTUEMART_CART_ADD_TO'), $attributes);
                    } else {
                        $button = JHTML::link ($product->link, JText::_ ('COM_VIRTUEMART_CART_ADD_TO'),
                            array('title' => $product->name, 'class' => ' bd-productbuy-3 bd-button'));
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
        </div>
    </div>
    <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class=" bd-productsgridbar-30">
    <div class="bd-container-inner">
        <?php renderTemplateFromIncludes('products_grid_pagination_2', array($this)); ?>
    </div>
</div>
    <?php elseif ($this->search !==null ) : ?>
        <?php echo JText::_('COM_VIRTUEMART_NO_RESULT').($this->keyword? ' : ('. $this->keyword. ')' : ''); ?>
    <?php endif; ?>
</div>

<?php
echo ob_get_clean();
?>
<!--COMPONENT common /-->