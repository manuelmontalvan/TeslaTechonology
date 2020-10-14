<?php
function language_1() {
    $document = JFactory::getDocument();
    $view = $document->view;
    ?>
    <?php echo $view->position('language', '', '1', 'language'); ?>
    <?php
}