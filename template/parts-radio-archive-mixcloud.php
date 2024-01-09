<div class="article con_b udr pos-r">
	<div class="image_wrap bgimg asp_11" style="background-image: url(<?php echo $thumbnail[0]; ?>)"></div>
	<div class="con_b_udr wrap atc">
		<div class="con_b_udr inner t-wh">
			<div class="meta_con radio_con dis-ib fon-s90 t-wh mar-b05">
				<img class="icon_msc" src="<?php echo get_template_directory_uri(); ?>/images/icon_msc_w.svg" alt="">
				<p class="fon-3 t-wh"><?php echo get_the_term_list($post->ID, 'genre'); ?></p>
			</div>
			<div class="atc title mar-b02 dis-b">
				<h2 class="fon-3"><?php get_template_part('snp/maintitle'); ?></h2>
			</div>
			<div class="atc author">
				<div class="name fon-1 dis-ib ver-m">
					<?php
					if ($terms = get_the_terms($post->ID, 'dj')) {
						foreach ($terms as $term) {
							echo esc_html($term->name);
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<a href="<?php the_field('url'); ?>" class="pos-a-area link" target="_blank"></a>
</div>