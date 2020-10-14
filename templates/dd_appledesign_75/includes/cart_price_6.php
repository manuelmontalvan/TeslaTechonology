<?php
function cart_price_6($product) {
?>
    <div class=" bd-cartprice-6">
        <?php echo $product['quantity'] ?> x <div class=" bd-pricetext-17">
    <?php if(!class_exists('calculationHelper')) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'calculationh.php');
          $calculator = calculationHelper::getInstance ();
          $calculator->_roundindig = 0;
    echo  $calculator->roundInternal($product['subtotal_with_tax'] / $product['quantity'], 'basePriceWithTax'); ?>
</div>
    </div>
<?php
}