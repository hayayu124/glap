<?php
/* Template Name: 記事一覧ページ */
get_header();
setup_postdata($post);
$thumbnail_id = get_post_thumbnail_id();
$thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large'); ?>

<div id="barba-wrapper">
	<div class="barba-container">

		<div class="archive article all_wrap">

			<section class="article pickup archive full_wrap">
				<div class="inner wrap_left_pad pos-r">

					<div class="article pickup inner wrap_left_mar fon-s80 pos-r">

						<div class="sec_title_wrap t-wh pos-a">
							<div class="sec_title inner">
								<h1 class="dis-ib ver-m fon-7 f-wk">Article</h1>
							</div>
						</div>

						<div class="con_title pickup wrap t-wh pos-a">
							<div class="inner pos-r">
								<h1 class="dis-ib ver-m fon-3 fon-b tra-c f-wk">Pickup</h1>
							</div>
						</div>

						<div class="article_con wrap flex gat_r_05">
							<?php
							$args = array(
								'posts_per_page' => 2,
								'post_status'    => 'publish',
								'tax_query' => array(
									array(
										'taxonomy' => 'post_tag',
										'field' => 'slug',
										'terms' => 'pickup'
									)
								)
							);
							$lastposts = get_posts($args);
							foreach ($lastposts as $post) :
								setup_postdata($post);
								$thumbnail_id = get_post_thumbnail_id();
								$thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
								?>

								<?php include('template/parts-contents-pickup.php'); ?>

							<?php endforeach;
						wp_reset_postdata(); ?>

						</div><!-- inner end -->
					</div><!-- archive article end -->

				</div><!-- article pickup inner end -->
			</section><!-- article pickup end -->



			<section class="article new archive full_wrap">
				<div class="inner wrap_left_pad">

					<div class="article wrap">

						<div class="con_title new wrap t-wh mar-b2">
							<div class="inner pos-r">
								<h1 class="dis-ib ver-m fon-3 fon-b f-wk">New</h1>
							</div>
						</div>

						<div class="inner wrap_left_pad gat_r_2 flex fle-w fon-s60">


							<?php
							$tag = get_tags(array('slug' => 'pickup'))[0];
							$tag_id = $tag->term_id;
							$args = array(
								'posts_per_page' => 3,
								'post_status'    => 'publish',
								'tag__not_in' => array($tag_id)
							);
							$lastposts = get_posts($args);
							foreach ($lastposts as $post) :
								setup_postdata($post);
								$thumbnail_id = get_post_thumbnail_id();
								$thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
								?>

								<?php include('template/parts-contents-single.php'); ?>

							<?php endforeach;
						wp_reset_postdata(); ?>

						</div>
					</div>

				</div><!-- article new inner end -->
			</section><!-- article new end -->



			<section class="article category archive full_wrap">
				<div class="inner wrap_left_pad">

					<div class="article wrap">

						<div class="con_title new wrap t-wh mar-b2 pos-r">
							<div class="inner pos-r dis-ib">
								<h1 class="dis-ib ver-m fon-4 f-wk">Category</h1>
							</div>
							<div class="category link pos-a">
								<ul id="sort" class="t-wh">
									<li data-group="all" class="active all">All</li>
									<?php
									$args = array(
										// カテゴリー内の記事数順で指定
										'orderby' => 'count',
										'order' => 'DSC'
									);
									$categories = get_categories($args);
									foreach ($categories as $category) {
										echo '<li data-group="' . $category->slug . '" style="border-color:' . $category->category_description
											. ';">' . $category->name . '</li> ';
									}
									?>
								</ul>
							</div>
						</div>

						<div class="inner wrap_left_pad fon-s60">
							<div id="itemList" class="inner gat_r_2 flex fle-w">
								<?php
								$tag = get_tags(array('slug' => 'pickup'))[0];
								$tag_id = $tag->term_id;
								$args = array(
									'offset' => 3,
									'post_status'    => 'publish',
									'tag__not_in' => array($tag_id)
								);
								$lastposts = get_posts($args);
								foreach ($lastposts as $post) :
									setup_postdata($post);
									$thumbnail_id = get_post_thumbnail_id();
									$thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
									?>

									<?php include('template/parts-contents-category.php'); ?>

								<?php endforeach;
							wp_reset_postdata(); ?>
								<div class="my-sizer-element"></div>
							</div>
						</div>
					</div>

				</div><!-- article new inner end -->
			</section><!-- article new end -->




			<footer class="top">
				<div class="inner wrap_left_pad pos-r">

					<div class="footer_head wrap t-wh pos-a">
						<div class="inner fon-s70">
							<h1 class="dis-ib ver-m fon-5 f-wk mar-t1">Sitemap</h1>
						</div>
					</div><!-- footer_head -->

					<div class="footer_con wrap wrap_left_mar fon-s80 flex fle-w">
						<div class="footer_con col">

							<div class="footer_con con_b t-wh fon-s80 mar-b2">
								<div class="inner">
									<h2 class="fon-3 fon-b mar-b1 f-wk">About</h2>
									<a href="" class="fon-1 f-wh">Who We are</a>
									<div class="link_arrow_wrap dis-b tex-r">
										<a href="" class="link arrow">
											<div class="arrow_inner"></div>
										</a>
									</div><!-- link arrow end -->
								</div>
							</div>

							<div class="footer_con con_b t-wh fon-s80 mar-b2">
								<div class="inner">
									<h2 class="fon-3 fon-b mar-b1 f-wk">About</h2>
									<a href="" class="fon-1 f-wh">Who We are</a>
									<div class="link_arrow_wrap dis-b tex-r">
										<a href="" class="link arrow">
											<div class="arrow_inner"></div>
										</a>
									</div><!-- link arrow end -->
								</div>
							</div>

						</div><!-- col end -->

						<div class="footer_con col">

							<div class="footer_con con_b t-wh fon-s80 mar-b2">
								<div class="inner">
									<h2 class="fon-3 fon-b mar-b1 f-wk">About</h2>
									<a href="" class="fon-1 f-wh">Who We are</a>
									<div class="link_arrow_wrap dis-b tex-r">
										<a href="" class="link arrow">
											<div class="arrow_inner"></div>
										</a>
									</div><!-- link arrow end -->
								</div>
							</div>

							<div class="footer_con con_b t-wh fon-s80 mar-b2">
								<div class="inner">
									<h2 class="fon-3 fon-b mar-b1 f-wk">About</h2>
									<a href="" class="fon-1 f-wh">Who We are</a>
									<div class="link_arrow_wrap dis-b tex-r">
										<a href="" class="link arrow">
											<div class="arrow_inner"></div>
										</a>
									</div><!-- link arrow end -->
								</div>
							</div>

						</div><!-- col end -->


						<div class="footer_con col">

							<div class="footer_con con_b t-wh fon-s80 mar-b2">
								<div class="inner">
									<h2 class="fon-3 fon-b mar-b1 f-wk">About</h2>
									<a href="" class="fon-1 f-wh">Who We are</a>
									<div class="link_arrow_wrap dis-b tex-r">
										<a href="" class="link arrow">
											<div class="arrow_inner"></div>
										</a>
									</div><!-- link arrow end -->
								</div>
							</div>

							<div class="footer_con con_b t-wh fon-s80 mar-b2">
								<div class="inner">
									<h2 class="fon-3 fon-b mar-b1 f-wk">About</h2>
									<a href="" class="fon-1 f-wh">Who We are</a>
									<div class="link_arrow_wrap dis-b tex-r">
										<a href="" class="link arrow">
											<div class="arrow_inner"></div>
										</a>
									</div><!-- link arrow end -->
								</div>
							</div>

						</div><!-- col end -->


						<div class="footer_con col">

							<div class="footer_con con_b t-wh fon-s80 mar-b2">
								<div class="inner">
									<h2 class="fon-3 fon-b mar-b1 f-wk">About</h2>
									<a href="" class="fon-1 f-wh">Who We are</a>
									<div class="link_arrow_wrap dis-b tex-r">
										<a href="" class="link arrow">
											<div class="arrow_inner"></div>
										</a>
									</div><!-- link arrow end -->
								</div>
							</div>

							<div class="footer_con con_b t-wh fon-s80 mar-b2">
								<div class="inner">
									<h2 class="fon-3 fon-b mar-b1 f-wk">About</h2>
									<a href="" class="fon-1 f-wh">Who We are</a>
									<div class="link_arrow_wrap dis-b tex-r">
										<a href="" class="link arrow">
											<div class="arrow_inner"></div>
										</a>
									</div><!-- link arrow end -->
								</div>
							</div>

						</div><!-- col end -->

					</div>

				</div>

				<div class="lights wrap fon-s50 tex-c t-wh">
					<div class="lights fon-1">© 2019 TOKYO DJ部</div>
				</div>
			</footer><!-- footer top end -->

		</div>

	</div><!-- .barba-container end -->
</div><!-- #barba-wrapper end -->

<?php get_footer(); ?>