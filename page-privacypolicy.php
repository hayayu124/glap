<?php
/* Template Name: PrivacyPolicy */
get_header();
setup_postdata($post);
?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div class="archive article all_wrap">


      <article class="article single privacy full_wrap meum_g">
        <div class="inner pos-r">


          <div class="article_head wrap right_center_wrap">
            <div class="info_con ">

              <h1 class="title fon-6 mar-b1 fon-b">
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 120) {
                  $title = mb_substr($post->post_title, 0, 120, 'UTF-8');
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

          </div><!-- single article wrap end -->

        </div><!-- archive article end -->
      </article><!-- article pickup end -->


    </div>


    <?php get_footer(); ?>