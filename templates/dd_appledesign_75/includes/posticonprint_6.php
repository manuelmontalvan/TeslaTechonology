<?php function posticonprint_6($data) {
?>
    <?php if (isset($data['print-icon'])) : ?>
        <div class=" bd-posticonprint-6 print-action">
            <?php preg_match('/<a([^>]+)>[\s\S]+<\/a>/', $data['print-icon']['content'], $matches); ?>
            <a<?php echo $matches[1];?>>
                <?php if ($data['print-icon']['showIcon']) : ?>
                    <span class=" bd-icon-45"><span></span></span>
                <?php else: ?>
                    <span><?php echo JText::_('JGLOBAL_PRINT'); ?></span>
                <?php endif; ?>
            </a>
        </div>
    <?php endif; ?>

    <?php
}