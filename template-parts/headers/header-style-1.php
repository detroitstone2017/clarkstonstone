<!-- Site Header Version 1 -->

<?php 

global $custom_header_logo,
	   $header_search_state,
	   $custom_header_cart,
	   $custom_header_widget,
	   $custom_header_sticky,
	   $custom_header_sticky_logo,
	   $custom_header_transparent_scheme,
	   $custom_header_transparent,
	   $custom_header_transparent_light_logo,
	   $custom_header_transparent_dark_logo;


        /*******************************************/
        /********** Header Transparency Logo *******/
        /*******************************************/

        $original_logo = $custom_header_logo; 

        if ($custom_header_transparent == 1)
        {
            if ($custom_header_transparent_scheme == 'light')
            {
                $custom_header_logo = $custom_header_transparent_light_logo;
            }
            else 
            {
                $custom_header_logo = $custom_header_transparent_dark_logo;
            }
        }

?>


<?php get_template_part( 'template-parts/includes/header', 'top-bar' ); ?>


<header 
	class="header-style-1 site-header <?php if ( $custom_header_sticky == 1 ) : ?> header-sticky<?php endif; ?> ">

	<!-- Header Navigation -->

	<div class="header-container">

		<!-- Header Search -->

		<div class="header-search">
			<!-- <form action="/">
				<input type="search" placeholder="type to search...">
				<a href="#" class="close-btn" id="searchClose"></a>
			</form> -->

			<?php get_search_form(); ?>
			
		</div>	

		<!-- Site Logo -->

		<div class="header-branding">

            <?php if ( ! empty( $custom_header_logo ) ) : ?>
                            
                <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $custom_header_logo ); ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>"></a>
                </div>
            
            <?php else : ?>

                <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></div>

            <?php endif; ?>

		</div>

		<!-- OffCanvas Menu Open Icon -->

		<div class="offcanvas-menu-icon hide-for-large">
			<a class="offcanvas-icon-open" href="#">
				<i class="fa fa-2x fa-bars" aria-hidden="true"></i>
			</a>
		</div>

		<!-- Main Navigation -->

		<nav class="main-navigation uppercase show-for-large">

			  <?php 
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'fallback_cb'    => 'sava_empty_menu_fallback',
                    'container'      => false,
                    'items_wrap'     => '<ul class="%1$s">%3$s</ul>',
                ));
         	   ?>
		
		</nav>

	
	  <div class="header-tools">
    	
            <ul class="header-icons">

				<li class="cta">
					<a class="free-quote" href="#">Free Project Quote</a>
					<a href="tel: 248-383-1503">248-383-1503</a>
				</li>

			</ul>
		
  	  </div>


	  	  <?php if ( $custom_header_widget == 1 ) {

	            dynamic_sidebar('header-widget-area'); 	
			}

			?>




	<!-- end Header Container -->

</header>

<!-- end Site Header -->