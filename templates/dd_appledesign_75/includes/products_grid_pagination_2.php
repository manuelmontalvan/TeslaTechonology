<?php
function products_grid_pagination_2($object) {
?>
    <?php if ($object->vmPagination->get('pages.total') > 1) : ?>
        <div class=" bd-productsgridpagination-2">
            <?php
                $GLOBALS['designer_settings']['active_paginator'] = 'grid_2';
                echo $object->vmPagination->getPagesLinks();
            ?>
        </div>
    <?php endif; ?>
<?php
}