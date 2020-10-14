<?php
function image_thumbnails_1($object) {
?>
    <?php if (!empty($object->product->images) &&
        ($imagesCount = count($object->product->images)) &&
        ($slidesCount = intval('5'))) : ?>
    <?php
        $j = 0;
        $innerStyle = '';
        $itemStyle = '';
        if ($imagesCount < $slidesCount && $slidesCount !== 0) {
            $innerStyle = 'style="width: ' . floor(100 / $slidesCount) * $imagesCount . '%;margin: 0 auto;"';
            $itemStyle = 'style="width:' . floor(100 / $imagesCount) . '%"';
        }
    ?>
    <div class=" bd-imagethumbnails-1 carousel slide">
        <div class="carousel-inner" <?php echo $innerStyle ?>>
            <?php for ($i = 0; $i < $imagesCount; $i++) : ?>
                <?php if ($j % $slidesCount === 0): ?>
                    <div class="item<?php if ($j == 0): ?> active<?php endif; ?>">
                <?php endif; ?>
                    <?php
                        $image = $object->product->images[$i];
                    ?>
                    <a class=" bd-productimage-7"
                       <?php echo $itemStyle ?>
                       rel="smallImage: '<?php echo JURI::root() . $image->file_url; ?>'"
                       href="<?php echo JURI::root() . $image->file_url; ?>">
                        <img class=" bd-imagestyles-20" src="<?php echo JURI::root() . $image->file_url_thumb; ?>" />
                    </a>
                <?php if (($j + 1) % $slidesCount === 0 || ($j + 1) === $imagesCount): ?>
                    </div>
                <?php endif; ?>
                <?php $j++ ?>
            <?php endfor; ?>
        </div>
        <?php if ($imagesCount > $slidesCount): ?>
            <div class="left-button">
    <a class=" bd-carousel-3" href="#">
        <span class=" bd-icon-69"></span>
    </a>
</div>

<div class="right-button">
    <a class=" bd-carousel-3" href="#">
        <span class=" bd-icon-69"></span>
    </a>
</div>
        <?php endif ?>
    </div>
    <?php endif; ?>
<?php
}