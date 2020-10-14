<?php
function pager_5($data) {
    $document = JFactory::getDocument();
?>
<?php if (isset($data['pager'])) : ?>
    <div class=" bd-pager-5">
        <ul class=" bd-pagination pager">
            <?php if (preg_match('/<li[^>]*previous[^>]*>([\S\s]*?)<\/li>/', $data['pager'], $prevMatches)) : ?>
                <li class=" bd-paginationitem-1"><?php echo funcContentRoutesCorrector($prevMatches[1]); ?></li>
            <?php endif; ?>
            <?php if (preg_match('/<li[^>]*next[^>]*>([\S\s]*?)<\/li>/', $data['pager'], $nextMatches)) : ?>
                <li class=" bd-paginationitem-1"><?php echo funcContentRoutesCorrector($nextMatches[1]); ?></li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>
<?php
}