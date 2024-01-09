<!DOCTYPE html>
<html lang="ja">

<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CSXZQJLY2Z"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-CSXZQJLY2Z');
  </script>
  <?php if (is_singular()) { ?>

    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <?php } else { ?>

      <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
      <?php } ?>

      <meta http-equiv="content-language" content="ja">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

      <?php include('template/mytheme-head.php'); ?>

      <?php wp_head(); ?>


      </head>

    <body <?php body_class('style01', 'style02'); ?>>

      <?php if (is_home() || is_front_page()) : ?>
        <header id="header_top" class="pos-f header-in">
        <?php else : ?>
          <header id="header" class="pos-f header-in">
          <?php endif; ?>
          <div id="menuSp" class="menuSp t-wh sp">
            <div onclick="myFunc()" class="close">
              <img src="<?php echo get_template_directory_uri(); ?>/images/close.svg" alt="">
            </div>
            <div class="inner">
              <ul class="menuList f-ms">
                <li>
                  <a class="" href="<?php echo home_url(); ?>">TOP</a>
                </li>
                <li>
                  <a class="" href="<?php echo home_url(); ?>/archives-news">News</a>
                </li>
                <li>
                  <span>Service</span>
                  <ul class="innerMenu">
                    <li><a class="" href="<?php echo home_url(); ?>/service">Service</a></li>
                    <li><a class="" href="<?php echo home_url(); ?>/works">Works</a></li>
                  </ul>
                </li>
                <li>
                  <span>Company</span>
                  <ul class="innerMenu">
                    <li><a class="" href="<?php echo home_url(); ?>/company">Company</a></li>
                    <li><a class="" href="<?php echo home_url(); ?>/members">Member</a></li>
                  </ul>
                </li>
                <li>
                  <a class="" href="<?php echo home_url(); ?>/talents">Talent</a>
                </li>
                <li>
                  <a class="" href="<?php echo home_url(); ?>/recruit">Recruit</a>
                </li>
                <li>
                  <a class="" href="<?php echo home_url(); ?>/contact">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="inner wide_wrap fle-b fle-ac">
            <div onclick="myFunc()" id="buttonMenu" class="buttonMenu sp">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class=" header_logo">
              <a class="dis-b" href="<?php echo home_url(); ?>">
                <img class="dis-ib" src="<?php echo get_template_directory_uri(); ?>/images/glap_logo_sidebyside.svg" alt="">
                <!--<h1 class="fon-1 dis-ib">GLAPentertainment Inc.</h1>-->
              </a>
            </div>

            <div class="menu_wrap pc">
              <a class="fon-1 fon-b mar-l1 news" href="<?php echo home_url(); ?>/archives-news">News</a>
              <div class="fon-1 fon-b mar-l1 service hover dis-ib pos-r">
                <span>Service</span>
                <div class="hoverMenu">
                  <ul class="bg_yl mar-t05 tex-c">
                    <li> <a class="fon-b" href="<?php echo home_url(); ?>/service">Service
                        <div class="border"></div>
                      </a></li>
                    <li> <a class="fon-b" href="<?php echo home_url(); ?>/works">Works
                        <div class="border"></div>
                      </a></li>
                  </ul>
                </div>
              </div>
              <div class="fon-1 fon-b mar-l1 service hover dis-ib pos-r">
                <span>Company</span>
                <div class="hoverMenu">
                  <ul class="bg_yl mar-t05 tex-c">
                    <li> <a class="fon-b" href="<?php echo home_url(); ?>/company">Company
                        <div class="border"></div>
                      </a></li>
                    <li> <a class="fon-b" href="<?php echo home_url(); ?>/members">Member
                        <div class="border"></div>
                      </a></li>
                  </ul>
                </div>
              </div>
              <a class="fon-1 fon-b mar-l1 talent" href="<?php echo home_url(); ?>/talents">Talent</a>
              <a class="fon-1 fon-b mar-l1 recruit" href="<?php echo home_url(); ?>/recruit">Recruit</a>
              <a class="fon-1 fon-b mar-l1 contact" href="<?php echo home_url(); ?>/contact">Contact</a>
            </div>
          </div>
          </header>