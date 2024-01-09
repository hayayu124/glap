<div class="article news pos-r mar-b2-pc mar-b1-sp">
  <div class="inner flex">


    <div class="image_wrap pos-r">
      <div class="bgimg iframe-169" style="background-image: url(<?php echo $thumbnail[0]; ?>)">
      </div>
      <a href="<?php the_permalink(); ?>" class="pos-a-area z-10"></a>
    </div>

    <div class="text_wrap pos-r">
      <div class="inner">

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

        <div class="news_contents_text title dis-b">
          <h2 class="fon-2 lin-11 mar-b05">
            <?php get_template_part('snp/maintitle'); ?>
          </h2>
          <div class="exc fon-s80">
            <p class="fon-1 lin-13"><?php echo get_the_excerpt(); ?></p>
          </div>

        </div>

        <div class="date fon-1 fon-b">
          <?php echo get_post_time('Y.m.d D') . "."; ?>
        </div>

      </div>
    </div>

    <a href="<?php the_permalink(); ?>" class="pos-a-area link"></a>

  </div>
</div>