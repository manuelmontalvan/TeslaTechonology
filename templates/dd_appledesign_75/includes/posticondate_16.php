<?php function posticondate_16($data) {
?>
	<?php if (isset($data['date-icons']) && count($data['date-icons'])) : ?>
		<div class=" bd-posticondate-16">
            <span class=" bd-icon-10"><span><?php
                    $count = count($data['date-icons']);
                    foreach ($data['date-icons'] as $key => $icon) {
                        echo $icon;
                        if ($key !== $count - 1)
                            echo ' | ';
                    }
                ?></span></span>
        </div>
    <?php endif; ?>
<?php }