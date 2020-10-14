<?php
function reviewrating_2($rating, $maxRating) {
    $document = JFactory::getDocument();
?>
    <div class=' bd-rating'>
    <?php for ($i = 1; $i <= $maxRating; $i++) : ?>
    <?php $active = ($i <= $rating ? ' active' : ''); ?>
    <span class=' bd-icon-3 <?php echo $active ?>'></span>
    <?php endfor; ?>
</div>
<?php
}