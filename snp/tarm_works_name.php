<div class="tax_name_wrap works">
  <?php
  $terms = get_the_terms($post->ID,'works_taxonomy');
  foreach( $terms as $term ) {
  echo '<span>'.$term->name.'</span>';
  }
  ?>
</div>