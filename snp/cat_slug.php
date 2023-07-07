<?php $catgory = get_the_category();
$category_nicename = $catgory[0]->category_nicename;
echo $category_nicename;
