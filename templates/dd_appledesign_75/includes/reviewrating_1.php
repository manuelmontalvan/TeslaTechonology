<?php
function reviewrating_1($rating, $maxRating) {
    $document = JFactory::getDocument();
?>
    <div class=' bd-rating'>
        <?php for ($i = 1; $i <= $maxRating; $i++) : ?>
    		<span class=" bd-icon-3 active"></span>
        <?php endfor; ?>
    </div>
<?php
}