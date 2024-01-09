<div class="pickup_con con_b wrap pos-r">
	<div class="pickup_con_bg bgimg" style="background-image: url(<?php echo $thumbnail[0]; ?>)"></div>
	<div class="pickup_con con_b_ovl">

		<div class="info_con fle-3">
			<div class="date fon-2 mar-b1">
				<?php $week = array("SUN", "Mon.", "Tue.", "Wed.", "Thr.", "Fri.", "Sat."); ?>
				<?php $date = date_create('' . get_field('date') . '');
				echo date_format($date, 'Y.m.d') . " " . $week[(int)date_format($date, 'w')]; ?>
			</div><!-- date end -->
			<div class="title fon-5 mar-b05">
				<?php
				if (mb_strlen($post->post_title, 'UTF-8') > 50) {
					$title = mb_substr($post->post_title, 0, 50, 'UTF-8');
					echo $title . '…';
				} else {
					echo $post->post_title;
				}
				?>
			</div><!-- title end -->

			<?php get_template_part('snp/tpl_tsm'); ?>

			<div class="pickup_con img_con fle-2 mar-t2">
				<div class="bgimg asp_11" style="background-image: url(<?php echo $thumbnail[0]; ?>)"></div>
			</div><!-- img_con end -->
		</div>
	</div>

	<a href="<?php the_permalink(); ?>" class="link pos-a-area"></a>
</div>