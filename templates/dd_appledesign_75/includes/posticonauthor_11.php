<?php function posticonauthor_11($data) {
?>
    <?php if (isset($data['author-icon']) && strlen($data['author-icon'])) : ?>
        <div class=" bd-posticonauthor-11">
            <span class=" bd-icon-56"><span><?php echo $data['author-icon']; ?></span></span>
        </div>
    <?php endif; ?>
<?php }