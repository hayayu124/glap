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
$current_post_id = get_the_ID();
?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div class="archive article news all_wrap">

      <article class="article single full_wrap">
        <div class="inner wrap_left_pad pos-r">


          <div class="article_head wrap low_wrap">
            <div class="info_con ">


              <div class="news_contents_date">
                <div class="catname fon-s70">
                  <?php
                  // カテゴリーを表示
                  $category = get_the_category();
                  if ($category) {
                    foreach ($category as $cat) {
                      $category_nicename = $cat->category_nicename;
                      $cat_name = $cat->cat_name;
                      echo '<p class="fon-1 fon-b dis-ib ' . $category_nicename . '">' . $cat_name . '</p>';
                    }
                  }
                  ?>
                </div>
              </div>

              <h1 class="title fon-3 mar-b05 fon-b">
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 50) {
                  $title = mb_substr($post->post_title, 0, 50, 'UTF-8');
                  echo $post->post_title;
                } else {
                  echo $post->post_title;
                }
                ?>
              </h1><!-- title end -->

              <div class="date fon-1 fon-b">
                <?php echo get_post_time('Y.m.d D') . "."; ?>
              </div>

              <div class="img_con mar-t1">
                <img src="<?php echo $thumbnail[0]; ?>" alt="">
              </div>


            </div>
          </div><!-- article_head end -->

          <div class="single article wrap low_wrap">

            <div class="article single fon-s60 fon-s100-sp bg_wh">
              <?php the_content(); ?>
            </div>

            <!--// 構造化データ==================================================================-->


            <!--================================================================== end//-->

          </div><!-- single article wrap end -->


          <div class="share_sns wrap low_wrap">
            <div class="inner fon-s70">
              <span class="fon-2 f-wk dis-ib ver-m mar-r1">Share</span>
              <a href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>" class="facebook fon-6 dis-ib ver-m" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-facebook.svg" alt=""></a>
              <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" class="twitter fon-6 dis-ib ver-m" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-x.svg" alt=""></a>
            </div>
          </div>


        </div><!-- archive article end -->
      </article><!-- article pickup end -->


      <section id="page_service_works" class="other_works">
        <div class="low_wrap">
          <div class="inner mar-t2 mar-b1">

            <div class="main_title fle-b fle-bl">
              <div class="inner mar-b2">
                <h1 class="fon-6 f-wk">Other News</h1>
              </div>


            </div>

            <div class="other_works_wrap">
              <div class="inner fon-s80-pc">

                <?php
                if (wp_is_mobile()) {
                  $number = 2;
                } else {
                  $number = 3;
                };

                $args = array(
                  'posts_per_page' => $number,
                  'post_status' => 'publish',
                  'post_type' => 'post',
                  // 'category_name' => $cat_name,
                  'order' => 'ASC',
                  "post__not_in" => [$current_post_id] // 除外する記事のIDを指定
                );
                $lastposts = get_posts($args);
                foreach ($lastposts as $post) :
                  setup_postdata($post);
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
                ?>

                  <?php include('template/parts-news.php'); ?>

                <?php endforeach;
                wp_reset_postdata(); ?>

              </div>

            </div><!-- swiper-container end -->

            <div class="button_wrap mar-t2">
              <div class="button rectangle fon-s80">
                <a href="<?php echo home_url(); ?>/archives-news" class="link arrow fon dis-ib ver-m fon-1">すべてのニュースを見る</a>
              </div>
            </div>


          </div>
        </div>
      </section>


    </div>


    <?php get_footer(); ?>