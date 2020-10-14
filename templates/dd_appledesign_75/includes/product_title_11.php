<?php
function product_title_11($productItems) {
    ?>
    <?php if (isset($productItems->productTitle)) : ?>
        <div class=" bd-producttitle-16">
    <?php
    if ('' !== $productItems->productTitle->link)
        echo JHTML::link($productItems->productTitle->link, $productItems->productTitle->name);
    else 
        echo $productItems->productTitle->name;
    ?>
</div>
    <?php endif; ?>
    <?php
}