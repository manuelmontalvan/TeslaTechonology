<?php function posticonauthor_5($data) {
?>
    <?php if (isset($data['author-icon']) && strlen($data['author-icon'])) : ?>
        <div class=" bd-posticonauthor-5">
            <span class=" bd-icon-43"><span><?php echo $data['author-icon']; ?></span></span>
        </div>
    <?php endif; ?>
<?php }