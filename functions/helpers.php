<?php



// -----------------------------------------------------------------------------

// Define Constants

// -----------------------------------------------------------------------------



define( 'sava_WOOCOMMERCE_IS_ACTIVE', 	class_exists( 	'WooCommerce' ) );

define( 'sava_VISUAL_COMPOSER_IS_ACTIVE', defined( 		'WPB_VC_VERSION' ) );

define( 'sava_REV_SLIDER_IS_ACTIVE', 		class_exists( 	'RevSlider' ) );

define( 'sava_WPML_IS_ACTIVE', 			defined( 		'ICL_SITEPRESS_VERSION' ) );





// -----------------------------------------------------------------------------

// String to Slug

// -----------------------------------------------------------------------------



if ( ! function_exists( 'sava_string_to_slug' ) ) :

function sava_string_to_slug($str) {

	$str = strtolower(trim($str));

	$str = preg_replace('/[^a-z0-9-]/', '_', $str);

	$str = preg_replace('/-+/', "_", $str);

	return $str;

}

endif;





// -----------------------------------------------------------------------------

// Theme Name

// -----------------------------------------------------------------------------



if ( ! function_exists( 'sava_theme_name' ) ) :

function sava_theme_name() {

	$sava_theme = wp_get_theme();

	return $sava_theme->get('Name');

}

endif;





// -----------------------------------------------------------------------------

// Theme Slug

// -----------------------------------------------------------------------------



if ( ! function_exists( 'sava_theme_slug' ) ) :

function sava_theme_slug() {

	$sava_theme = wp_get_theme();

	return sava_string_to_slug( $sava_theme->get('Name') );

}

endif;





// -----------------------------------------------------------------------------

// Theme Author

// -----------------------------------------------------------------------------



if ( ! function_exists( 'sava_theme_author' ) ) :

function sava_theme_author() {

	$sava_theme = wp_get_theme();

	return $sava_theme->get('Author');

}

endif;





// -----------------------------------------------------------------------------

// Theme Description

// -----------------------------------------------------------------------------



if ( ! function_exists( 'sava_theme_description' ) ) :

function sava_theme_description() {

	$sava_theme = wp_get_theme();

	return $sava_theme->get('Description');

}

endif;





// -----------------------------------------------------------------------------

// Theme Version

// -----------------------------------------------------------------------------



if ( ! function_exists( 'sava_theme_version' ) ) :

function sava_theme_version() {

	$sava_theme = wp_get_theme();

	return $sava_theme->get('Version');

}

endif;





// -----------------------------------------------------------------------------

// Convert hex to rgb

// -----------------------------------------------------------------------------



function sava_hex2rgb($hex) {

	$hex = str_replace("#", "", $hex);

	

	if(strlen($hex) == 3) {

		$r = hexdec(substr($hex,0,1).substr($hex,0,1));

		$g = hexdec(substr($hex,1,1).substr($hex,1,1));

		$b = hexdec(substr($hex,2,1).substr($hex,2,1));

	} else {

		$r = hexdec(substr($hex,0,2));

		$g = hexdec(substr($hex,2,2));

		$b = hexdec(substr($hex,4,2));

	}

	$rgb = array($r, $g, $b);

	return implode(",", $rgb); // returns the rgb values separated by commas

	//return $rgb; // returns an array with the rgb values

}





// -----------------------------------------------------------------------------

// Page ID

// -----------------------------------------------------------------------------



function sava_page_id() {	

	$page_id = "";

	if ( is_single() || is_page() ) {

	    $page_id = get_the_ID();

	} else if ( is_home() ) {

	    $page_id = get_option('page_for_posts');

	}

	return $page_id;

}



// -----------------------------------------------------------------------------

// Get SVG

// -----------------------------------------------------------------------------



function sava_svg_get_contents ($url) {



	$url_get_contents_data = false;



	$response = wp_remote_get($url);

	

	if ( ! is_wp_error($response) )

	{

		$url_get_contents_data = $response['body'];

	}



	if (function_exists('file_get_contents') && ($url_get_contents_data == false))

    {

        $url_get_contents_data = file_get_contents($url);

    }



    if (function_exists('fopen') && function_exists('stream_get_contents') && ($url_get_contents_data == false))

    {

        $handle = fopen ($url, "r");

        $url_get_contents_data = stream_get_contents($handle);

    }



	return $url_get_contents_data;

} 





function show_transparent_logo() {



	if (  $custom_header_transparent  == 1 ) {

		if ( $custom_header_transparent_dark_color == 1 && $custom_header_transparent_light_color == 1) {

			echo $custom_header_transparent_dark_color;

			echo $custom_header_transparent_light_color;

		}

	}



}

