<div class="meta con_b">
	<?php if (get_field('genre')) : ?>
		<div class="meta_con genre dis-ib fon-s70 mar-b05">
			<img class="icon_venue" src="<?php echo get_template_directory_uri(); ?>/images/icon_msc_w.svg" alt="">
			<?php
			$terms = get_the_terms(get_the_ID(), 'genre');
			if (!empty($terms)) : if (!is_wp_error($terms)) :
					?>
					<?php foreach ($terms as $term) : ?>
						<p class="fon-1"><?php echo $term->name; ?></p>
					<?php endforeach; ?>
				<?php endif;
		endif; ?>
		</div>
	<?php endif; ?>

	<?php if (get_field('guestdj')) : ?>
		<div class="meta_con dj dis-ib fon-s70 mar-b05">
			<img class="icon_dj" src="<?php echo get_template_directory_uri(); ?>/images/icon_dj_w.svg" alt="">
			<?php
			if ($terms = get_the_terms($post->ID, 'dj')) {
				foreach ($terms as $term) {
					echo "<p class=\"fon-1\">";
					echo esc_html($term->name);
					echo "</p>";
				}
			}
			?>
		</div>
	<?php endif; ?>

</div><!-- meta end -->
<div class="meta con_b">

	<?php if (get_field('venue')) : ?>
		<div class="meta_con venue dis-ib fon-s70">
			<img class="icon_venue" src="<?php echo get_template_directory_uri(); ?>/images/icon_ven_w.svg" alt="">
			<?php
			$terms = get_the_terms(get_the_ID(), 'venues');
			if (!empty($terms)) : if (!is_wp_error($terms)) :
					?>
					<?php foreach ($terms as $term) : ?>
						<p class="fon-1"><?php echo $term->name; ?></p>
					<?php endforeach; ?>
				<?php endif;
		endif; ?>
		</div>
	<?php endif; ?>
	<?php if (get_field('id_required')) : ?>
		<div class="meta_con dis-ib fon-s70">
			<img src="<?php echo get_template_directory_uri(); ?>/images/icon_id_w.svg" alt="">
			<p class="fon-1">ID required</p>
		</div>
	<?php endif; ?>

</div><!-- meta end -->