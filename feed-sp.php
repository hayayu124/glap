<?php

// ライブラリの読み込み
require 'lib/Feed.php';

// 取得するフィードのURLを指定
$url = "https://note.com/glap/rss";

// インスタンスの作成
$feed = new Feed;
// RSSを読み込む
$rss = $feed->loadRss($url);
// HTML表示用
$html = '';
$sitename = $rss->title;
$mediaurl = "media:thumbnail";
$i = 0;

foreach ($rss->item as $item) :
  if ($i >= 3) {
    break;
  }
  // 各エントリーの処理
  if (mb_strlen($item->title, 'UTF-8') > 100) {
    $title = mb_substr($item->title, 0, 100, 'UTF-8') . '…';
  } else {
    $title = $item->title;
  };
  $link = $item->link;  // リンク

  $media = $item->$mediaurl;  // リンク
  $descriptions = strstr($item->description, ">");
  $description = mb_substr($descriptions, 1, 100, 'utf8') . "...";


  // 日付の取得(UNIX TIMESTAMP)
  foreach (array("pubDate", "date_timestamp", "dc:date", "published", "issued") as $time) {
    if (isset($item->{$time}) && !empty($item->{$time})) {
      $timestamp = (is_int($item->{$time})) ? $item->{$time} : strtotime($item->{$time});
      break;
    }
  }

  // 仮に日付が取得できなかったら現在時刻
  if (!isset($timestamp)) {
    $timestamp = time();
  }
  $week = array("Sun.", "Mon.", "Tue.", "Wed.", "Thr.", "Fri.", "Sat.");
  $date = date('Y.m.d', $timestamp) . " " . $week[(int)date('w', $timestamp)];
?>


  <div class="article news pos-r mar-b1 int">
    <div class="inner">

      <div class="text_wrap pos-r">
        <div class="inner flex">

          <div class="news_contents_date fle-1">
            <div class="date fon-1 fon-b">
              <?php echo $date; ?>
            </div>
            <div class="catname fon-s70">
              <!-- <p class="fon-1 fon-b dis-ib"></p> -->
            </div>
          </div>

          <div class="news_contents_text title dis-b fle-3">
            <h2 class="fon-2 lin-12 mar-b05">
              <?php echo $title; ?>
            </h2>
            <div class="exc fon-s80">
              <p class=""><?php echo strip_tags($description); ?></p>
            </div>

          </div>

        </div>
      </div>

      <a href="<?php echo $link; ?>" class="pos-a-area link" target="_blank"></a>

    </div>
  </div>

<?php $i++;
endforeach; ?>