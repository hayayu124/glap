<?php



remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('template_redirect', 'rest_output_link_header', 11);
remove_action('wp_head', 'rel_canonical');

add_theme_support('title-tag');

function remove_dns_prefetch($hints, $relation_type)
{
	if ('dns-prefetch' === $relation_type) {
		return array_diff(wp_dependencies_unique_hosts(), $hints);
	}
	return $hints;
}
add_filter('wp_resource_hints', 'remove_dns_prefetch', 10, 2);

function exist_invisible_characters($str)
{
	return preg_match('/[\p{C}\p{Z}]/u', $str);
}

add_theme_support('title-tag');

// 固定ページで抜粋を有効化
add_post_type_support('page', 'excerpt');

// アイキャッチ画像を有効にする
add_theme_support('post-thumbnails');
set_post_thumbnail_size(500, 400, true);


function catch_that_image()
{
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches[1][0];

	if (empty($first_img)) { //Defines a default image
		$first_img = "/images/default.jpg";
	}
	return $first_img;
}

/* css 読み込み ----------------------------------------------------------------------------------------------*/


/* CSSの読み込み
---------------------------------------------------------- */
// JS・CSSファイルを読み込む

// function add_async_defer_script($url)
// {
// 	if (strpos($url, '#async'))
// 		return str_replace('#async', '', $url) . "' async='async";
// 	else if (strpos($url, '#defer'))
// 		return str_replace('#defer', '', $url) . "' defer='defer";
// 	else
// 		return $url;
// }
// add_filter('clean_url', 'add_async_defer_script', 11, 1);

function add_files()
{
	wp_deregister_script('jquery');
	// UNIX TIMESTAMP
	$timestamp = time();
	// 	wp_enqueue_script('shuffles', get_template_directory_uri() . '/js/shuffle.min.js#defer', "", '20181222');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.7.0.min.js#defer', "", '');
	wp_enqueue_script('commons', get_template_directory_uri() . '/js/commons.js#defer', "", '');
	wp_enqueue_script('remodal', get_template_directory_uri() . '/js/remodal.min.js#defer', "", '20171222');
	// 	wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js#defer', "", '20171222');
	// 	wp_enqueue_script('webanimation', get_template_directory_uri() . '/js/webanimation.js#defer', "", '20181222');
	// 	wp_enqueue_script('muuri', get_template_directory_uri() . '/js/muuri.js#defer', "", '20181222');


	wp_enqueue_style('remodal', get_template_directory_uri() . '/stylesheets/remodal.css', "", '20190429');
	wp_enqueue_style('remodal_theme', get_template_directory_uri() . '/stylesheets/remodal-default-theme.css', "", '20190429');
	wp_enqueue_style('base', get_template_directory_uri() . '/stylesheets/base.css', "", $timestamp);
	wp_enqueue_style('style', get_template_directory_uri() . '/stylesheets/style.css', "", $timestamp);
	// 	wp_enqueue_style('swiper', get_template_directory_uri() . '/cssmin/swiper.min.css', "", $timestamp);
}
add_action('wp_enqueue_scripts', 'add_files');



// add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
// function wpcf7_autop_return_false()
// {
// 	return false;
// }



/*  ----------------------------------------------------------------------------------------------*/


// body classに固定ページのスラッグを表示
function pagename_class($classes = '')
{
	if (is_page()) {
		$page = get_page(get_the_ID());
		$classes[] = 'page-' . $page->post_name;
		if ($page->post_parent) {
			$classes[] = 'page-' . get_page_uri($page->post_parent) . '-child';
		}
	}
	return $classes;
}
add_filter('body_class', 'pagename_class');





// get meta description from the content
function get_meta_description()
{
	global $post;
	$description = "";
	if (is_home()) {
		// ホームでは、ブログの説明文を取得
		$description = get_bloginfo('description');
	} elseif (is_category()) {
		// カテゴリーページでは、カテゴリーの説明文を取得
		$description = category_description();
	} elseif (is_single()) {
		if ($post->post_excerpt) {
			// 記事ページでは、記事本文から抜粋を取得
			$description = $post->post_excerpt;
		} else {
			// post_excerpt で取れない時は、自力で記事の冒頭100文字を抜粋して取得
			$description = strip_tags($post->post_content);
			$description = str_replace("\n", "", $description);
			$description = str_replace("\r", "", $description);
			$description = mb_substr($description, 0, 100) . "...";
		}
	} else {;
	}

	return $description;
}

