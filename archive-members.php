<?php
/* Template Name: member */
get_header(); ?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div class="service all_wrap">

      <section id="page_header" class="product full_wrap">
        <div class="inner mid_wrap pos-r">

          <div class="header_wrap pos-r">
            <div class="inner">
              <div class="title_wrap">
                <h1 class="fon-7">Member</h1>
              </div>
            </div>
          </div>

        </div>
      </section><!-- page_header end -->




      <section id="page_member" class="page_member bg_slg section">
        <div class="inner right_center_wrap">

          <div class="contents_wrap flex fle-w">

            <?php
							$args = array(
								'posts_per_page' => 20,
								'post_status' => 'publish',
                'post_type' => 'members',
								'order' => 'ASC'
							);
							$lastposts = get_posts($args);
							foreach ($lastposts as $post) :
								setup_postdata($post);
								$thumbnail_id = get_post_thumbnail_id();
								$thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
								?>

            <?php include('template/parts-member.php'); ?>

            <?php endforeach;
						wp_reset_postdata(); ?>


          </div><!-- contents_wrap end -->

        </div>
      </section><!-- page_product end -->

    </div>

    <?php get_footer(); ?>