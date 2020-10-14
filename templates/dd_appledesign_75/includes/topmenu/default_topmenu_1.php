<?php
$menutype = 'top';
$tag_id = ($params->get('tag_id') != NULL) ? ' id="' . $params->get('tag_id') . '"' : '';
$menuItemClass = '';
$itemLI = '<li class="">';
$start = $params->get('startLevel');

// true - skip the current node, false - render the current node.
$skip = false;
?>
<?php 
$iconClassName = '';
ob_start();
?>
<li class=" bd-menuitem-6">
<?php 
$menuStartItem = ob_get_clean();
ob_start()
?>
<ul class=" bd-menu-5 nav nav-pills navbar-left<?php echo $class_sfx;?>" <?php echo $tag_id;?>>
<?php
$bTopMenu = ob_get_clean();
$eTopMenu = '</ul>';
?>
<?php
echo $bTopMenu;
foreach ($list as $i => & $item) {

    if ($skip) {
        if ($item->shallower) {
            if (($item->level - $item->level_diff) <= $limit) {
                echo '</li>' . str_repeat('</ul></li>', $limit - $item->level + $item->level_diff);
                $skip = false;
            }
        }
        continue;
    }

    $class = 'item-' . $item->id;
    $class .= $item->id == $active_id ? ' current' : '';
    $class .= ('alias' == $item->type
        && in_array($item->params->get('aliasoptions'), $path)
        || in_array($item->id, $path)) ? '' : '';
    $class .= $item->deeper ? ' deeper' : '';
    $class .= $item->parent ? ' parent' : '';
    if ($item->level == $start) {
        $itemLI = $menuStartItem;
    }

    echo preg_replace('/class\s*=\s*[\'"]{1}([^\'^"]*)[\'"]{1}/', 'class="$1 ' . $class . '"', $itemLI);

    // Render the menu item.
    switch ($item->type) {
        case 'separator':
        case 'url':
        case 'component':
            require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
            break;
        default:
            require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
            break;
    }
    if ($item->deeper) {
        if (!$showAll) {
            $limit = $item->level;
            $skip = true;
            continue;
        }
        echo '<ul>';
    }
    elseif ($item->shallower) {
        echo '</li>' . str_repeat('</ul></li>', $item->level_diff);
        $itemLI = $menuStartItem;
    } else
        echo '</li>';
}
echo $eTopMenu;

?>