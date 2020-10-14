<?php
function product_sale_3($productItems) {
    ?>
    <?php if (isset($productItems->productSale)) : ?>
        <?php if ($productItems->productSale->prices['discountedPriceWithoutTax'] != $productItems->productSale->prices['priceWithoutTax']) : ?>
            <div class=" bd-productsaleicon bd-productsale-3">
                <span>Sale!</span>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php
}