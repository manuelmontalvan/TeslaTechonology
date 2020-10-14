<?php
function hmenu_1() {
    $document = JFactory::getDocument();
    $view = &$document->view;
    ?>
    
    <nav class=" bd-hmenu-1" data-responsive-menu="true" data-responsive-levels="">
        <?php if ($view->containsModules('position-1')) : ?>
        
            <div class=" bd-menuitem-10 collapse-button">
    <a  data-toggle="collapse"
        data-target=".bd-hmenu-1 .collapse-button + .navbar-collapse"
        href="#" onclick="return false;">
            <span>MENU</span>
    </a>
</div>
            <div class="navbar-collapse collapse">
        <?php echo $view->position('position-1', '', '1', 'hmenu'); ?>
        
            </div>
        <?php else: ?>
            Please add a menu module in the 'position-1' position
        <?php endif; ?>
    </nav>
    
    <?php
}