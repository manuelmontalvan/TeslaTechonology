<?php
    function sidebar_area_3() {
        $isPreview = $GLOBALS['designer_settings']['is_preview'];
        $GLOBALS['isModuleContentExists'] = false;
        ob_start();
?>
        <?php
    renderTemplateFromIncludes('joomlaposition_1');
?>
        <?php
            $content = trim(ob_get_clean());
            $modContentExists = $GLOBALS['isModuleContentExists'];
            $showContent = strlen(trim(preg_replace('/<!-- empty::begin -->[\s\S]*?<!-- empty::end -->/', '', $content)));
        ?>
        <?php if ($isPreview || ($content && true === $modContentExists)): ?>
            <div class="bd-sidebararea-3-column  bd-flex-vertical bd-flex-fixed<?php echo ($isPreview && !$modContentExists) ? ' hidden bd-hidden-sidebar' : ''; ?>">
                <div class="bd-sidebararea-3 bd-flex-wide">
                    <?php echo $content; ?>
                </div>
            </div>
        <?php endif; ?>
<?php
    }
?>