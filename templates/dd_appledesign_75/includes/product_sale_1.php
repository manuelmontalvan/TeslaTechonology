<?php
function product_sale_1($productItems) {
    ?>
    <?php if (isset($productItems->productSale)) : ?>
        <?php if ($productItems->productSale->prices['discountedPriceWithoutTax'] != $productItems->productSale->prices['priceWithoutTax']) : ?>
            <div class=" bd-productsaleicon bd-productsale-1">
                <span>Sale!</span>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php
}