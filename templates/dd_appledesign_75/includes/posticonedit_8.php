<?php function posticonedit_8($data) {
?>
    <?php if (isset($data['edit-icon'])) : ?>
        <div class=" bd-posticonedit-8">
            <?php preg_match('/<a([^>]+)>[\s\S]+<\/a>/', $data['edit-icon']['content'], $matches); ?>
            <a<?php echo $matches[1];?>>
                <?php if ($data['edit-icon']['showIcon']) : ?>
                    <span class=" bd-icon-49"><span></span></span>
                <?php else: ?>
                    <span><?php echo JText::_('JGLOBAL_EDIT'); ?></span>
                <?php endif; ?>
            </a>
        </div>
    <?php endif; ?>
    <?php
}