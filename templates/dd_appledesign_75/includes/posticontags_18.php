<?php function posticontags_18($data) {
?>
    <?php if (isset($data['tags-icon'])) : ?>
        <div class=" bd-posticontags-18">
            <span class=" bd-icon-15"><span>
            <?php foreach($data['tags-icon'] as $key => $item) : ?>
            <a href="<?php echo $item['href'];?>">
                <?php echo $item['title']; ?>
            </a>
            <?php if($key !== count($data['tags-icon']) - 1) : ?>
            <?php echo ','; ?>
            <?php endif; ?>
            <?php endforeach; ?>
            </span></span>
        </div>
    <?php endif; ?>

    <?php
}