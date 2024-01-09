<div class="con_b atc fle-1 pos-r">
	<div class="image_wrap bgimg asp_11" style="background-image: url(<?php echo $thumbnail[0]; ?>)"></div>
	<div class="con_b_udr wrap atc">
		<div class="con_b_udr inner t-wh">
			<div class="con_b atc cat mar-b05 fon-2 dis-ib <?php get_template_part('snp/cat_slug'); ?>" style="border-bottom: 2px solid <?php get_template_part('snp/cat_description'); ?>;">
				<?php get_template_part('snp/cat_name'); ?>
			</div>
		</div>
		<div class="atc title mar-b02 dis-b">
			<h2 class="fon-3 t-wh">
				<?php get_template_part('snp/maintitle'); ?>
			</h2>
		</div>
		<div class="atc author">
			<?php
			$author = get_the_author_meta('id');
			$author_img = get_avatar($author);
			$imgtag = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
			if (preg_match($imgtag, $author_img, $imgurl)) {
				$authorimg = $imgurl[2];
			}
			?>
			<div class="img author_dm bgimg ccl dis-ib ver-m" style="background-image: url(<?php echo $authorimg ?>)"></div>
			<div class="name fon-1 dis-ib ver-m t-wh"><?php echo get_the_author(); ?></div>
		</div>
	</div>
	<a href="<?php the_permalink(); ?>" class="pos-a-area link"></a>
</div>