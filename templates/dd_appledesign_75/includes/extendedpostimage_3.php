<?php
function extendedpostimage_3($data) {
?>
    <?php if (isset($data['data-image'])) : ?>
        <?php
            $image = $data['data-image'];
            $caption = $image['caption'];
        ?>
        <div class=" bd-extendedpostimage-3">
            
            <img src="<?php echo $image['image']; ?>" alt="<?php echo $image['alt']; ?>" class=" bd-imagestyles"/>
            
            <?php if ($caption): ?>
                <div class=" bd-container-54 bd-tagstyles ">
                    <?php echo $caption; ?>
                </div>
            <?php endif ?>
         </div>
    <?php endif; ?>
<?php }