<?php function posticondate_10($data) {
?>
	<?php if (isset($data['date-icons']) && count($data['date-icons'])) : ?>
		<div class=" bd-posticondate-10">
            <span class=" bd-icon-54"><span><?php
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