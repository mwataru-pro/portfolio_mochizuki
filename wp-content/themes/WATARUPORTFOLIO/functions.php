<?php
function my_setup() {
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	register_nav_menus(array(
		'l-header__nav' => 'ヘッダーナビゲーション',
	));
}

function my_script_init() {
	wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), false, 'all');
	wp_enqueue_style('style', get_stylesheet_uri(), array('reset'), false, 'all');
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_enqueue_script('3.6.0', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js');
	}
	wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/index.js', array('3.6.0'), false);
}

function add_class($classes, $item, $args) {
	$classes['class'] = $args->add_a_class;
	return $classes;
}

function set_global_menu() {
	wp_nav_menu(array(
	'theme_location' => 'l-header__nav',
	'container'       => 'nav',
	'container_class' => 'js-nav l-header__nav',
	'menu_class'      => 'l-header__list',
	'depth' => '0',
	'add_a_class' => 'link'
	));
}

function hooks() {
	add_action('after_setup_theme', 'my_setup');
	add_action('wp_enqueue_scripts', 'my_script_init');
	add_filter('nav_menu_link_attributes', 'add_class', 10, 3);
}

function init() {
	hooks();
}
init();

?>
