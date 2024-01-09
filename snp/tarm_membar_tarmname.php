<?php $terms = get_the_terms($post->ID, 'members_taxonomy');
if ($terms) : ?>
  <div class="tax_name_wrap members">
    <?php
    foreach ($terms as $term) {
      echo '<span>' . $term->name . '</span>';
    }
    ?>
  </div>
<?php endif; ?>