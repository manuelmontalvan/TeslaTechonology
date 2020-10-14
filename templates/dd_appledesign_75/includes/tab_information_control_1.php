<?php
function tab_information_control_1($object) {
?>
    <div class=" bd-tabinformationcontrol-2 tabbable" data-responsive="true">
    <ul class=" bd-menu-12 clearfix nav nav-tabs">
    <li class=" bd-menuitem-12 active">
        <a href="#tab1" data-toggle="tab"><span><?php echo JText::_ ('COM_VIRTUEMART_REVIEWS') ?></span></a>
    </li>
</ul>
    <div class=" bd-container-38 bd-tagstyles tab-content">
    <div id="tab1" class="tab-pane active">
        <div class="std">
            <?php if ($object->allowRating || $object->showReview): ?>
                <?php echo $object->loadTemplate('reviews'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
    <div class=" bd-accordion accordion">
    <div class=" bd-menuitem-14 accordion-item"></div>
    <div class=" bd-container-43 bd-tagstyles accordion-content"></div>
</div>
</div>
<?php
}