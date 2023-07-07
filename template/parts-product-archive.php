<div class="article product-archive pos-r meum_lg int">
  <div class="inner flex-pc fle-ac">

    <div class="text_wrap pos-r fon-s80 fle-3">
      <div class="inner">

        <div class="atc title mar-b1 dis-b">
          <h2 class="fon-6 lin-11">
            <?php get_template_part('snp/maintitle'); ?>
          </h2>
        </div>

        <div class="cat lin-13 fon-1 fon-b mar-b2">
          <?php echo mb_strimwidth(get_the_excerpt(), 0, 100, "...", "utf-8"); ?>
        </div>

        <?php if (get_field('url')) : ?>
          <div class="button">

            <a href="<?php the_field('url'); ?>" class="link" target="_blank"><?php the_field('button_label'); ?></a>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="image_wrap pos-r fle-2">
      <div class="bgimg iframe-55" style="background-image: url(<?php echo $thumbnail[0]; ?>)">
      </div>

    </div>

  </div>
</div>