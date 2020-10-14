<?php
function product_variations_1($object) {
    $position = 'position_1';
    $customFields = isset($object->product->customfieldsSorted[$position]) ? $object->product->customfieldsSorted[$position] : '';
?>
    <div class=" bd-productvariations-1">
        <?php if (!empty($customFields)) : ?>
            <?php $custom_title = null; ?>
            <?php foreach ($customFields as $field) : ?>
                <?php
                    if ( $field->is_hidden ) //OSP http://forum.virtuemart.net/index.php?topic=99320.0
                        continue;
                ?>
                <div class="product-field">
                    <?php if ($field->custom_title != $custom_title and $field->show_title) : ?>
                        <span class="product-fields-title-wrapper">
                            <span class="product-fields-title"><strong><?php echo vmText::_ ($field->custom_title) ?></strong></span>
                            <?php if ($field->custom_tip) : ?>
                                <?php echo JHtml::tooltip ($field->custom_tip, vmText::_ ($field->custom_title), 'tooltip.png'); ?>
                            <?php endif; ?>
                        </span>
                    <?php endif; ?>
                    <?php if (!empty($field->display)) : ?>
                        <span class="product-field-display"><?php echo $field->display ?></span>
                    <?php endif; ?>
                    <?php if (!empty($field->display)) : ?>
                        <span class="product-field-desc"><?php echo vmText::_($field->custom_desc) ?></span>
                    <?php endif; ?>
                </div>
            <?php $custom_title = $field->custom_title; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php
}