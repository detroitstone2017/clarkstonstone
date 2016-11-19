<?php



// =============================================================================

// Enqueue Styles (Front-end)

// =============================================================================



if ( ! function_exists('savastarter_styles') ) :

function savastarter_styles() {		





    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/includes/assets/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');

    wp_enqueue_style('jquery.mmenu-all-css', get_template_directory_uri() . '/css/plugins/jquery.mmenu.all.css', array(), '1.0', 'all');

    wp_enqueue_style('jquery.mmenu-positioning-css', get_template_directory_uri() . '/css/plugins/jquery.mmenu.positioning.css', array(), '1.0', 'all');

    wp_enqueue_style('jquery-slick-slider', get_template_directory_uri() . '/css/plugins/slick.css', array(), '1.0', 'all');


    wp_enqueue_style('jquery-slick-slider-theme', get_template_directory_uri() . '/css/plugins/slick-theme.css', array(), '1.0', 'all');


    wp_enqueue_style('jquery-lightbox', get_template_directory_uri() . '/css/plugins/lightbox.min.css', array(), '1.0', 'all');

    wp_enqueue_style('savastarter_styles-styles', get_template_directory_uri() . '/css/application.css', array(), '1.0', 'all');



}

add_action( 'wp_enqueue_scripts', 'savastarter_styles' );

endif;

