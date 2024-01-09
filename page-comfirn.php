<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/img/favicon.ico')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/style.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Noto+Sans+JP:wght@400;500;700;900&family=Outfit:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php wp_body_open(); ?>
    <header class="header js-header">
        <div class="inner header__inner">
            <h1 class="header__logo">
                <img class="close" loading="lazy" width="393" height="35" src="<?php echo esc_url(get_theme_file_uri('/img/logo-header.svg')); ?>" alt="GLAPentertainment">
                <img class="open" loading="lazy" width="393" height="35" src="<?php echo esc_url(get_theme_file_uri('/img/logo-header-white.svg')); ?>" alt="GLAPentertainment">
            </h1>
            <nav class="header__nav sp-none tab-none">
                <ul class="header__items">
                    <li class="header__item"><a href="#choose"><span class="large-text">glap</span>の強み</a></li>
                    <li class="header__item"><a href="#achievement">運用実績</a></li>
                    <li class="header__item"><a href="#price">ご利用料金</a></li>
                    <li class="header__item"><a href="#comparison">他社比較</a></li>
                    <li class="header__item item-contact"><a href="#contact">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="drawer-bar js-drawer-bar pc-none m-pc-none">
        <span></span>
        <span></span>
        <span></span>
        <p class="drawer-bar__text js-drawer-bar__text close">menu</p>
        <p class="drawer-bar__text js-drawer-bar__text open">close</p>
    </div>

    <div class="drawer js-drawer pc-none m-pc-none">
        <ul class="drawer__items js-drawer__items">
            <li class="drawer__item js-drawer__item">
                <a href="#achievement">
                    <span class="drawer__heading-en">Achievement</span>
                    <span class="drawer__heading-ja">運用実績</span>
                </a>
            </li>
            <li class="drawer__item js-drawer__item">
                <a href="#price">
                    <span class="drawer__heading-en">Usage&#160;fee</span>
                    <span class="drawer__heading-ja">ご利用料金</span>
                </a>
            </li>
            <li class="drawer__item js-drawer__item">
                <a href="#comparison">
                    <span class="drawer__heading-en">Other&#160;companies&#160;comparison</span>
                    <span class="drawer__heading-ja">他社比較</span>
                </a>
            </li>
            <li class="drawer__item js-drawer__item">
                <a href="#faq">
                    <span class="drawer__heading-en">FAQ</span>
                    <span class="drawer__heading-ja">よくあるご質問</span>
                </a>
            </li>
        </ul>
    </div>

    <main class="main">
    <section class="contact" id="contact">
            <div class="inner contact__inner">
                <p class="section__heading-en contact__heading-en">Contact</p>
                <h2 class="section__heading-ja contact__heading-ja">簡単1分でお問い合せ</h2>
                <div class="contact__container">
                    <?php echo do_shortcode('[contact-form-7 id="347" title="お問い合わせフォーム確認 ( instagram)"]'); ?>
                </div>
                <footer class="footer">
                    <div class="footer__contents">
                        <figure class="footer__logo">
                            <img loading="lazy" width="392" height="35" src="<?php echo esc_url(get_theme_file_uri('/img/logo-footer.webp')); ?>" alt="GLAPentertainment">
                        </figure>
                        <ul class="fooer__items">
                            <li class="footer__item"><a href="#achievement">運用実績</a></li>
                            <li class="footer__item"><a href="#price">ご利用料金</a></li>
                            <li class="footer__item"><a href="#comparison">他社比較</a></li>
                            <li class="footer__item"><a href="#faq">よくあるご質問</a></li>
                        </ul>
                    </div>
                    <small class="footer__copy">&copy;2023&#160;GLAPentertainment&#160;Inc</small>
                </footer>
            </div>
        </section>

        <a href="#" class="to-top">
            <img loading="lazy" width="64" height="64" src="<?php echo esc_url(get_theme_file_uri('/img/to-top-arrow.webp')); ?>" alt="トップに戻る">
        </a>
        <?php wp_footer(); ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="<?php echo esc_url(get_theme_file_uri('/js/script.js')); ?>"></script>
    <script src="<?php echo esc_url(get_theme_file_uri('/js/jquery.arctext.js')); ?>"></script>
</body>

</html>