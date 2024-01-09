<div class="article member pos-r meum_lg">
  <div class="inner pos-r">
    <a class="lb_b pos-a-area" data-remodal-target="modal-<?php the_ID(); ?>"></a>
    <div class="image_wrap pos-r">
      <div class="bgimg iframe-35" style="background-image: url(<?php echo $thumbnail[0]; ?>)">
      </div>
    </div>

    <div class="text_wrap pos-r">
      <div class="inner fon-s70-pc">

        <div class="con_b fon-b mar-b02 fon-1 dis-ib">
          <?php get_template_part('snp/tarm_membar_tarmname'); ?>
        </div>
        <div class="atc title dis-b mar-b05">
          <h2 class="fon-4 lin-11">
            <?php get_template_part('snp/maintitle'); ?>
          </h2>
        </div>

        <div class="cat fon-n lin-13 fon-1">
          <?php echo mb_strimwidth(get_the_excerpt(), 0, 40, "...", "utf-8" ); ?>
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

            <div class="con_b fon-b mar-b1 fon-1 dis-ib">
              <?php get_template_part('snp/tarm_membar_tarmname'); ?>
            </div>
            <div class="atc title dis-b mar-b05">
              <h2 class="fon-6 lin-11">
                <?php get_template_part('snp/maintitle'); ?>
              </h2>
            </div>

            <div class="cat fon-n lin-13 fon-1 mar-b2">
              <?php echo mb_strimwidth(get_the_excerpt(), 0, 900, "...", "utf-8" ); ?>
            </div>
            <div class="fon-s60-pc fon-s80-sp">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>