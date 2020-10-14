<?php
function product_rating_1($object) {
?>
    <?php if ($object->showRating) : ?>
    <div class=" bd-productrating-1">
        <?php
            $maxRating = VmConfig::get('vm_maximum_rating_scale', 5);
            if (empty($object->rating)) {
                echo JText::_('COM_VIRTUEMART_RATING') . ' ' . JText::_('COM_VIRTUEMART_UNRATED');
            } else {
                $rating = $object->rating->rating;
                ?>
                <div class=' bd-rating'>
                    <?php for ($i = 1; $i <= $maxRating; $i++) : ?>
                    <?php $active = ($i <= $rating ? ' active' : ''); ?>
                    <span class=' bd-icon-3 <?php echo $active ?>'></span>
                    <?php endfor; ?>
                </div>
            <?php
            }
        ?>
    </div>
    <?php endif; ?>
<?php
}