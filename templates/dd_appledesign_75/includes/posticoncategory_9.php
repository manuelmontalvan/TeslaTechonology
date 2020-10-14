<?php function posticoncategory_9($data) {
?>
    <?php if (isset($data['category-icon']) && strlen($data['category-icon'])) : ?>
        <div class=" bd-posticoncategory-9">
            <span class=" bd-icon-50"><span><?php echo $data['category-icon']; ?></span></span>
        </div>
    <?php endif; ?>
<?php }