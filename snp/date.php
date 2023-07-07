<?php $week = array("SUN", "Mon.", "Tue.", "Wed.", "Thr.", "Fri.", "Sat.");
$date = date_create('' . get_field('date') . '');
echo date_format($date, 'Y.m.d') . " " . $week[(int)date_format($date, 'w')];
