<?php
function extendedpostimage_1($data) {
?>
    <?php if (isset($data['data-image'])) : ?>
        <?php
            $image = $data['data-image'];
            $caption = $image['caption'];
        ?>
        <div class=" bd-extendedpostimage-1">
            
            <img src="<?php echo $image['image']; ?>" alt="<?php echo $image['alt']; ?>" class=" bd-imagestyles-6"/>
            
            <?php if ($caption): ?>
                <div class=" bd-container-50 bd-tagstyles ">
                    <?php echo $caption; ?>
                </div>
            <?php endif ?>
         </div>
    <?php endif; ?>
<?php }