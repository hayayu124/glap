<div class="article member pos-r meum_lg">
  <div class="inner pos-r">
    <a class="lb_b pos-a-area" data-remodal-target="modal-<?php the_ID(); ?>"></a>
    <div class="image_wrap pos-r">
      <div class="bgimg iframe-11" style="background-image: url(<?php echo $thumbnail[0]; ?>)">
      </div>
    </div>

    <div class="text_wrap pos-r">
      <div class="inner fon-s70-pc">

        <?php get_template_part('snp/tarm_talent_catname'); ?>
        <div class="atc title dis-b">
          <h2 class="fon-4 lin-11">
            <?php get_template_part('snp/maintitle'); ?>
          </h2>
        </div>

        <div class="cat fon-n lin-13 fon-1">
          <?php echo mb_strimwidth(get_the_excerpt(), 0, 40, "...", "utf-8"); ?>
        </div>

      </div>
    </div>

    <div class="bgimg remodal" data-remodal-id="modal-<?php the_ID(); ?>" data-remodal-options="hashTracking:false">
      <button data-remodal-action="close" class="remodal-close"></button>

      <div class="remodal_contents_wrap flex-pc fle-ac">
        <div class="fle-2">
          <div class="bgimg iframe-35" style="background-image: url(<?php echo $thumbnail[0]; ?>)">
          </div>
        </div>

        <div class="fle-3 text_wrap pos-r">
          <div class="inner fon-s80-pc t-wh tex-l">

            <?php get_template_part('snp/tarm_talent_catname'); ?>

            <div class="atc title dis-b mar-b05 mar-t05">
              <h2 class="fon-6 lin-11">
                <?php get_template_part('snp/maintitle'); ?>
              </h2>
            </div>

            <div class="cat fon-b lin-13 fon-1 mar-b1">
              <?php echo mb_strimwidth(get_the_excerpt(), 0, 900, "...", "utf-8"); ?>
            </div>

            <?php get_template_part('snp/tarm_talent_tarmname'); ?>

            <div class="fon-s60-pc fon-s80-sp mar-t2">
              <?php the_content(); ?>
            </div>

            <div class="sns">
              <?php if (get_field('twitter')) : ?>
                <span><a href="<?php the_field('twitter'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tw.svg" alt=""></a></span>
              <?php endif; ?>
              <?php if (get_field('instagram')) : ?>
                <span><a href="<?php the_field('instagram'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_ig.svg" alt=""></a></span>
              <?php endif; ?>
              <?php if (get_field('youtube')) : ?>
                <span><a href="<?php the_field('youtube'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_yt.svg" alt=""></a></span>
              <?php endif; ?>
              <?php if (get_field('tiktok')) : ?>
                <span><a href="<?php the_field('tiktok'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tt.svg" alt=""></a></span>
              <?php endif; ?>
            </div>

            <div class="button">
              <a href="<?php echo home_url(); ?>/contact">コンタクトはこちら</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>