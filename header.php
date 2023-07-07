<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N7WMLW3');
  </script>
  <!-- End Google Tag Manager -->

  <?php if (is_singular()) { ?>

    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <?php } else { ?>

      <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
      <?php } ?>

      <meta http-equiv="content-language" content="ja">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, viewport-fit=cover">
      <!-- <meta name=”robots” content=”noindex”> -->

      <?php include('template/mytheme-head.php'); ?>

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//mozilla.github.io/pdf.js/build/pdf.js">
      </script>

      <?php wp_head(); ?>


      <!-- Googlefont -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap" rel="stylesheet">
      </head>

    <body <?php body_class('style01', 'style02'); ?>>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7WMLW3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

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
                  <a class="" href="<?php echo home_url(); ?>/news">News</a>
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
                <img class="dis-ib" src="<?php echo get_template_directory_uri(); ?>/images/glap_logo.svg" alt="">
                <h1 class="fon-1 dis-ib">GLAPentertainment Inc.</h1>
              </a>
            </div>

            <div class="menu_wrap pc">
              <a class="fon-1 fon-b mar-l1 news" href="<?php echo home_url(); ?>/news">News</a>
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