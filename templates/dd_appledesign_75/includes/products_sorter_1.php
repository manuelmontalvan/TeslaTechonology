<?php
function products_sorter_1($object) {
    ?>
    <div class=" bd-productssorter-1">
        <?php echo JText::_ ('COM_VIRTUEMART_ORDERBY'); ?>
        <?php
            $content = $object->orderByList['orderby'];
            $result = '';
        ?>
         <?php
            if (preg_match_all('/<a title="([^"]*)" href="([^"]*)">(.*?)<\/a>/', $content, $matches, PREG_SET_ORDER)) {
                $result = '<select onchange="location.href=this.options[this.selectedIndex].value">';
                foreach($matches as $value) {
                    $selected = '';
                    $name = $value[3];
                    if ($value[1] !== $value[3]) {
                        $name = str_replace($value[1],'', $name);
                        $selected = ' selected="selected"';
                    }
                    $result .= '<option value="' . $value[2] . '"' . $selected .'>' . $name . '</option>';
                }
                $result .= '</select>';
            } else {
                $result = $content;
            }
            echo $result;
         ?>
    </div>
<?php
}