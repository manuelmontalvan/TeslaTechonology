<?php
function joomlaposition_2() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['designer_settings']['is_preview'];
    $GLOBALS['isModuleContentExists'] = $view->containsModules('footer1') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('footer1')) : ?>

    <?php if ($isPreview && !$view->containsModules('footer1')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-2 clearfix" <?php echo buildDataPositionAttr('footer1'); ?>>
        <?php echo $view->position('footer1', 'block%joomlaposition_block_2'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('footer1')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}