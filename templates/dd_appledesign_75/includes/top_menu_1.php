<?php
function top_menu_1() {
    $document = JFactory::getDocument();
    $view = $document->view;
    ?>
    
    <div class=" bd-topmenu-1 hidden-sm hidden-xs">
        <?php if ($view->containsModules('topmenu')) : ?>
        
            <div class=" bd-menuitem-17 collapse-button">
    <a  data-toggle="collapse"
        data-target=".bd-topmenu-1 .collapse-button + .navbar-collapse"
        href="#" onclick="return false;">
            <span></span>
    </a>
</div>
            <div class="navbar-collapse collapse">
            <div class=" bd-horizontalmenu-3 clearfix">
                <div class="bd-container-inner">
                    <?php echo $view->position('topmenu', '', '1', 'topmenu'); ?>
                </div>
            </div>
        
            </div>
        <?php else: ?>
            Please add a menu module in the 'topmenu' position
        <?php endif; ?>
    </div>
    
    <?php
}