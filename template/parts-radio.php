<div class="radio_con con_b pos-r <?php $terms = get_the_terms($post->ID, 'medias');
																	foreach ($terms as $term) {
																		$term_name = $term->name;
																		echo $term_name;
																		break;
																	}; ?> fle-1">
	<div class="inner">
		<div class="logo_wrap">
			<?php if ($term_name == "youtube") : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_youtube.svg" alt="">
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_mixcloud.svg" alt="">
			<?php endif; ?>

		</div>
		<p class="fon-1 mar-b1"><?php echo get_the_excerpt(); ?></p>
		<img src="<?php echo $thumbnail[0]; ?>" alt="">
	</div>
	<a href="<?php the_field('url'); ?>" class="pos-a-area link" target="_blank"></a>
</div><!-- radio_con youtube end -->