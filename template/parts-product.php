<div class="swiper-slide article product pos-r meum_lg int">
  <div class="inner">

    <div class="image_wrap pos-r">
      <div class="bgimg iframe-55" style="background-image: url(<?php echo $thumbnail[0]; ?>)">
      </div>
      <a href="<?php the_permalink(); ?>" class="pos-a-area z-10"></a>
    </div>

    <div class="text_wrap pos-r">
      <div class="inner fon-s80-pc">

        <div class="atc title mar-b05 dis-b">
          <h2 class="fon-4 lin-11">
            <?php get_template_part('snp/maintitle'); ?>
          </h2>
        </div>

        <div class="cat fon-n lin-13 fon-1">
          <?php echo mb_strimwidth(get_the_excerpt(), 0, 60, "...", "utf-8" ); ?>
        </div>

      </div>
    </div>

    <a href="<?php the_permalink(); ?>" class="pos-a-area link"></a>

  </div>
</div>