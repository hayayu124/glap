<!--// newscontents
==================================================================-->

<div class="atc con_b image_wrap bgimg asp_11 pos-r" style="background-image: url(<?php echo $thumbnail[0]; ?>)">
	<a href="<?php the_permalink(); ?>" class="pos-a-area z-10"></a>
	<div class="con_b_ovl wrap atc grd_b_bk">
		<div class="con_b_ovl inner t-wh">
			<div class="con_b atc cat mar-b05 fon-2 dis-ib
			<?php $catgory = get_the_category();
			$category_nicename = $catgory[0]->category_nicename;
			echo $category_nicename; ?>" style="border-bottom: 2px solid
			<?php $catgory = get_the_category();
			$category_description = $catgory[0]->category_description;
			echo $category_description; ?>;">
				<?php $catgory = get_the_category();
				$cat_name = $catgory[0]->cat_name;
				echo $cat_name; ?>
			</div>
			<div class="atc title mar-b02 dis-b">
				<h2 class="fon-4">
					<?php get_template_part('snp/maintitle'); ?>
				</h2>
			</div>
			<div class="atc author f-wk">
				<?php
				$author = get_the_author_meta('id');
				$author_img = get_avatar($author);
				$imgtag = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
				if (preg_match($imgtag, $author_img, $imgurl)) {
					$authorimg = $imgurl[2];
				}
				?>
				<div class="img bgimg ccl dis-ib ver-m" style="background-image: url(<?php echo $authorimg ?>)"></div>
				<div class="name fon-1 dis-ib ver-m"><?php echo get_the_author(); ?></div>

			</div>
		</div>
	</div>
	<a href="<?php the_permalink(); ?>" class="pos-a-area link"></a>
</div>
<!--==================================================================
newscontents end//-->