<?php
function product_outofstock_3($productItems) {
    ?>
    <?php if (isset($productItems->productOutOfStock)) : ?>
        <?php if (($productItems->productOutOfStock->product_in_stock - $productItems->productOutOfStock->product_ordered) < 1) : ?>
            <div class="bd-productoutofstockicon  bd-productoutofstock-3">
                Out of stock
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php
}