// echo meta description tag
function echo_meta_description_tag()
{
	if (is_home() || is_category() || is_single()) {
		echo '<meta name="description" content="' . get_meta_description() . '" />' . "\n";
	}
}


/*  指定したカテゴリー内で利用しているタグ一覧を取得----------------------------------------------------------------------------------------------*/
function get_current_term()
{

	$id;
	$tax_slug;

	if (is_category()) {
		$tax_slug = "category";
		$id = get_query_var('cat');
	} else if (is_tag()) {
		$tax_slug = "post_tag";
		$id = get_query_var('tag_id');
	} else if (is_tax()) {
		$tax_slug = get_query_var('taxonomy');
		$term_slug = get_query_var('term');
		$term = get_term_by("slug", $term_slug, $tax_slug);
		$id = $term->term_id;
	}

	return get_term($id, $tax_slug);
}

/* ページネーション ----------------------------------------------------------------------------------------------*/


//SSLの場合に記事内のURLなどをhttpsに強制書き換え

//
//function fix_ssl_attachment_url($url) {
//  if(is_ssl()){
//    $url = preg_replace("/^http:/", "https:", $url);
//  }
//  return $url;
//}
//add_filter("wp_get_attachment_url", "fix_ssl_attachment_url");


//
// // WordPressの管理画面ログインURLを変更する
//
// define( 'LOGIN_CHANGE_PAGE', 'piacere_users.php' );
// add_action( 'login_init', 'login_change_init' );
// add_filter( 'site_url', 'login_change_site_url', 10, 4 );
// add_filter( 'wp_redirect', 'login_change_wp_redirect', 10, 2 );
// // 指定以外のログインURLは403エラーにする
// if ( ! function_exists( 'login_change_init' ) ) {
// function login_change_init() {
// if ( !defined( 'LOGIN_CHANGE' ) || sha1( 'piacere_users' ) != LOGIN_CHANGE ) {
// status_header( 403 );
// exit;
// }
// }
// }
// // ログイン済みか新設のログインURLの場合はwp-login.phpを置き換える
// if ( ! function_exists( 'login_change_site_url' ) ) {
// function login_change_site_url( $url, $path, $orig_scheme, $blog_id ) {
// if ( $path == 'wp-login.php' &&
// ( is_user_logged_in() || strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false ) )
// $url = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $url );
// return $url;
// }
// }
// // ログアウト時のリダイレクト先の設定
// if ( ! function_exists( 'login_change_wp_redirect' ) ) {
// function login_change_wp_redirect( $location, $status ) {
// if ( strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false )
// $location = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $location );
// return $location;
// }
// }
// /*  ----------------------------------------------------------------------------------------------*/


/* 抜粋の文字数制限 ----------------------------------------------------------------------------------------------*/

//function my_the_excerpt($postContent) {
//  $postContent = mb_strimwidth($postContent, 0, 80, "…","UTF-8");
//  return $postContent;
//}
//add_filter('the_excerpt', 'my_the_excerpt');
//add_filter('get_the_excerpt', 'my_the_excerpt');

/* 抜粋の文字数制限 end ----------------------------------------------------------------------------------------------*/

/* 投稿一覧を用意する ----------------------------------------------------------------------------------------------*/

