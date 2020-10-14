<?php function posticonemail_7($data) {
?>
    <?php if (isset($data['email-icon'])) : ?>
        <div class=" bd-posticonemail-7">
            <?php preg_match('/<a([^>]+)>[\s\S]+<\/a>/', $data['email-icon']['content'], $matches); ?>
            <a<?php echo $matches[1];?>>
                <?php if ($data['email-icon']['showIcon']) : ?>
                    <span class=" bd-icon-47"><span></span></span>
                <?php else: ?>
                    <span><?php echo JText::_('JGLOBAL_EMAIL'); ?></span>
                <?php endif; ?>
            </a>
        </div>
    <?php endif; ?>

<?php }