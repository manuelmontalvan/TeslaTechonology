<?php
function postheader_1($data) {
    ob_start();
    ?>
        
            <h2 class=" bd-postheader-1">
                <div class="bd-container-inner">
                    <?php
                    if (isset($data['header-text']) && strlen($data['header-text'])) {
                        if (isset($data['header-link']) && strlen($data['header-link']))
                            echo '<a href="' . $data['header-link'] . '">' . $data['header-text'] . '</a>';
                        else
                            echo $data['header-text'];
                    }
                    ?>
                </div>
            </h2>
        
    <?php
    echo funcContentRoutesCorrector(ob_get_clean());
}