function post_has_archive($args, $post_type)
{
	if ('post' == $post_type) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'archives-news'; // ページ名（任意に変更可能）
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/* 投稿一覧を用意する end ----------------------------------------------------------------------------------------------*/


/* 偶数だけクラス名表示 ----------------------------------------------------------------------------------------------*/

function is_odd_post()
{
	global $wp_query;
	return ((($wp_query->current_post + 1) % 2) === 1);
}


function cptui_register_my_cpts()
{

	/**
	 * Post Type: Works（事例）.
	 */

	$labels = [
		"name" => __("Works（事例）", "custom-post-type-ui"),
		"singular_name" => __("Works（事例）", "custom-post-type-ui"),
		"menu_name" => __("Works（事例）", "custom-post-type-ui"),
		"all_items" => __("Works（すべての事例）", "custom-post-type-ui"),
		"add_new_item" => __("事例の追加", "custom-post-type-ui"),
		"edit_item" => __("事例の編集", "custom-post-type-ui"),
		"new_item" => __("新規の事例", "custom-post-type-ui"),
		"view_item" => __("事例を表示", "custom-post-type-ui"),
		"view_items" => __("事例を表示", "custom-post-type-ui"),
		"search_items" => __("Search Works", "custom-post-type-ui"),
		"not_found" => __("事例が見つかりません", "custom-post-type-ui"),
		"not_found_in_trash" => __("ゴミ箱内に事例が見つかりません", "custom-post-type-ui"),
		"featured_image" => __("事例のサムネイル", "custom-post-type-ui"),
		"set_featured_image" => __("この事例にサムネイルを追加", "custom-post-type-ui"),
		"remove_featured_image" => __("この事例のサムネイルを削除", "custom-post-type-ui"),
		"use_featured_image" => __("この事例のサムネイル画像として使用", "custom-post-type-ui"),
		"archives" => __("事例アーカイブ", "custom-post-type-ui"),
		"insert_into_item" => __("事例に挿入", "custom-post-type-ui"),
		"uploaded_to_this_item" => __("この事例へアップロード", "custom-post-type-ui"),
		"filter_items_list" => __("事例一覧を絞り込む", "custom-post-type-ui"),
		"items_list" => __("事例一覧", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("Works（事例）", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "事例を掲載します",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "works",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "works", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields", "post-formats"],
	];

	register_post_type("works", $args);

	/**
	 * Post Type: Products（製品）.
	 */

	$labels = [
		"name" => __("Products（製品）", "custom-post-type-ui"),
		"singular_name" => __("Products（製品）", "custom-post-type-ui"),
		"menu_name" => __("Products（製品）", "custom-post-type-ui"),
		"all_items" => __("すべての製品", "custom-post-type-ui"),
		"edit_item" => __("製品の編集", "custom-post-type-ui"),
		"view_item" => __("製品を表示", "custom-post-type-ui"),
		"view_items" => __("製品を表示", "custom-post-type-ui"),
		"not_found" => __("製品が見つかりません", "custom-post-type-ui"),
		"not_found_in_trash" => __("ゴミ箱内に製品が見つかりません", "custom-post-type-ui"),
		"featured_image" => __("製品のサムネイル画像", "custom-post-type-ui"),
		"set_featured_image" => __("この製品にサムネイル画像を設定", "custom-post-type-ui"),
		"remove_featured_image" => __("この製品のサムネイル画像を削除", "custom-post-type-ui"),
		"use_featured_image" => __("この製品のサムネイル画像として使用", "custom-post-type-ui"),
		"archives" => __("製品アーカイブ", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("Products（製品）", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "製品を登録します",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "products",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "products", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields", "post-formats"],
	];

	register_post_type("products", $args);

	/**
	 * Post Type: Members（メンバー）.
	 */

	$labels = [
		"name" => __("Members（メンバー）", "custom-post-type-ui"),
		"singular_name" => __("Members（メンバー）", "custom-post-type-ui"),
		"all_items" => __("すべてのメンバー", "custom-post-type-ui"),
		"edit_item" => __("メンバーの編集", "custom-post-type-ui"),
		"new_item" => __("新規メンバー", "custom-post-type-ui"),
		"view_item" => __("メンバーを表示", "custom-post-type-ui"),
		"view_items" => __("メンバーを表示", "custom-post-type-ui"),
		"search_items" => __("Search Members", "custom-post-type-ui"),
		"not_found" => __("メンバーが見つかりません", "custom-post-type-ui"),
		"not_found_in_trash" => __("ゴミ箱内のメンバーが見つかりません", "custom-post-type-ui"),
		"featured_image" => __("メンバーのアイキャッチ画像", "custom-post-type-ui"),
		"set_featured_image" => __("このメンバーにアイキャッチ画像を設定", "custom-post-type-ui"),
		"remove_featured_image" => __("このメンバーのアイキャッチ画像を削除", "custom-post-type-ui"),
		"use_featured_image" => __("このメンバーのアイキャッチ画像として設定", "custom-post-type-ui"),
		"archives" => __("メンバーアーカイブ", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("Members（メンバー）", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "メンバーを表示します",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "members",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "members", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail", "excerpt", "post-formats"],
	];

	register_post_type("members", $args);
}

add_action('init', 'cptui_register_my_cpts');

//テーマファイル内で別の固定ページの内容を呼び出す
function page_content_e($page_path, $post_type = 'page')
{
	$page = get_page_by_path($page_path, OBJECT, $post_type);
	if ($page && $page->post_status == 'publish') {
		echo apply_filters('the_content', $page->post_content);
	}
}



function console_log($data)
{
	echo '<script>';
	echo 'console.log(' . json_encode($data) . ')';
	echo '</script>';
}
