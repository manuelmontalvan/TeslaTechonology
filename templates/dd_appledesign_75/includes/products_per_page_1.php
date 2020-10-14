<?php
function products_per_page_1($object) {
    ?>
    <div class=" bd-productsperpage-1">
        <?php echo $object->vmPagination->getResultsCounter();?>
        <?php echo str_replace( 'window.top.location', 'location',  $object->vmPagination->getLimitBox()); ?>

    </div>
    <?php
}