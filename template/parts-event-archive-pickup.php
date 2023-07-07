<div class="pickup_con con_b_ovl flex fle-ac">

	<div class="info_con fle-4">
		<div class="date fon-3 mar-b1">
			<?php get_template_part('snp/date'); ?>
		</div><!-- date end -->
		<div class="title fon-6 mar-b05">
			<?php get_template_part('snp/maintitle'); ?>
		</div><!-- title end -->
		<?php get_template_part('snp/tpl_tsm'); ?>

		<div class="link_arrow_wrap dis-b tex-r">
			<a href="<?php the_permalink(); ?>" class="link arrow">
				<div class="arrow_inner"></div>
			</a>
		</div><!-- link arrow end -->
	</div><!-- info_con end -->

	<div class="pickup_con img_con fle-3">
		<div class="bgimg asp_11" style="background-image: url(<?php echo $thumbnail[0]; ?>)"></div>
	</div><!-- img_con end -->

</div>