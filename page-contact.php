<?php
/* Template Name: contact */
$get_page_id = get_page_by_path("privacypolicy");
$ppId = $get_page_id->ID;
get_header(); ?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div class="contact all_wrap">

      <section id="page_header" class="contact full_wrap">
        <div class="inner mid_wrap pos-r">

          <div class="header_wrap pos-r">
            <div class="inner">
              <div class="title_wrap">
                <h1 class="fon-7">Contact</h1>
              </div>
            </div>
          </div>

        </div>
      </section><!-- page_header end -->




      <section id="page_contact" class="page_contact bg_lg section">
        <div class="inner mid_wrap flex-pc">

          <div class="contents_left_wrap contents_wrap fle-1">
            <div class="inner fon-s80-pc">
              <h2 class="fon-4">Contact form</h2>
              <div class="text fon-1 fon-b mar-t1 mar-b2">
                お問い合わせはこちらのフォームからお願いいたします
              </div>
            </div>
          </div>

          <div class="contents_right_wrap contents_wrap fle-3">
            <div class="inner meum_g">



              <div id="forms" class="slide-text fon-s80-pc">
                <?php the_content(); ?>
                <!-- <span class="fon-b">貴社名</span>
                <div class="input_area">
                  <input type="text" class="textform feed2" name="entry.1953632372" rows="1" placeholder="株式会社GLAPentertainment">
                </div>
                <span class="fon-b">ご担当者名</span><span class="must">※必須</span>
                <div class="input_area">
                  <input type="text" class="textform feed3" name="entry.1081916214" rows="1" placeholder="山田太郎" required>
                </div>
                <span class="fon-b">ご担当者名（フリガナ）</span><span class="must">※必須</span>
                <div class="input_area">
                  <input type="text" class="textform feed4" name="entry.1962949946" rows="1" placeholder="ヤマダタロウ" required>
                </div>
                <span class="fon-b">電話番号</span><span class="must">※必須</span>
                <div class="input_area">
                  <input type="tel" class="textform feed5" name="entry.1888602323" rows="1" placeholder="03-1234-1234" required>
                </div>
                <span class="fon-b">メールアドレス</span><span class="must">※必須</span>
                <div class="input_area">
                  <input type="email" class="textform feed6" name="entry.1173409106" rows="1" placeholder="glap@glap-e.com" required>
                </div>
                <span class="fon-b">お問い合わせ種別</span><span class="must">※必須</span>
                <div class="input_area">
                  <input id="radio_1_1" class="s_radio feed1" type="radio" value="各種サービスについて" name="entry.1939074906" required><label for="radio_1_1" class="dis-ib">各種サービスについて</label>
                  <input id="radio_1_3" class="s_radio feed1" type="radio" value="取材について" name="entry.1939074906" required><label for="radio_1_3" class="dis-ib">取材について</label>
                  <input id="radio_1_4" class="s_radio feed1" type="radio" value="お仕事のご依頼" name="entry.1939074906" required><label for="radio_1_4" class="dis-ib">お仕事のご依頼</label>
                  <input id="radio_1_5" class="s_radio feed1" type="radio" value="その他" name="entry.1939074906" required><label for="radio_1_5" class="dis-ib">その他</label>
                </div>
                <span class="fon-b">希望納期</span>
                <div class="input_area">
                  <input type="text" class="textform feed8" name="entry.1256132607" rows="1" placeholder="2020/1/12">
                </div>
                <span class="fon-b">お問い合わせ内容</span><span class="must">※必須</span>
                <div class="input_area">
                  <textarea class="s_textarea feed7" name="entry.552175068" rows="7" placeholder="ここにお問い合わせ内容を入力してください" required></textarea>
                </div>
                <div class="tex-c">
                  <div id="next" class="pos-r">
                 
                    <button id="submit" class="lb_b" type="submit">Submit</button>
                  </div>
                </div> -->
              </div>

              <script type="text/javascript">
                function postToGoogle() {
                  var feed1 = $('[name=entry\\.1939074906]:checked').val();
                  var feed2 = $('[name=entry\\.1953632372]').val();
                  var feed3 = $('[name=entry\\.1081916214]').val();
                  var feed4 = $('[name=entry\\.1962949946]').val();
                  var feed5 = $('[name=entry\\.1888602323]').val();
                  var feed6 = $('[name=entry\\.1173409106]').val();
                  var feed7 = $('[name=entry\\.552175068]').val();
                  var feed8 = $('[name=entry\\.1256132607]').val();
                  $.ajax({
                    url: "https://docs.google.com/forms/d/e/1FAIpQLScJUuFMSGO8118uz6y8poYrVXiFDqzOlUXiGNcGQnXAsbooJw/formResponse",
                    data: {
                      "entry.1939074906": feed1,
                      "entry.1953632372": feed2,
                      "entry.1081916214": feed3,
                      "entry.1962949946": feed4,
                      "entry.1888602323": feed5,
                      "entry.1173409106": feed6,
                      "entry.552175068": feed7,
                      "entry.1256132607": feed8
                    },
                    type: "POST",
                    dataType: "xml",
                    statusCode: {
                      0: function() {
                        $.ajax({
                            url: '<?php echo get_template_directory_uri(); ?>/submit.php',
                            type: 'GET',
                            dataType: 'html',
                          })
                          .done(function(data) {
                            $("#forms").html(data);
                            scrollTo(0, 0);
                          })

                      },
                      200: function() {
                        $.ajax({
                            url: '<?php echo get_template_directory_uri(); ?>/submit.php',
                            type: 'GET',
                            dataType: 'html',
                          })
                          .done(function(data) {
                            $("#forms").html(data);
                            scrollTo(0, 0);
                          })

                      }
                    }
                  });
                }
                $('#forms').submit(function() {
                  postToGoogle();
                  return false;
                });
              </script>

            </div><!-- contents_wrap end -->
          </div>


        </div>
      </section><!-- page_contact end -->



    </div>

    <?php get_footer(); ?>

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
    </script>