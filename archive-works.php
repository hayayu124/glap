<?php
/* Template Name: works */
get_header(); ?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div class="works all_wrap">

      <section id="page_header" class="works full_wrap">
        <div class="inner mid_wrap pos-r">

          <div class="header_wrap pos-r">
            <div class="inner">
              <div class="title_wrap">
                <h1 class="fon-7">Works</h1>
              </div>
            </div>
          </div>

        </div>
      </section><!-- page_header end -->




      <section id="page_works" class="page_works bg_lg section">
        <div class="inner mid_wrap flex-pc">

          <div class="contents_left_wrap contents_wrap fle-1 pos-r">

            <div id="catmenu" class="inner fon-s80-pc">
              <h1 class="dis-ib ver-m fon-4 f-wk mar-b05">Category</h1>
              <div class="category link">
                <ul id="sort" class="fon-s80-pc">
                  <li data-group="all" class="active all">All</li>
                  <?php
                  $terms = get_terms('works_taxonomy');
                  foreach ( $terms as $term ) {
                    echo '<li data-group="' . $term->name . '" style="border-color:' . $term->term_description
											. ';">' . $term->name . '</li> ';
                  }?>
                </ul>
              </div>
            </div>

          </div>

          <div class="contents_right_wrap contents_wrap fle-3">

            <div id="itemList" class="inner fon-s80-pc pos-r fle-w grid wid100">

              <?php
              
							$args = array(
								'posts_per_page' => 30,
                'post_status'    => 'publish',
								'post_type'        => 'works',
							);
							$lastposts = get_posts($args);
							foreach ($lastposts as $post) :
								setup_postdata($post);
								$thumbnail_id = get_post_thumbnail_id();
								$thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
								?>

              <?php include('template/parts-works.php'); ?>

              <?php endforeach;
            wp_reset_postdata(); ?>
              <div class="my-sizer-element"></div>
            </div><!-- contents_wrap end -->
          </div>


        </div>
      </section><!-- page_works end -->



    </div>



    <?php get_footer(); ?>