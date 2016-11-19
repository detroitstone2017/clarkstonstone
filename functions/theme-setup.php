<?php

/******************************************************************************/
/* Theme Setup ****************************************************************/
/******************************************************************************/

if ( ! function_exists('sava_theme_setup') ) :
function sava_theme_setup() {

	// load_theme_textdomain( 'sava', get_template_directory() . '/languages' );
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'woocommerce' );

	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	));

	// Remove Woocommerce Styles
	// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

	// Menus
	register_nav_menus( array(
		'primary' 			=> __('Primary Menu', 'sava'),
		'footer' 			=> __('Footer Menu', 'sava')
	));

	// Widgets
if (function_exists('register_header_widgets')) {

	register_header_widgets( array(
		'name'             => 'Header Widgets',
		'id'               => 'header_widgets_area',
		'before_widget'    => '<div class="header-widget">',
		'after_widget'     => '</div>',
	));
}



	// if ( sava_theme_option('header_layout', 'style-1') == 'style-1' ) :
	// register_nav_menus( array(
	// 	'language-switcher'	=> __('Language Switcher', 'sava')
	// ));
	// endif;

	// if ( sava_theme_option('header_layout', 'style-1') == 'style-3' ) :
	// register_nav_menus( array(
	// 	'split-navigation-left'		=> __('Split Navigation: Left', 'sava'),
	// 	'split-navigation-right'	=> __('Split Navigation: Right', 'sava')
	// ));
	// endif;
}
add_action( 'after_setup_theme', 'sava_theme_setup' );
endif;

// if ( ! isset($content_width) ) $content_width = 640; //pixels