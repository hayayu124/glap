<?php
/* Template Name: Recruit */

$get_page_id = get_page_by_path("privacypolicy");
$ppId = $get_page_id->ID;
get_header(); ?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div id="service" class="service all_wrap">

      <section id="page_header" class="service full_wrap">
        <div class="inner mid_wrap pos-r">

          <div class="header_wrap pos-r">
            <div class="inner">
              <div class="title_wrap">
                <h1 class="fon-7">Recruit</h1>
              </div>
            </div>
          </div>

        </div>
      </section><!-- page_header end -->

      <section class="page_recruit">
        <div class="inner right_center_wrap">
          <div class="contents_wrap">
            <div class="mar-b1">

              <div class="example casting company int">
                <div class="inner">

                  <div class="content wide pos-r">
                    <div class="inner">
                      <div class="contentTitleWrap dis-ib">
                        <div class="cube bg_yl"></div>
                      </div>
                      <h4 class="">
                        迷ったらココロ踊る方へ！<br class="pc">
                        こんな言葉にワクワクする人は<br class="pc">
                        ぜひ一緒に働きましょう。
                      </h4>
                    </div>
                  </div>

                </div>
              </div>

              <div class="example casting company campany_info int">
                <div class="inner">

                  <div class="content wide pos-r">
                    <div class="inner contents_h2">
                      <div class="contentTitleWrap dis-ib">
                        <div class="title">
                          <h3 class="tex-c">
                            会社紹介資料
                          </h3>
                        </div>
                      </div>

                      <div id="pdf_viewer">
                        <div id="canvas_container">
                          <canvas id="pdf_renderer"></canvas>
                        </div>
                        <div id="navigation_controls">
                          <button id="go_previous" class="button">
                            <p>
                              戻る
                            </p>
                          </button>
                          <button id="go_next" class="button">
                            <p>
                              進む
                            </p>
                          </button>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section id="articleRecruit">
        <div class="article_recruit pos-r inner right_center_wrap">
          <div class="contents_h2">

            <div class="contentTitleWrap dis-ib int">
              <div class="cube bg_yl"></div>
              <div class="title">
                <h3 class="tex-c">
                  募集職種
                </h3>
              </div>
            </div>

            <div class="inner int">
              <?php the_content(); ?>

            </div>
          </div>

        </div>
      </section>

      <section class="form right_center_wrap contents_wrap int">
        <div class="inner contents_h2">
          <div class="formWrap meum_lg">
            <h1>株式会社GLAPentertainment<br>応募フォーム</h1>
            <div id="forms" class="slide-text fon-s80-pc">
              <?php the_field('form'); ?>
            </div>
          </div>
        </div>
      </section>

    </div>

    <script>
      // 表示したいPDFのパスを指定
      // https棟のURLでも可。ただしPDF配置サーバにCORSの設定をする必要あり。base64 encodeのPDFでも表示可能

      var url = '<?php the_field('company_info'); ?>';

      $(function() {
        $.ajax({
          type: 'GET',
          url: '<?php echo home_url(); ?>/wp-json/wp/v2/pages/<?php echo $ppId ?>',
          dataType: 'json'
        }).done(function(json) {
          var content = '';
          var content = json.content.rendered;
          // console.log(json.content.rendered);
          $('#ppText').append(content);
        }).fail(function(json) {
          console.error('記事取得に失敗しました。')
        });
      });

      // PDF.js にアクセスするためのショートカット
      var pdfjsLib = window['pdfjs-dist/build/pdf'];
      // PDF.jsを使用するために「workerSrc」プロパティを指定する必要があるため指定
      pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';
      var state = {
        pdf: null,
        // 表示ページ
        currentPage: 1,
        // 倍率 1.0は1倍
        zoom: 1.0
      }
      // PDFの読み込み
      pdfjsLib.getDocument(url).promise.then((pdf) => {
        state.pdf = pdf;
        render();
      });
      // PDFをレンダリングするファンクション
      function render() {
        state.pdf.getPage(state.currentPage).then(function(page) {
          var canvas = document.getElementById("pdf_renderer");
          var ctx = canvas.getContext('2d');
          // 倍率を指定
          var viewport = page.getViewport({
            scale: state.zoom
          });
          canvas.width = viewport.width;
          canvas.height = viewport.height;
          // レンダリング
          page.render({
            canvasContext: ctx,
            viewport: viewport
          });
        });
      }
      // 次のPDFのページを表示
      document.getElementById('go_previous')
        .addEventListener('click', (e) => {
          if (state.pdf == null || state.currentPage == 1) return;
          state.currentPage -= 1;
          render();
        });
      // 前のPDFページを表示
      document.getElementById('go_next')
        .addEventListener('click', (e) => {
          if (state.pdf == null || state.currentPage > state.pdf._pdfInfo.numPages) return;
          state.currentPage += 1;
          render();
        });
      // PDFのズームイン（拡大）
      // document.getElementById('zoom_in').addEventListener('click', (e) => {
      //   if (state.pdf == null) return;
      //   // + 0.5倍
      //   state.zoom += 0.5;
      //   render();
      // });
      // document.getElementById('zoom_out').addEventListener('click', (e) => {
      //   if (state.pdf == null) return;
      //   // - 0.5倍
      //   state.zoom -= 0.5;
      //   render();
      // });
    </script>
    <?php get_footer(); ?>