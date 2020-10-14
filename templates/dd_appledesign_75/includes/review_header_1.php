<?php
function review_header_1($review) {
    $document = JFactory::getDocument();
?>
    <h4 class=" bd-reviewheader-1">
        <?php echo $review->customer; ?>
    </h4>
<?php
}