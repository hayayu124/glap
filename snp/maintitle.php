<?php
if (mb_strlen($post->post_title, 'UTF-8') > 50) {
	$title = mb_substr($post->post_title, 0, 50, 'UTF-8');
	echo $post->post_title;
} else {
	echo $post->post_title;
};
