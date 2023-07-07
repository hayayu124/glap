<!-- <section id="company" class="company section bg_lg">
  <div class="inner right_wrap flex-pc fle-ac">

    <div class="company_text wrap mar-r2 fle-4 t-wh">
      <div class="inner">
        <h1 class="dis-ib ver-m fon-4 f-wk mar-b1">Company</h1>
        <div class="company_info_wrap fon-s70-pc">
          <div class="text_wrap flex fon-1">
            <div class="text_head fle-1">社名</div>
            <div class="text_contents fle-4">株式会社GLAPentertainment</div>
          </div>
          <div class="text_wrap flex fon-1">
            <div class="text_head fle-1">所在地</div>
            <div class="text_contents fle-4">〒150-0043 東京都渋谷区道玄坂一丁目15番3号 プリメーラ道玄坂309<br>
              （登記：〒102-0074 東京都千代田区九段南１丁目５−６　りそな九段ビル）
            </div>
          </div>
          <div class="text_wrap flex fon-1">
            <div class="text_head fle-1">代表者</div>
            <div class="text_contents fle-4">代表取締役社長　坂本 大輔</div>
          </div>
          <div class="text_wrap flex fon-1">
            <div class="text_head fle-1">設立</div>
            <div class="text_contents fle-4">2019年4月</div>
          </div>
          <div class="text_wrap flex fon-1">
            <div class="text_head fle-1">事業内容</div>
            <div class="text_contents fle-4">
              エンターテインメントコンテンツ開発／コミュニケーションプランニング／クリエイティブプランニング／制作・ディレクション／キャンペーンプランニング／プロデュース／タレントキャスティング／広告代理業／イベント運営
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="company_map fle-3">
      <div class="img_map bgimg inner iframe-55 pos-r">
        <div class="over pos-a-area">
          <div class="tra-c">
            <div class="button"><a href="https://goo.gl/maps/PYahaVNKBvj739D76" target="_blank">map</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<footer class="top <?php
                    $post_type = get_post_type(); // タームオブジェクトを取得
                    echo $post_type; // タームスラッグ
                    ?>">
  <div class="inner right_center_wrap pos-r">

    <div class="footer_con_wrap wrap_left_mar">
      <div class="inner col flex-pc">

        <div class="footer_con con_b t-wh fon-s70-pc mar-b2 fle-1">
          <div class="inner">
            <h2 class="fon-3 fon-b mar-b1 f-wk">Menu</h2>
            <div class="menuWrap flex fle-w">
              <a class="fon-2 News" href="<?php echo home_url(); ?>/news">News</a>
              <div class="dis-ib lin-1">
                <span class="fon-2">Service</span>
                <ul>
                  <li><a class="fon-2" href="<?php echo home_url(); ?>/service">Service</a></li>
                  <li><a class="fon-2" href="<?php echo home_url(); ?>/works">Works</a></li>
                </ul>
              </div>
              <div class="dis-ib lin-1">
                <span class="fon-2">Company</span>
                <ul>
                  <li><a class="fon-2" href="<?php echo home_url(); ?>/company">Company</a></li>
                  <li><a class="fon-2" href="<?php echo home_url(); ?>/members">Member</a></li>
                </ul>
              </div>
              <a class="fon-2" href="<?php echo home_url(); ?>/talents">Talent</a>
              <a class="fon-2" href="<?php echo home_url(); ?>/recruit">Recruit</a>
              <a class="fon-2" href="<?php echo home_url(); ?>/contact">Contact</a>
            </div>
          </div>
        </div>
        <div class="footer_con con_b t-wh fon-s70-pc mar-b2 fle-1">
          <div class="inner">
            <h2 class="fon-3 fon-b mar-b1 f-wk">Social Media</h2>
            <a href="https://www.instagram.com/glap.e/" class="fon-2 f-wh t-wh mar-r2" target="_blank">Instagram</a>
            <a href="https://www.facebook.com/glapentertainment" class="fon-2 f-wh t-wh mar-r2" target="_blank">Facebook</a>
          </div>
        </div>

      </div><!-- col end -->
    </div><!-- col end -->


  </div>

  <div class="right_center_wrap lights wrap t-wh">
    <div class="t-wh fon-s70-pc mar-b2">
      <div class="inner tex-r flex fle-r fle-ac">
        <a href="<?php echo home_url(); ?>/privacypolicy" class="fon-1 f-wh t-wh dis-ib">PrivacyPolicy</a>
        <div id="to-top" class="cur fon-1 f-wh t-wh mar-l2"> Return to the top page</div>
      </div>
    </div>
  </div>

  <div class="rights right_center_wrap lights wrap tex-r t-wh">
    <div class="inner fon-s50">
      <div class="lights fon-1">© 2020 GLAPentertainment Inc.</div>
    </div>
  </div>
</footer><!-- footer top end -->

</div><!-- .barba-container end -->
</div><!-- #barba-wrapper end -->




<!-- <div class="tabbar bar bk">

  <div class="tabbar_inner t-wh fon-b fle-b-pc fle-c-sp fle-ac ver-m">

    <div class="tabbar_logo fon-1 dis-ib">

    </div>

    <div class="tabbar_info fon-s80">

      <p class="dis-ib fon-1">ここがお知らせ枠になります</p>

    </div>

  </div>
</div> -->

<script>
  //swiper
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        spaceBetween: 10
      },
      // when window width is >= 640px
      767: {
        slidesPerView: 4,
        spaceBetween: 15
      }
    }
  });
</script>

<?php if (is_home() || is_front_page()) : ?>
  <script>
    function head() {
      const options = {
        root: null, // ビューポートをルート要素とする
        rootMargin: "-50% 0px", // ビューポートの中心を判定基準にする
      };

      const headerEl = document.querySelector('#header_top')
      const sentinalEl = document.querySelector('#kv')

      const handler = (entries) => {
        const classname = "active";
        if (!entries[0].isIntersecting) {
          headerEl.classList.add(classname)
        } else {
          headerEl.classList.remove(classname)
        }
      }

      const observer = new window.IntersectionObserver(handler, options)
      observer.observe(sentinalEl)
    }
    head()

    function footernav() {
      const options = {
        root: null, // ビューポートをルート要素とする
        rootMargin: "-50% 0px", // ビューポートの中心を判定基準にする
      };

      const headerEl = document.querySelector('#menu')
      const sentinalEl = document.querySelector('#kv')

      const handler = (entries) => {
        const classname = "active";
        if (!entries[0].isIntersecting) {
          headerEl.classList.add(classname)
        } else {
          headerEl.classList.remove(classname)
        }
      }

      const observer = new window.IntersectionObserver(handler, options)
      observer.observe(sentinalEl)
    }
    footernav()
  </script>
<?php endif; ?>

<script>
  function fade() {
    (() => {
      const sample = document.querySelectorAll('.int');

      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.intersectionRatio > 0) {
            entry.target.classList.add('active');
          } else {
            entry.target.classList.remove('active');
          }
        });
      });

      sample.forEach(img => {
        observer.observe(img);
      });
    })();
  }
  fade()


  var toTop = document.getElementById("to-top");
  toTop.addEventListener("click", function() {
    $('body,html').animate({
      scrollTop: 0
    }, 400);
    return false;
  });
</script>
<?php wp_footer(); ?>
</body>

</html>