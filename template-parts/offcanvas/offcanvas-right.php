<?php



// Offcanvas Right

global $custom_header_logo,	
	   $custom_header_top_bar_email,
	   $custom_header_top_bar_phone;


?>

	<!-- OffCanvas Menu -->



	<div class="offcanvas-right">



		



		<!-- OffCanvas Menu Content (  Header + Navigation  ) -->



		<div class="offcanvas-menu-content">

		<span class="offcanvas_close"><a href="#" class="close-thik"></a></span>

				<div class="offcanvas-header">
					<ul>
						
						<li class="cta">
							<a class="free-quote" href="#">Free Project Quote</a>
							<a href="tel: <?php echo $custom_header_top_bar_phone; ?> "> <?php echo $custom_header_top_bar_phone; ?></a>

						</li>


					</ul>
				</div>


			<nav class="offcanvas-navigation">

				<?php 

                wp_nav_menu(array(

                    'theme_location' => 'primary',

                    'fallback_cb'    => 'sava_empty_menu_fallback',

                    'container'      => false,

                    'items_wrap'     => '<ul class="%1$s">%3$s</ul>',

                ));

         	   ?>

			</nav>



		</div>



	<!-- OffCanvas Menu Content (  Footer  ) -->



	</div>



	<!-- end OffCanvas Menu -->