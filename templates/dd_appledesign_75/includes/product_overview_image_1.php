<?php
function product_overview_image_1($object) {
?>
    <?php if (!empty($object->product->images)) : ?>
        <?php $image = $object->product->images[0]; ?>
        <div class=" bd-productimage-6">
    <div class="zoom-container">
        <a class="zoom" rel="thumbnails" href="<?php echo JURI::root() . $image->file_url; ?>">
            <img width="260" height="260" class=" bd-imagestyles" src="<?php echo JURI::root() . $image->file_url; ?>" />
        </a>
    </div>
</div>
    <?php endif; ?>
<?php
}