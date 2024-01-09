<?php
/* Template Name: works-category */
get_header();

$term_id = get_queried_object_id(); // タームIDの取得
// タームIDの表示


?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div class="works all_wrap">

      <section id="page_header" class="works full_wrap">
        <div class="inner mid_wrap pos-r">

          <div class="header_wrap pos-r">
            <div class="inner">
              <div class="title_wrap">
                <h1 class="fon-7">Works</h1>
                <h3 class="fon-2"><?php single_term_title(); ?> 一覧</h3>
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
                  <li class="active all"><a href="<?php echo home_url(); ?>/works/">ALL</a></li>
                  <?php
                  $terms = get_terms('works-category');
                  $filterTerms = array_filter($terms, function ($el) {
                    return $el->id !== $term_id;
                  });
                  echo console_log($terms);
                  foreach ($filterTerms as $term) {
                    echo '<li style="border-color:' . $term->term_description
                      . ';">' . '<a href="' . get_term_link($term) . '">' . $term->name  . '</a></li> ';
                  } ?>
                </ul>
              </div>
            </div>

          </div>

          <div class="contents_right_wrap contents_wrap fle-3">

            <div id="itemList" class="inner fon-s80-pc pos-r fle-w grid wid100">

              <?php if (have_posts()) : while (have_posts()) : the_post();
                  setup_postdata($post);
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
              ?>

                  <?php include('template/parts-works.php'); ?>

              <?php endwhile;
              endif; ?>
              <div class="my-sizer-element"></div>
            </div><!-- contents_wrap end -->
          </div>


        </div>
      </section><!-- page_works end -->



    </div>



    <?php get_footer(); ?>