<div class="dj_con con_b tex-c pos-r">
	<div class="dj_img asp_11 bgimg circle mar-b1" style="background-image: url(<?php echo $thumbnail[0]; ?>)"></div>
	<h1 class="name t-wh mar-b05">
		<?php get_template_part('snp/maintitle'); ?>
	</h1>
	<div class="position fon-1">
		<?php the_field('specialist'); ?>
	</div>
	<a href="<?php the_permalink(); ?>" class="pos-a-area link"></a>
</div><!-- dj_con end -->