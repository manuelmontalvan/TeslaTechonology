<?php function posticonauthor_3($data) {
?>
    <?php if (isset($data['author-icon']) && strlen($data['author-icon'])) : ?>
        <div class=" bd-posticonauthor-3">
            <span class=" bd-icon-38"><span><?php echo $data['author-icon']; ?></span></span>
        </div>
    <?php endif; ?>
<?php }