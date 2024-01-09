<?php
/* Template Name: instagramsurvey */
get_header(); ?>

<div id="barba-wrapper">
  <div class="barba-container">

    <div class="contact all_wrap">

      <section id="page_header" class="contact full_wrap">
        <div class="inner mid_wrap pos-r">

          <div class="header_wrap pos-r">
            <div class="inner">
              <div class="title_wrap">
                <h1 class="fon-6">Instagramに関する調査レポート2020年10月</h1>
              </div>
            </div>
          </div>

        </div>
      </section><!-- page_header end -->




      <section id="page_contact" class="page_contact bg_lg section">
        <div class="inner mid_wrap flex-pc">

          <div class="contents_left_wrap contents_wrap fle-1">
            <div class="inner fon-s80-pc">
              <div class="text fon-1 fon-b mar-t1 mar-b2">
                こちらのフォームに必要事項を入力して送信していただくと、資料をメールでお送りいたします。
              </div>
            </div>
          </div>

          <div class="contents_right_wrap contents_wrap fle-3">
            <div class="inner meum_g">

              <form id="forms" class="slide-text fon-s80-pc">

                <span class="fon-b">貴社名</span><span class="must">※必須</span>
                <div class="input_area">
                  <input type="text" class="textform feed2" name="entry.1953632372" rows="1" placeholder="株式会社GLAPentertainment" required>
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

                <div class="input_area ver-m mar-b1">
                  <input id="check-1" type="checkbox" class="dis-ib feed7" name="pp_check" required>
                  <label for="check-1"><a class="fon-b dis-ib fon-3" href="<?php echo home_url(); ?>/privacypolicy/" target="_blank">プライバシーポリシー</a>
                    <p class="fon-3 dis-ib">に同意する</p>
                  </label>
                </div>

                <div class="tex-c">
                  <div id="next" class="pos-r">
                    <div class="overray pos-a-area">
                      <p>必須項目を入力してください</p>
                    </div>
                    <button id="submit" class="lb_b" type="submit">Submit</button>
                  </div>
                </div>
              </form>

              <script type="text/javascript">
                jQuery(function($) {
                  $('.input_area').on('click change', function() {
                    var feed1 = $('[name=pp_check]:checked').val();
                    console.log(feed1);
                    var feed2 = $('[name=entry\\.1953632372]').val();
                    var feed3 = $('[name=entry\\.1081916214]').val();
                    var feed4 = $('[name=entry\\.1962949946]').val();
                    var feed5 = $('[name=entry\\.1888602323]').val();
                    var feed6 = $('[name=entry\\.1173409106]').val();
                    if (feed1 !== undefined && feed2 !== "" && feed3 !== "" && feed4 !== "" && feed5 !== "" && feed6 !== "") {
                      $("#next .overray").fadeOut(200);
                    }
                  });

                  function postToGoogle() {
                    var feed1 = $('[name=entry\\.1939074906]:checked').val();
                    var feed2 = $('[name=entry\\.1953632372]').val();
                    var feed3 = $('[name=entry\\.1081916214]').val();
                    var feed4 = $('[name=entry\\.1962949946]').val();
                    var feed5 = $('[name=entry\\.1888602323]').val();
                    var feed6 = $('[name=entry\\.1173409106]').val();
                    $.ajax({
                      url: "https://docs.google.com/forms/d/e/1FAIpQLSfaSTPHnCN2dv4eZuCdcc9Omzo53YDLl2uzTi74lHiHdaon9g/formResponse",
                      data: {
                        "entry.1953632372": feed2,
                        "entry.1081916214": feed3,
                        "entry.1962949946": feed4,
                        "entry.1888602323": feed5,
                        "entry.1173409106": feed6
                      },
                      type: "POST",
                      dataType: "xml",
                      statusCode: {
                        0: function() {
                          $.ajax({
                              url: '<?php echo get_template_directory_uri(); ?>/submit-sns-trend-report.php',
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
                              url: '<?php echo get_template_directory_uri(); ?>/submit-sns-trend-report.php',
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
                });
              </script>

            </div><!-- contents_wrap end -->
          </div>


        </div>
      </section><!-- page_contact end -->



    </div>

    <?php get_footer(); ?>