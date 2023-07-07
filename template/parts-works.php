<div class="article works int item" data-groups='[<?php get_template_part('snp/tarm_slug'); ?>]'>
  <div class="inner meum_g item-content">

    <div class="image_wrap pos-r">
      <div class="bgimg iframe-55" style="background-image: url(<?php echo $thumbnail[0]; ?>)">
      </div>
      <a href="<?php the_permalink(); ?>" class="pos-a-area z-10"></a>
    </div>

    <div class="text_wrap pos-r">
      <div class="inner fon-s70-pc">

        <div class="date fon-1 fon-b f-wk mar-b05">
          <?php get_template_part('snp/tarm_works_name'); ?>
        </div><!-- date end -->

        <?php if(get_field('clientname')): ?>
        <div class="cat fon-b mar-b05 fon-1">
          <?php the_field('clientname'); ?>
        </div>
        <?php endif; ?>

        <div class="atc title mar-b02 dis-b">
          <h2 class="fon-4-pc fon-3-sp">
            <?php get_template_part('snp/maintitle'); ?>
          </h2>
        </div>

      </div>
    </div>

    <a href="<?php the_permalink(); ?>" class="pos-a-area link"></a>

  </div>
</div>