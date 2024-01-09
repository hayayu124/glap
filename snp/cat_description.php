<?php $catgory = get_the_category();
$category_description = $catgory[0]->category_description;
echo $category_description;
