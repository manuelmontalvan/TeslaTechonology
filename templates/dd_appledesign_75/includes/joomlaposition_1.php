<?php
function joomlaposition_1() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['designer_settings']['is_preview'];
    $GLOBALS['isModuleContentExists'] = $view->containsModules('position-7') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('position-7')) : ?>

    <?php if ($isPreview && !$view->containsModules('position-7')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-1 clearfix" <?php echo buildDataPositionAttr('position-7'); ?>>
        <?php echo $view->position('position-7', 'block%joomlaposition_block_1'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('position-7')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}