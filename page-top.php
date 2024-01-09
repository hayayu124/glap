<div id="barba-wrapper">
  <div class="barba-container">

    <div class="top all_wrap">
      <!-- 
      <div id="loader-bg" class="pos-a-area">
        <div id="loader" class="tra-c tex-c">
          <img class="glap_logo_loading" src="<?php echo get_template_directory_uri(); ?>/images/glap_logo.svg" alt="">
          <p class="fon-2 fon-b mar-t1 mar-l05 f-ms">GLAPentertainment Inc.</p>
          <div class="loader-inner">
            <p class="fon-1 fon-b">0%</p>
          </div>
        </div>
      </div> -->

      <section id="kv" class="kv full_wrap">
        <div class="inner pos-r">

          <div class="kv_wrap full pos-r">
            <div class="inner neum_y">
              <div id="light" class="wrapper pos-a-area site-branding">
                <!-- 
                <div class="stage_highlight"></div>

                <div class="spotlight_swivel">

                  <div class="lamp"></div>
                  <div class="spotlight"></div>


                </div> -->

              </div>
              <div class="glap_copy">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/images/glap_copy.svg" alt="">

              </div>

              <img class="glap_logo" src="<?php echo get_template_directory_uri(); ?>/images/glap_logo.svg" alt="">

              <div class="scroll fon-s80">
                <p class="fon-1 fon-b">↓Scroll</p>
              </div>

            </div>
          </div>


          <div class="philosophy">
            <div class="inner mid_wrap tb-pad2">
              <div class="text">
                <p class="philo_text fon-3 int">様々なものがあふれている現代。<br class="pc">
                  人を動かすというハードルは年々上昇しています。<br class="pc">
                  しかし、人が動く、動きたくなる本質は、
                  今も昔も変わってません。<br class="pc">
                  心に響かせられたかどうかと考えます。<br><br></p>
                <p class="philo_text fon-3 int">
                  <ruby>
                    <rb>GLAPentertainment</rb>
                    <rt>グラップエンターテイメント</rt>
                  </ruby>
                  は、<br class="pc">
                  エンターテイメントという手法を使い、<br class="pc">
                  思わず拍手したくなる魅力的なソリューションを生み出します。
                </p>
              </div>
              <div class="buttonWrap tex-r mar-t1">
                <div class="partsButton black shadow">
                  <a href="<?php echo home_url(); ?>/company">More</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- kv end -->

      <section id="news" class="news section bg_lg">
        <div class="inner right_center_wrap">

          <div class="cont_head wrap">
            <div class="inner">
              <h1 class="dis-ib ver-m fon-5 f-ms">News</h1>
            </div>
          </div>

          <div class="news_contents_wrap int">
            <div class="inner fle-b fle-w">

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
                'order' => 'DESC',

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
            <div class="link tex-r"><a class="fon-1-pc fon-3-sp fon-b dis-ib" href="<?php echo home_url(); ?>/archives-news">more→</a></div>
          </div><!-- news wrap end -->

        </div>
      </section><!-- news end -->

      <section id="whatwedo" class="whatwedo int">
        <div class="inner right_center_wrap">
          <div class="titleWrap wrap">
            <div class="inner">
              <h1 class="dis-ib ver-m fon-6 f-ms">What We Do</h1>
            </div>
          </div>

          <div class="contentsWrap">
            <div class="inner">
              <p>“遊びゴコロのあるソリューションの提供”を軸に、効果を最大化する戦略/ストーリー設計から、デザイン・コンテンツ制作、マーケティング施策実施までワンストップで行います。</p>

              <div class="strategy content">
                <div class="title">
                  <h2>Strategy / <br class="sp">Story Making</h2>
                </div>
                <div class="inner">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/wwdStrategy.png" alt="">
                  <p>商品/サービスの魅力をターゲット層に正しく伝えるためには、どんなPRやプロモーションであっても「戦略」や「ストーリー」が大切であると考えています。
                    マーケティング/ブランディング/事業戦略の３つの視点におけるご提案をいたします。
                  </p>
                </div>
                <div class="hushtag">
                  <p>#BusinessDevelopment</p>
                </div>
                <div class="triangleBottom">
                  <div class="triangleInner"></div>
                  <div class="triangleOuter"></div>
                </div>
              </div>

              <div class="flowWrap flex-pc">

                <div class="contentWrap">
                  <div class="planning content">
                    <div class="title">
                      <h2>Planning</h2>
                    </div>
                    <div class="inner">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/wwdPlanning.png" alt="">
                      <p>ストーリーに合わせたクリエイティブからコミュニケーションの出口戦略までワンストップでプランニング
                      </p>
                    </div>
                    <div class="hushtag">
                      <p>#MarketingResearch</p>
                    </div>
                    <div class="triangleRight pc">
                      <div class="triangleInner"></div>
                      <div class="triangleOuter"></div>
                    </div>
                    <div class="triangleBottom sp">
                      <div class="triangleInner"></div>
                      <div class="triangleOuter"></div>
                    </div>
                  </div>
                </div>

                <div class="contentWrap">
                  <div class="creative content">
                    <div class="title">
                      <h2>Creative</h2>
                    </div>
                    <div class="inner">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/wwdCreative.png" alt="">
                      <p>ストーリーに合わせた必要かつユーザーに届くクリエイティブを制作
                      </p>
                    </div>
                    <div class="hushtag">
                      <p>#ContentsCreation</p>
                      <p>#ExperienceDesign</p>
                    </div>
                    <div class="triangleRight pc">
                      <div class="triangleInner"></div>
                      <div class="triangleOuter"></div>
                    </div>
                    <div class="triangleBottom sp">
                      <div class="triangleInner"></div>
                      <div class="triangleOuter"></div>
                    </div>
                  </div>
                </div>

                <div class="contentWrap">
                  <div class="communication content">
                    <div class="title">
                      <h2>Communication</h2>
                    </div>
                    <div class="inner">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/wwdCommunication.png" alt="">
                      <p>目的を最大化させるための最適なコミュニケーション戦略を立案
                      </p>
                    </div>
                    <div class="hushtag">
                      <p>#PR / Advertising</p>
                      <p>#SNSMarketing</p>
                      <p>#Casting</p>
                    </div>


                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- <section id="column" class="column int">
        <div class="inner right_center_wrap">

          <div class="cont_head wrap">
            <div class="inner">
              <h1 class="dis-ib ver-m fon-5 f-ms">Column</h1>
            </div>
          </div>

          <div class="contentWrap iframe-169-pc iframe-11-sp">
            <a class="wantedly-company-feeds" data-company-id="company_6451379" data-height="600" data-width="500" href="https://www.wantedly.com/companies/company_6451379"></a>
            <script>
              (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "https://platform.wantedly.com/company_feeds/widget.js";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, "script", "wantedly-comp-feeds-wjs"));
            </script>
          </div>
          <div class="link tex-r"><a class="fon-1-pc fon-3-sp fon-b dis-ib" href="https://www.wantedly.com/companies/company_6451379/feed" target="_blank">more→</a></div>
        </div>
      </section> -->

      <section id="top_works" class="top_works full_wrap bg_lg header-on">
        <div class="mid_wrap">
          <div class="inner flex">

            <div class="main_title wm-rl">
              <h1 class="dis-ib ver-m fon-7-pc fon-5-sp f-ms int">Works</h1>
            </div>

            <div class="wrap_left_pad wid100">
              <div class="inner fle-b fle-w grid pos-r">

                <?php
                $args = array(
                  'posts_per_page' => 4,
                  'post_status'    => 'publish',
                  'post_type'        => 'works',
                );
                $lastposts = get_posts($args);
                foreach ($lastposts as $post) :
                  setup_postdata($post);
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
                ?>

                  <?php include('template/parts-works.php'); ?>

                <?php endforeach;
                wp_reset_postdata(); ?>

              </div>
            </div>
          </div>
          <div class="article link tex-r mar-b3">
            <a class="fon-2 fon-b" href="<?php echo home_url(); ?>/works">more→</a>
          </div>
        </div>
      </section><!-- event end -->

      <!-- 
      <section id="top_about" class="top_about bgimg section bg_lg pos-r">
        <div class="wrap">
          <div class="inner mid_wrap pos-r">

            <div class="main_title wrap int">
              <div class="inner">
                <h1 class="dis-ib ver-m fon-7 ln1 f-ms">Entertainment<br>
                  Marketing</h1>
                <p class="fon-1 fon-b">コミュニケーション戦略を立案し、<br>
                  人に届くストーリーをご提案いたします。
                </p>
              </div>
            </div>

            <div class="about_contents pos-a int">
              <img src="/images/shikisya.png" alt="" class="shikisya">
              <ul class="move">
                <li>#Ads</li>
                <li>#Casting</li>
                <li>#Movie</li>
                <li>#SNS</li>
                <li>#Campaign</li>
                <li>#EVENT</li>
                <li>#Design</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
 -->


      <!-- 
      <section id="top_product" class="section bg_slg">
        <div class="right_wrap">
          <div class="inner tb-pad3">

            <div class="main_title flex-pc fle-bl">
              <div class="inner mar-r1">
                <h1 class="fon-6 f-ms">Product</h1>
              </div>
              <div class="inner mar-r2">
                <p class="fon-1 fon-b">エンターテインメントに関わるメディア事業を手掛けています。</p>
              </div>
              <div class="inner">
                <a href="<?php echo home_url(); ?>/products" class="link arrow fon dis-ib ver-m fon-2 fon-b">
                  more→
                </a>
              </div>
            </div>

            <div class="swiper-container wrap">
              <div class="swiper-wrapper inner">

                <?php
                $args = array(
                  'posts_per_page' => 4,
                  'post_status' => 'publish',
                  'post_type' => 'products',
                  'order' => 'ASC'
                );
                $lastposts = get_posts($args);
                foreach ($lastposts as $post) :
                  setup_postdata($post);
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'large');
                ?>

                  <?php include('template/parts-product.php'); ?>

                <?php endforeach;
                wp_reset_postdata(); ?>

              </div>

            </div>
          </div>
        </div>
      </section> -->




    </div>