<div class="article news pos-r mar-b1">
  <div class="inner">

    <div class="text_wrap pos-r">
      <div class="inner flex">

        <div class="news_contents_date">
          <div class="date fon-2 fon-b">
            <?php $week = array("Sun.", "Mon.", "Tue.", "Wed.", "Thr.", "Fri.", "Sat."); ?>
            <?php $date = date_create('' . get_field('date') . '');
				echo date_format($date, 'Y.m.d') . " " . $week[(int)date_format($date, 'w')]; ?>
          </div>
          <div class="catname fon-s70">
            <p class="fon-1 fon-b dis-ib <?php $catgory = get_the_category();
			$category_nicename = $catgory[0]->category_nicename;
			echo $category_nicename; ?>" style="background-color:<?php $catgory = get_the_category();
			$category_description = $catgory[0]->category_description;
			echo $category_description; ?>;">
              <?php $catgory = get_the_category();
				$cat_name = $catgory[0]->cat_name;
				echo $cat_name; ?></p>
          </div>
        </div>

        <div class="news_contents_text title dis-b">
          <h2 class="fon-3 lin-11 mar-b05">
            <?php get_template_part('snp/maintitle'); ?>
          </h2>
          <div class="exc fon-s80">
            <p class="fon-1 lin-13"><?php echo mb_strimwidth(get_the_excerpt(), 0, 100, "...", "utf-8" ); ?></p>
          </div>

        </div>

      </div>
    </div>

    <a href="<?php the_permalink(); ?>" class="pos-a-area link"></a>

  </div>
</div>