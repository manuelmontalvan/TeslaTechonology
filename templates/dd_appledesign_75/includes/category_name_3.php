<?php
function category_name_3($categoryItems) {
    ?>
    <?php if (isset($categoryItems->categoryName)) : ?>
        <div class=" bd-categoryname-3">
            <?php
            if ('' !== $categoryItems->categoryName->link)
                echo JHTML::link($categoryItems->categoryName->link, $categoryItems->categoryName->name);
            else 
                echo $categoryItems->categoryName->name;
            ?>
        </div>
    <?php endif; ?>
    <?php
}