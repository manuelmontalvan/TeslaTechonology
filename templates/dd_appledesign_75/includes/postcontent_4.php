<?php
function postcontent_4($data) {
    ob_start();
    ?>
        
        <div class=" bd-postcontent-4 bd-tagstyles">
            <div class="bd-container-inner">
            <?php
            if (isset($data['content']) && strlen($data['content']))
                echo funcPostprocessPostContent($data['content']);
            ?>
		    </div>
        </div>
        
    <?php
    echo funcContentRoutesCorrector(ob_get_clean());
}