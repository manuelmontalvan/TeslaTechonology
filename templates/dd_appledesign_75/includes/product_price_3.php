<?php
function product_price_3($productItems) {
    ?>
    <?php if (isset($productItems->productPrice)) : ?>
        <div class=" bd-productprice-3">
        <?php
        if ($productItems->productPrice->show_prices == '1') {
            if ($productItems->productPrice->prices['salesPrice']<=0 and VmConfig::get ('askprice', 1) 
                and $productItems->productPrice->imagesExists && !$productItems->productPrice->image->file_is_downloadable) {
                echo JText::_ ('COM_VIRTUEMART_PRODUCT_ASKPRICE');
            }
        $oldPrice = false;
        $oldPriceProps = array('name' => 'basePrice', 'description' => 'COM_VIRTUEMART_PRODUCT_BASEPRICE', $productItems->productPrice->prices, true);
        $regularPriceProps = array('name' => 'salesPrice', 'description' => 'COM_VIRTUEMART_PRODUCT_SALESPRICE', $productItems->productPrice->prices, true);
        ?>
        
            <div class=" bd-pricetext-10">
    <?php
		$html = call_user_func_array(array(&$productItems->productPrice->currency, 'createPriceDiv'), $regularPriceProps);
    ?>
    
    <span class=" bd-container-30 bd-tagstyles">
        <?php echo $html; ?>
    </span>

</div>
            
            <div class=" bd-pricetext-11">
    <?php
		$html = call_user_func_array(array(&$productItems->productPrice->currency, 'createPriceDiv'), $oldPriceProps);
    ?>
    
    <span class=" bd-container-31 bd-tagstyles">
        <?php echo $html; ?>
    </span>
</div>
        <?php } ?>
        </div>
    <?php endif; ?>
    <?php
}