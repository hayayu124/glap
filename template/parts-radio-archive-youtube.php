<div class="radio_con youtube wrap_right_mar pos-r">
	<div class="inner pos-r">

		<div class="info_con tb-cen-pc">
			<div class="logo_wrap fon-s90">
				<img class="dis-ib" src="<?php echo get_template_directory_uri(); ?>/images/logo_youtube.svg" alt="">
				<p class="dis-ib fon-1"><?php echo get_the_excerpt(); ?></p>
			</div>

			<h2 class="fon-6 mar-b05 t-wh"><?php get_template_part('snp/maintitle'); ?></h2>
			<div class="djname fon-2 t-wh mar-b3">
				<?php
				if ($terms = get_the_terms($post->ID, 'dj')) {
					foreach ($terms as $term) {
						echo esc_html($term->name);
					}
				}
				?>
			</div>

			<div class="meta_con dis-ib t-wh">
				<img class="icon_msc" src="<?php echo get_template_directory_uri(); ?>/images/icon_msc_w.svg" alt="">
				<p class="fon-2 t-wh">
					<?php echo get_the_term_list($post->ID, 'genre'); ?>
				</p>
			</div>
		</div>
		<div class="img_con">
			<img src="<?php echo $thumbnail[0]; ?>" alt="">
		</div>
		<a href="<?php the_field('url'); ?>" class="pos-a-area link" target="_blank"></a>
	</div>
</div><!-- radio_con youtube end -->