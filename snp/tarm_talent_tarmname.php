<div class="tax_name_wrap talent">
  <?php
  $terms = get_the_terms($post->ID, 'talent_tag');
  foreach ($terms as $term) {
    echo '<span>' . $term->name . '</span>';
  }
  ?>
</div>