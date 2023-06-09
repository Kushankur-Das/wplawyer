<?php

add_theme_support('custom-logo');
add_theme_support('title-tag');


// Load in our CSS
function lawyer_enqueue_styles()
{

	wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css');
}
add_action('wp_enqueue_scripts', 'lawyer_enqueue_styles');

//Nav Menu
if (!function_exists('plugin_register_nav_menu')) {

	function plugin_register_nav_menu()
	{
		register_nav_menus(
			array(
				'primary_menu' => __('Primary Menu', 'lawyer'),
				'footer_menu' => __('Footer Menu', 'lawyer'),
			));
	}
	add_action('after_setup_theme', 'plugin_register_nav_menu');
}