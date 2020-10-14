<?php
function postcontent_2($data) {
    ob_start();
    ?>
        
        <div class=" bd-postcontent-2 bd-tagstyles bd-custom-blockquotes bd-custom-bulletlist bd-custom-orderedlist bd-custom-table">
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