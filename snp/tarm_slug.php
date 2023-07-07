<?php
$terms = get_the_term_list( $post->ID, 'works_taxonomy', '"', '","', '"' );

echo strip_tags( $terms );
?>