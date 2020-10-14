<?php
function review_metadata_1($review) {
    $document = JFactory::getDocument();
?>
    <div class=" bd-reviewmetadata-1">
        <?php echo JHTML::date ($review->created_on, JText::_ ('DATE_FORMAT_LC')); ?>
    </div>
<?php
}