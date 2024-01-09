<?php
/* Template Name: news */
get_header(); ?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div class="works all_wrap">

      <section id="page_header" class="news full_wrap">
        <div class="inner mid_wrap pos-r">

          <div class="header_wrap pos-r">
            <div class="inner">
              <div class="title_wrap">
                <h1 class="fon-7">News</h1>
              </div>
            </div>
          </div>

        </div>
      </section><!-- page_header end -->




      <section id="page_news" class="page_works bg_lg section">
        <div class="inner mid_wrap flex-pc">

          <!-- <div class="contents_left_wrap contents_wrap fle-1 pos-r">

            <div id="catmenu" class="inner fon-s80-pc">
              <h1 class="dis-ib ver-m fon-4 f-wk">Category</h1>
              <div class="category link">
                <ul id="sort" class="fon-s80-pc">
                  <li data-group="all" class="active all">All</li>
                  <?php
                  $args = array(
                    // カテゴリー内の記事数順で指定
                    'orderby' => 'count',
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

          </div> -->

          <div class="contents_right_wrap contents_wrap fle-3">

            <div id="itemList" class="inner fon-s80-pc pos-r fle-w grid wid100 mar-b3-pc">


              <?php if (have_posts()) : while (have_posts()) : the_post();
                  setup_postdata($post);
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
              ?>

                  <?php include('template/parts-news.php'); ?>

              <?php endwhile;
              endif; ?>
              <!-- <div class="my-sizer-element"></div> -->

            </div><!-- contents_wrap end -->

            <?php
            $args = array(
              'mid_size' => 1,
              'prev_text' => '<img src="' . get_template_directory_uri() . '/img/arrow-left.svg" alt="">',
              'next_text' => '<img src="' . get_template_directory_uri() . '/img/arrow-right.svg" alt="">',
              'screen_reader_text' => ' ',
            );
            the_posts_pagination($args);
            ?>
          </div>


        </div>
      </section><!-- page_works end -->



    </div>



    <?php get_footer(); ?>