<?php
/* Template Name: toppage */
date_default_timezone_set('Asia/Tokyo');

$date_time_start = get_field('date_start', 76);
$date_time1 = 10000 + date('md',  strtotime($date_time_start));

$date_time_end = get_field('date_end', 76);
$date_time2 = 10000 + date('md',  strtotime($date_time_end));

$today = 10000 + date('md');

get_header(); ?>


<?php if ($today >= $date_time1 && $today <= $date_time2) : ?>
  <div class="info_wrap">
    <div class="contents fon-s70pc">
      <span class="dis-b fon-1 fon-b">Information</span><span id="close" class="pos-a"><i class="far fa-times-circle"></i></span>
      <?php the_field('info', 76); ?>
    </div>
  </div>
<?php endif; ?>

<?php include('page-top.php'); ?>


<?php get_footer(); ?>