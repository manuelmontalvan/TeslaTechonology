<?php
function review_text_1($review) {
    $document = JFactory::getDocument();
?>
    <div class=" bd-reviewtext-1">
        <?php echo $review->comment ?>
    </div>
<?php
}