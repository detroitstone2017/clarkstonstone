<?php



// =============================================================================

// Enqueue Scripts

// =============================================================================



if ( ! function_exists('sava_scripts') ) :

function sava_scripts() {	



	wp_enqueue_script('modernizr-custom', get_template_directory_uri() . '/js/modernizr.custom.js', array('jquery'), '1.0', FALSE);

	wp_enqueue_script('jquery-mm-menu', get_template_directory_uri() . '/js/jquery.mmenu.all.min.js', array('jquery'), '1.0', FALSE);

	wp_enqueue_script('jquery-slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0', FALSE);


	wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '1.0', TRUE);

	wp_enqueue_script('sava-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', TRUE);



	// Send wp variables to js

	// $wp_js_vars = array(

		

	// 	'ajax_load_more_locale' 	=> __( 'Load More Items', 'sava' ),

	// 	'ajax_loading_locale' 		=> __( 'Loading', 'sava' ),

	// 	'ajax_no_more_items_locale' => __( 'No more items available.', 'sava' ),



	// 	'blog_pagination_type' 		=> sava_theme_option( 'blog_pagination', 'infinite_scroll' ),



	// 	'shop_pagination_type' 		=> sava_theme_option( 'shop_pagination', 'infinite_scroll' ),



	// );

	

	// if (is_singular() && comments_open() && get_option( 'thread_comments')) {

	// 	wp_enqueue_script('comment-reply');

	// }



}

add_action( 'wp_enqueue_scripts', 'sava_scripts' );

endif;