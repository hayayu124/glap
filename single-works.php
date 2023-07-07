<?php
/* Template Name: single-article */
get_header();
setup_postdata($post);
$thumbnail_id = get_post_thumbnail_id();
$thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
$cat = get_the_category();
$cat = $cat[0];
$cat_name = $cat->name;
$cat_slug = $cat->slug;
?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div class="archive article all_wrap">


      <article class="article single full_wrap meum_g">
        <div class="inner wrap_left_pad pos-r">

          <!-- <div class="img_con">
            <div class="bgimg" style="background-image: url(<?php echo $thumbnail[0]; ?>)"></div>
          </div> -->

          <div class="article_head wrap right_center_wrap" style="padding-top:2em;">
            <div class="info_con ">

              <div class="date fon-1 mar-t2 fon-b f-wk">
                <?php get_template_part('snp/tarm_works_name'); ?>
              </div><!-- date end -->

              <?php if(get_field('clientname')): ?>
              <div class="con_b fon-b mar-b05 fon-1 dis-ib">
                <?php the_field('clientname'); ?>
              </div>
              <?php endif; ?>

              <h1 class="title fon-6 mar-b1 fon-b">
                <?php
											if (mb_strlen($post->post_title, 'UTF-8') > 50) {
												$title = mb_substr($post->post_title, 0, 50, 'UTF-8');
												echo $title . '…';
											} else {
												echo $post->post_title;
											}
											?>
              </h1><!-- title end -->

            </div>
          </div><!-- article_head end -->

          <div class="single article wrap right_center_wrap">

            <div class="article single fon-s60 fon-s100-sp bg_wh">
              <?php the_content(); ?>
            </div>

            <!--// 構造化データ==================================================================-->


            <!--================================================================== end//-->

          </div><!-- single article wrap end -->


          <div class="share_sns wrap right_center_wrap">
            <div class="inner fon-s70">
              <span class="fon-2 f-wk dis-ib ver-m mar-r1">Share</span>
              <a href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>"
                class="facebook fon-6 dis-ib ver-m" target="_blank"><i class="fab fa-facebook-f tra-c"></i></a>
              <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"
                class="twitter fon-6 dis-ib ver-m" target="_blank"><i class="fab fa-twitter tra-c"></i></a>
            </div>
          </div>


        </div><!-- archive article end -->
      </article><!-- article pickup end -->


      <section id="page_service_works" class="other_works">
        <div class="right_wrap">
          <div class="inner mar-t2 mar-b1">

            <div class="main_title fle-b fle-bl">
              <div class="inner mar-b1">
                <h1 class="fon-6 f-wk">Other Works</h1>
              </div>

              <div class="inner mar-r1">

                <a href="<?php echo home_url(); ?>/works" class="link arrow fon dis-ib ver-m fon-2">more→</a>

              </div>
            </div>

            <div class="other_works_wrap">
              <div class="inner flex fon-s80-pc">

                <?php
                if (wp_is_mobile()){
                  $number = 2;
                }else{
                  $number = 3;
                };
                $postID = get_the_ID();
                $args = array(
                  'posts_per_page' => $number,
                  'post_status' => 'publish',
                  'post_type' => 'works',
                  'order' => 'ASC',
                  'exclude' => $postID
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

              </div>

            </div><!-- swiper-container end -->


          </div>
        </div>
      </section>


    </div>


    <?php get_footer(); ?>