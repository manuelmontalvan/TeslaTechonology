<?php function postreadmore_1($data) {
?>

    <?php if (isset($data['readmore-link']) && isset($data['readmore-text']) ) : ?>
        <a class="bd-postreadmore-1 bd-button-15 " href="<?php echo $data['readmore-link'] ?>" >
        <?php echo $data['readmore-text'] ?></a>
    <?php endif; ?>

<?php }