<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favi/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favi/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favi/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favi/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favi/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="" />
<meta property="fb:app_id" content="538375096561429" />


<?php if (is_home() || is_front_page()) : ?>
	<!-- （トップページ） -->
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:url" content="<?php echo home_url(); ?>">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/ogp.jpg">

	<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
	<meta name="twitter:url" content="<?php echo home_url(); ?>" />
	<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
	<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/ogp.jpg" />

<?php elseif (is_page()) : ?>
	<!-- （固定ページ） -->
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php the_title(); ?>">
	<meta property="og:url" content="<?php echo get_permalink(); ?>">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/ogp.jpg">

	<meta name="twitter:title" content="<?php the_title(); ?>" />
	<meta name="twitter:url" content="<?php echo get_permalink(); ?>" />
	<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
	<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/ogp.jpg" />


<?php else : ?>
	<!-- （記事ページ） -->
	<?php echo_meta_description_tag(); ?>
	<meta property="og:type" content="article">
	<meta property="og:title" content="<?php the_title(); ?>">
	<meta property="og:url" content="<?php echo get_permalink(); ?>">
	<meta property="og:description" content="<?php echo mb_substr(str_replace(array("rn", "r", "n"), '', strip_tags($post->post_content)), 0, 100) . '...'; ?>">

	<meta name="twitter:title" content="<?php the_title(); ?>" />
	<meta name="twitter:url" content="<?php echo get_permalink(); ?>" />
	<meta name="twitter:description" content="<?php echo mb_substr(str_replace(array("rn", "r", "n"), '', strip_tags($post->post_content)), 0, 100) . '...'; ?>" />

	<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
	<?php if (is_single() && has_post_thumbnail()) : ?>
		<meta property="og:image" content="<?php echo $image_url[0] ?>">
		<meta name="twitter:image" content="<?php echo $image_url[0] ?>" />

	<?php elseif (!is_home() && !is_page()) : ?>
		<meta property="og:image" content="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
		<meta name="twitter:image" content="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" />
	<?php endif; ?>

<?php endif; ?>