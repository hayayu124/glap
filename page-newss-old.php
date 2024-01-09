<?php
/* Template Name: news */
get_header(); ?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div class="news all_wrap">

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




      <section id="page_news" class="page_news section">
        <div class="inner mid_wrap flex-pc">

          <div class="contents_left_wrap contents_wrap fle-1">
            <div class="inner fon-s80-pc">
              <!-- <h2 class="fon-4">Contact form</h2> -->
              <div class="text fon-1 fon-b mar-b2">
                プレスリリースやお知らせなどの情報はnoteで配信しております。
              </div>
              <div class="link"><a class="fon-1 fon-b dis-ib" href="">more→</a></div>
            </div>
          </div>

          <div class="contents_right_wrap contents_wrap fle-3">
            <div class="inner">

              <div class="news_wrap">
                <div class="inner">
                  <?php include('feed-all.php'); ?>
                </div>
              </div>
              <div class="link tex-r fon-s90-pc"><a class="fon-1 fon-b dis-ib" href="https://note.com/glap/"
                  target="_blank">noteで続きを見る→</a></div>
            </div><!-- contents_wrap end -->
          </div>


        </div>
      </section><!-- page_news end -->



    </div>

    <?php get_footer(); ?>