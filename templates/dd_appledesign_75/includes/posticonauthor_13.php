<?php function posticonauthor_13($data) {
?>
    <?php if (isset($data['author-icon']) && strlen($data['author-icon'])) : ?>
        <div class=" bd-posticonauthor-13">
            <span class=" bd-icon-61"><span><?php echo $data['author-icon']; ?></span></span>
        </div>
    <?php endif; ?>
<?php }