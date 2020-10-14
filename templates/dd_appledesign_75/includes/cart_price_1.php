<?php
function cart_price_1($product) {
?>
    <div class=" bd-cartprice-1">
        <?php echo $product['quantity'] ?> x <div class=" bd-pricetext-3">
    <?php if(!class_exists('calculationHelper')) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'calculationh.php');
          $calculator = calculationHelper::getInstance ();
          $calculator->_roundindig = 0;
    echo  $calculator->roundInternal($product['subtotal_with_tax'] / $product['quantity'], 'basePriceWithTax'); ?>
</div>
    </div>
<?php
}