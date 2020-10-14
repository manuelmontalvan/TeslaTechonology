<?php
function category_image_1($categoryItems) {
    ?>
    <?php if (isset($categoryItems->categoryImage)) : ?>
        <?php
            $height = 'height:' . VmConfig::get ('img_height') . 'px;';
            $width = 'width:' . VmConfig::get ('img_width') . 'px;';
            $size = $height . $width;
        ?>
        <?php if ('' !== $categoryItems->categoryImage->link) : ?>
        <a class=" bd-categoryimage-1" href="<?php echo $categoryItems->categoryImage->link; ?>">
            <?php echo $categoryItems->categoryImage->image->displayMediaThumb('class=" bd-imagestyles-32"', false); ?>
        </a>
        <?php else: ?>
        <div class=" bd-categoryimage-1">
            <?php echo $categoryItems->categoryImage->image->displayMediaThumb('class=" bd-imagestyles-32"', false); ?>
        </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php
}