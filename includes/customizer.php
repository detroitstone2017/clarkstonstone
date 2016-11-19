<?php


if ( ! function_exists ('sava_theme_option') ) {
	function sava_theme_option( $name, $default ) {
		global $presets;
		return (!empty($presets['mods'][$name])) ? $presets['mods'][$name] : get_theme_mod( $name, $default );
	} 
} 

if ( ! function_exists ('theme_custom_styles') ) {
	function theme_custom_styles() {	

	global $custom_header_layout,
		   $custom_header_logo,
		   $header_search_state,
		   $custom_header_cart,
		   $custom_header_widget,
		   $custom_header_sticky,
		   $custom_header_background_color,
		   $custom_header_primary_color,
		   $custom_header_link_color,
		   $custom_header_font_size,
		   $custom_header_size,
		   $custom_header_height,
		   $custom_header_sticky_background_color,
		   $custom_header_sticky_primary_color,
		   $custom_header_sticky_accent_color,
		   $custom_header_sticky_height,
		   $custom_header_transparent,
		   $custom_header_transparent_scheme,
		   $custom_header_transparent_light_color,
		   $custom_header_transparent_light_logo,
		   $custom_header_transparent_dark_color,
		   $custom_header_transparent_dark_logo,

		   // Top Bar
		   $custom_header_top_bar_background_color,
		   $custom_header_top_bar_primary_color,
		   $custom_header_top_bar_accent_color,
		   $custom_header_top_bar_phone,
		   $custom_header_top_bar_email,
		   $custom_header_top_social_media,
		   $custom_header_top_bar_widget,
			$fa_facebook,
			$fa_twitter,
			$fa_pinterest,
			$fa_linkedin,
			$fa_googleplus,
			$fa_rss,
			$fa_tumblr,
			$fa_instagram,
			$fa_youtube,
			$fa_vimeo,
			$fa_behance,
			$fa_dribbble,
			$fa_flickr,
			$fa_git,
			$fa_skype,
			$fa_weibo,
			$fa_foursquare,
			$fa_soundcloud,


			//footer

			$custom_footer_layout,
			$custom_footer_background_color,
			$custom_footer_font_color,
			$custom_footer_links_color,
			$custom_footer_text,
			$custom_footer_credit_card_icons,
			$custom_footer_font_size,


			$custom_css,
			$custom_header_js,
			$custom_footer_js,


			$custom_font_size,
			$custom_default_theme_fonts,
			$custom_main_font,
			$custom_secondary_font,
			$custom_main_font_test,
			$custom_secondary_font_test,


		   // WP

		   $base_font_size;

			$custom_header_layout          			 = sava_theme_option('header_layout', 'style-1');
			$custom_header_logo            			 = sava_theme_option('header_logo', get_template_directory_uri() . '/includes/assets/logo.png');
			$custom_header_sticky           		 = sava_theme_option('header_sticky', 1);
			$header_search_state          			 = sava_theme_option('header_search', 1);
			$custom_header_cart                      = sava_theme_option('header_cart', 0);
			$custom_header_widget      	             = sava_theme_option('header_widget', 1);
			$custom_header_background_color 		 = sava_theme_option('header_background_color', '#FFF');
			$custom_header_primary_color    		 = sava_theme_option('header_primary_color', '#067B82');
			$custom_header_accent_color              = sava_theme_option('header_accent_color', '#169099');
			$custom_header_font_size                 = sava_theme_option('header_font_size', '14');
			$custom_header_size            			 = sava_theme_option('header_size', 'wide');
			$custom_header_height          			 = sava_theme_option('header_height', '100');
			$custom_header_sticky_background_color   = sava_theme_option('header_sticky_background_color', '#085477');
			$custom_header_sticky_primary_color      = sava_theme_option('header_sticky_primary_color', '#FFFFFF');
			$custom_header_sticky_accent_color       = sava_theme_option('header_sticky_accent_color', '#169099');
			$custom_header_sticky_height          	 = sava_theme_option('header_sticky_height', '65');

			// footer

			$custom_footer_layout 					= sava_theme_option( 'footer_layout', 					'style-1' );
			$custom_footer_background_color 		= sava_theme_option( 'footer_background_color', 			'#067B82' );
			$custom_footer_font_color 				= sava_theme_option( 'footer_font_color', 				'#ff3939' );
			$custom_footer_links_color 				= sava_theme_option( 'footer_links_color', 				'#FFF' );
			$custom_footer_text 					= sava_theme_option( 'footer_text', '© 2016 sava Wordpress Theme by <a href="https://www.adriansava.ro" target="_blank">Sava</a>.' );
			$custom_footer_accent_color 			= sava_theme_option( 'footer_accent_color', 				'#169099' );
			$custom_footer_font_size 			    = sava_theme_option( 'footer_font_size', 				'14' );

			

			$custom_header_transparent 				= sava_theme_option( 'header_transparent', 				0 );
			$custom_header_transparent_scheme		= sava_theme_option( 'header_transparent_scheme', 		'dark' );
			$custom_header_transparent_light_color	= sava_theme_option( 'header_transparent_light_color', 	'#FFFFFF' );
			$custom_header_transparent_light_logo	= sava_theme_option( 'header_transparent_light_logo', 	'' );
			$custom_header_transparent_dark_color	= sava_theme_option( 'header_transparent_dark_color', 	'#000000' );
			$custom_header_transparent_dark_logo	= sava_theme_option( 'header_transparent_dark_logo', 		'' );

			// Top Bar

			$custom_header_top_bar_background_color = sava_theme_option('header_top_bar_background_color', '#FFF');
			$custom_header_top_bar_primary_color    = sava_theme_option('header_top_bar_primary_color', '#000');
			$custom_header_top_bar_accent_color     = sava_theme_option('header_top_bar_accent_color', '#ff3939');
			$custom_header_top_bar_phone            = sava_theme_option( 'header_top_bar_phone', '');
		    $custom_header_top_bar_email            = sava_theme_option( 'header_top_bar_email', '');
		    $custom_header_top_bar_widget           = sava_theme_option( 'header_top_bar_widget', 0);


		    // Top Bar Social MEdia
		    $custom_header_top_social_media         = sava_theme_option( 'header_top_social_media', 0);
		    $custom_top_bar_widget                  = sava_theme_option( 'top_bar_widget', 0);
	    	$fa_facebook							= sava_theme_option( 'facebook_link', 					'' );
			$fa_twitter 							= sava_theme_option( 'twitter_link', 						'' );
			$fa_pinterest 							= sava_theme_option( 'pinterest_link', 					'' );
			$fa_linkedin 							= sava_theme_option( 'linkedin_link', 					'' );
			$fa_googleplus 							= sava_theme_option( 'googleplus_link', 					'' );
			$fa_rss									= sava_theme_option( 'rss_link', 							'' );
			$fa_tumblr 								= sava_theme_option( 'tumblr_link', 						'' );
			$fa_instagram							= sava_theme_option( 'instagram_link', 					'' );
			$fa_youtube 							= sava_theme_option( 'youtube_link', 						'' );
			$fa_vimeo 								= sava_theme_option( 'vimeo_link', 						'' );
			$fa_behance 							= sava_theme_option( 'behance_link', 						'' );
			$fa_dribbble 							= sava_theme_option( 'dribbble_link', 					'' );
			$fa_flickr								= sava_theme_option( 'flickr_link', 						'' );
			$fa_git_link 							= sava_theme_option( 'git_link', 							'' );
			$fa_skype 								= sava_theme_option( 'skype_link', 						'' );
			$fa_weibo 								= sava_theme_option( 'weibo_link', 						'' );
			$fa_foursquare 							= sava_theme_option( 'foursquare_link', 					'' );
			$fa_soundcloud 							= sava_theme_option( 'soundcloud_link', 					'' );

			$base_font_size                         = sava_theme_option('font_size', '14');



			$custom_font_size 						= sava_theme_option( 'font_size', 						'17' );
			$custom_default_theme_fonts				= sava_theme_option( 'default_theme_fonts', 			'default_fonts' );
			$custom_main_font 						= sava_theme_option( 'main_font', 						'Work Sans' );
			$custom_secondary_font 					= sava_theme_option( 'secondary_font', 					'' );
			$custom_main_font_test					= sava_theme_option( 'main_font_test', 					'adahybrid' );
			$custom_secondary_font_test				= sava_theme_option( 'secondary_font_test', 			'adahybrid' );


			// custom code

			
			$custom_css 							= sava_theme_option( 'custom_css', 						'' );
			$custom_header_js 						= sava_theme_option( 'header_js', 						'' );
			$custom_footer_js 						= sava_theme_option( 'footer_js', 						'' );


			// footer

		


			// body

			$custom_body_layout 					= sava_theme_option( 'body_layout', 						'boxed' );

			

			?>

	<style>


		/***********************************
		/********** HEADER *****************
		/**********************************/

		/* Header Typography Color */

		<?php

		
		function header_colors($color_scheme, $color, $accent_color) {

			// $header_secondary_color_dark	 		= 'rgba('.sava_hex2rgb($color).', 0.6)';
			// $header_secondary_color_medium 			= 'rgba('.sava_hex2rgb($color).', 0.35)';
			// $header_secondary_color_light 			= 'rgba('.sava_hex2rgb($color).', 0.1)';
			// $header_secondary_color_ultra_light 	= 'rgba('.sava_hex2rgb($color).', 0.05)';

			$header_submenu_items_hover =          'rgba('.sava_hex2rgb($accent_color).', 0.5)';

			$header_colors_classes = '

				' . $color_scheme . ' .site-header.header-style-1 .header-container .header-branding .site-title a,
				' . $color_scheme . ' .site-header.header-style-1 .header-container .header-icons-mobile > li > a,
				' . $color_scheme . ' .site-header.header-style-1 .header-container .main-navigation > ul > li > a,
				' . $color_scheme . ' .site-header.header-style-1 .header-container .header-tools > ul > li > a,
				' . $color_scheme . ' .site-header.header-style-1 .header-container .main-navigation ul > li:hover > a,
				' . $color_scheme . ' .site-header.header-style-1 .header-container .header-widget,
				' . $color_scheme . ' .site-header.header-style-1 .header-container .offcanvas-menu-icon a,

				' . $color_scheme . ' .site-header.header-style-2 .header-container .header-branding .site-title a,
				' . $color_scheme . ' .site-header.header-style-2 .header-container .header-icons-mobile > li > a,
				' . $color_scheme . ' .site-header.header-style-2 .header-container .main-navigation > ul > li > a,
				' . $color_scheme . ' .site-header.header-style-2 .header-container .header-tools > ul > li > a,
				' . $color_scheme . ' .site-header.header-style-2 .header-container .main-navigation ul li:hover > a,
				' . $color_scheme . ' .site-header.header-style-2 .header-container .header-widget,
				' . $color_scheme . ' .site-header.header-style-2 .header-container .offcanvas-menu-icon a,

				' . $color_scheme . ' .site-header.header-style-3 .header-container .header-branding .site-title a,
				' . $color_scheme . ' .site-header.header-style-3 .header-container .header-icons-mobile > li > a,
				' . $color_scheme . ' .site-header.header-style-3 .header-container .main-navigation > ul > li > a,
				' . $color_scheme . ' .site-header.header-style-3 .header-container .header-tools > ul > li > a,
				' . $color_scheme . ' .site-header.header-style-3 .header-container .main-navigation ul li:hover > a,
				' . $color_scheme . ' .site-header.header-style-3 .header-container .header-widget,
				' . $color_scheme . ' .site-header.header-style-3 .header-container .offcanvas-menu-icon a
				{
					color: ' . $color . ';
				}

				' . $color_scheme . ' .site-header:not(.header-sticky.active) .header-tools .shopping_bag_items_number,
				' . $color_scheme . ' .site-header:not(.header-sticky.active) .main-navigation > ul > li.current-menu-item > a
				{
					color: ' . $accent_color . ' !important;
				}

				' . $color_scheme . ' .site-header.header-style-1 .header-container .main-navigation > ul > li:hover
				{
					color: ' . $color . ' !important;
				}

				' . $color_scheme . ' .site-header.header-style-1 .header-container .main-navigation > ul > li:not(.mega-menu-item) ul,
				' . $color_scheme . ' .site-header.header-style-1 .header-container .main-navigation > ul > li > ul

				{
					border-top: 2px solid ' . $color  . ' !important;
				}


				


			';

			echo $header_colors_classes;

		}


		header_colors('', $custom_header_primary_color, $custom_header_accent_color);
		header_colors('.header-transparent-light', $custom_header_transparent_light_color,	$custom_header_accent_color);
		header_colors('.header-transparent-dark ', $custom_header_transparent_dark_color, 	$custom_header_accent_color);
		// header_colors('. ', $custom_header_transparent_dark_color, 	$custom_header_accent_color);



		?>




		/*******************************************************
		/******** Customizing Elemets *****************
		/*******************************************************/

		.header-top-bar
		{
			background: <?php echo $custom_header_top_bar_background_color; ?>;
			color: <?php echo $custom_header_top_bar_primary_color; ?>;
		}

		.header-top-bar a
		{
			color: <?php echo $custom_header_top_bar_primary_color; ?>;
		}

		.header-top-bar a:hover
		{
			color: <?php echo $custom_header_top_bar_accent_color; ?>;
		}


		

		/***********************************
		/********** HEADER *****************
		/**********************************/

	

		.site-header
		{
			background-color: <?php echo $custom_header_background_color; ?>;         /* Header Background Color */
			height: <?php echo $custom_header_height .'px !important';  ?>;                      /* Header Height */
		}		


		.site-header.header-style-1 .header-container .main-navigation > ul > li > a,
		.site-header.header-style-1 .header-container .header-branding .site-title a,
		.site-header.header-style-1 .header-container .header-icons-mobile > li > a,
		.site-header.header-style-1 .header-container .header-tools > ul > li > a,
		.site-header.header-style-1 .header-container .header-widget

		.site-header.header-style-2 .header-container .main-navigation > ul > li > a,
		.site-header.header-style-2 .header-container .header-branding .site-title a,
		.site-header.header-style-2 .header-container .header-icons-mobile > li > a,
		.site-header.header-style-2 .header-container .header-tools > ul > li > a,
		.site-header.header-style-2 .header-container .header-widget

		.site-header.header-style-3 .header-container .main-navigation > ul > li > a,
		.site-header.header-style-3 .header-container .header-branding .site-title a,
		.site-header.header-style-3 .header-container .header-icons-mobile > li > a,
		.site-header.header-style-3 .header-container .header-tools > ul > li > a,
		.site-header.header-style-3 .header-container .header-widget,

		.header-search form input
		{
			font-size: <?php echo $custom_header_font_size . 'px'; ?>;                /* Header Font-Size */
			color: <?php echo $custom_header_primary_color; ?>;                       /* Header Color */

		}


		.site-header .header-container .main-navigation > ul > li > a
		{
			line-height: <?php echo $custom_header_height .'px !important';  ?>; 
			height: <?php echo $custom_header_height .'px !important';  ?>;    
		}


		.site-header.header-sticky.active
		{
			background-color: <?php echo $custom_header_sticky_background_color; ?>;
			height: <?php echo $custom_header_sticky_height .'px !important';  ?>;   
		}

		.site-header.header-sticky.active .header-container .main-navigation > ul > li > a
		{
			line-height: <?php echo $custom_header_sticky_height .'px !important';  ?>; 
			height: <?php echo $custom_header_sticky_height .'px !important';  ?>;    
		}

		.site-header.header-style-1.active .header-container .header-branding .logo img
		{
			max-height: <?php echo $custom_header_sticky_height .'px !important';  ?>;
		} 


		.site-header.header-sticky.active .header-container .header-branding .site-title a,
		.site-header.header-sticky.active .header-container .header-icons-mobile > li > a,
		.site-header.header-sticky.active .header-container .header-tools > ul > li > a,
		.site-header.header-sticky.active .header-container .main-navigation > ul > li > a,
		.site-header.header-sticky.active .header-container .header-widget

		{
			color: <?php echo $custom_header_sticky_primary_color;?>;
		}

		.site-header.header-sticky.active .header-tools .header-icons li a .shopping_bag_items_number,
		.site-header.header-sticky.active .main-navigation > ul > li.current-menu-item > a

		{
			background-color: <?php echo $custom_header_sticky_accent_color;?>;
		}





		/***********************************
		/********** BODY *****************
		/**********************************/


		body 
		{
			font-size: <?php echo $base_font_size . 'px';?>;
		}


		/***************************************************************/
		/* Fonts *******************************************************/
		/***************************************************************/
		
		h1, h2, h3, h4, h5, h6,
		[type='text'],
		[type='password'],
		[type='date'],
		[type='datetime'],
		[type='datetime-local'],
		[type='month'],
		[type='week'],
		[type='email'],
		[type='number'],
		[type='search'],
		[type='tel'],
		[type='time'],
		[type='url'],
		[type='color'],
		[type="submit"],
		select,
		textarea,
		table > thead > tr > th,
		dl dt,
		button,
		.button,
		.site-header ul.header-tools,
		.main-navigation-flyout > ul > li > a,
		.main-navigation-flyout > ul > li.mega-menu > ul > li > a,
		.header-branding,
		.site-header .header-mobiles,
		.site-footer,
		.blog-listing article .entry-meta,
		.blog-listing article .more-link,
		.blog-listing .posts-navigation .nav-links,
		.comments-area .comment-list .comment-body .comment-text .comment-reply,
		.comments-area .comment-list .comment-body .comment-text .comment-edit-link,
		.comments-area .comment-list .comment-body .author-info,
		.widget-area .widget ul li span.count, .widget-area .widget ul li span.post_count,
		.widget-area .widget.widget_recent_entries li .post-date,
		.widget-area .widget.widget_recent_comments .comment-author-link,
		.widget-area .widget.widget_rss li .rss-date,
		.widget-area .widget.widget_rss li cite,
		.header-top-bar,
		.header-top-bar a
		{
			font-family: 
			<?php echo "'" . $custom_main_font . "'," ?>
			sans-serif;
		}


			/* Body Layout ******************************************************/
		/********************************************************************/

		<?php if ($custom_body_layout == "full_width") : ?>
			.site-content {max-width: 100%;}
		<?php else: ?>
 			.site-content {max-width: 1200px; margin: 0 auto;}
		<?php endif; ?>


		
		/***********************************
		/********** FOOTER *****************
		/**********************************/

		
		.site-footer
		{
			background-color: <?php echo $custom_footer_background_color; ?>; 
			font-size: <?php echo $custom_footer_font_size . 'px ';  ?>;
		}
		
		.site-footer a
		{
			color: <?php echo $custom_footer_font_color; ?>;
			font-size: <?php echo $custom_footer_font_size . 'px '; ?>;
		}

		.site-footer .footer-text
		{
			color: <?php echo $custom_footer_links_color; ?>;
			font-size: <?php echo $custom_footer_font_size .'px '; ?>;
		}

		.site-footer a:hover
		{
			color: <?php echo $custom_footer_accent_color; ?>;
		}
		

		/********************************************************************/
		/* Custom CSS *******************************************************/
		/********************************************************************/
		
		<?php echo $custom_css ?>
	

	</style>


 <!-- ******************************************************************** -->
	<!-- * Custom Header JavaScript Code ************************************ -->
	<!-- ******************************************************************** -->
    
    <?php if ( (isset($custom_header_js)) && ($custom_header_js != "") ) : ?>
        <?php echo $custom_header_js; ?>
    <?php endif; ?>

<?php
$content = ob_get_clean();
$content = str_replace(array("\r\n", "\r"), "\n", $content);
$lines = explode("\n", $content);
$new_lines = array();
foreach ($lines as $i => $line) { if(!empty($line)) $new_lines[] = trim($line); }
echo implode($new_lines);
} //function
} //if
add_action( 'wp_head', 'theme_custom_styles', 99 );