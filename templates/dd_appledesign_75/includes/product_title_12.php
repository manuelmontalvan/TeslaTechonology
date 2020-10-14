<?php
function product_title_12($productItems) {
    ?>
    <?php if (isset($productItems->productTitle)) : ?>
        <div class=" bd-producttitle-17">
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