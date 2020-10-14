<?php
function product_image_1($productItems) {
    ?>
    <?php if (isset($productItems->productImage)) : ?>
        <?php if ($productItems->productImage->imagesExists) : ?>

            <?php
                $offsetHeight = isset($productItems->productImage->offsetHeight) ? $productItems->productImage->offsetHeight : 0;
                $offsetWidth = isset($productItems->productImage->offsetWidth) ? $productItems->productImage->offsetWidth : 0;
                $height = 'height:' . (VmConfig::get ('img_height') + $offsetHeight) . 'px;';
                $width ='width:' . (VmConfig::get ('img_width') + $offsetWidth) . 'px;';
                if (is_object($productItems->productImage->image))
                    $imgHtml = $productItems->productImage->image->displayMediaThumb('class=" bd-imagestyles"', false);
                else
                    $imgHtml = str_replace('<img', '<img class=" bd-imagestyles" ', $productItems->productImage->image);
            ?>
            <a class=" bd-productimage-1" href="<?php echo $productItems->productImage->link; ?>">
                <?php echo $imgHtml; ?>
            </a>

        <?php endif; ?>
    <?php endif; ?>
    <?php
}