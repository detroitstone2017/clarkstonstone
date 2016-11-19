<?php get_header();



 ?>





	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			

			<div class="row">

				<div class="large-12 columns">

					<?php
						if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('
						<p id="breadcrumbs">','</p>
						');
						}
					?>

					<div class="archive-products-container">


						<h1 class="entry-title"> <?php wp_title(''); ?> </h1>
						
						<?php
							
							$args = array( 'post_type' => 'products', 'order' => 'ASC' );


							$the_query = new WP_Query( $args );

							// The Loop


							if ( $the_query->have_posts() ) {

								echo '<div class="products-container">';

									while ( $the_query->have_posts() ) {

										$the_query->the_post()  ?>

										<?php the_title( '<h1 class="title">', '</h1>' ); ?>


										<?php the_post_thumbnail( ); ?>

									<?php

									}

								echo '</div>';

								/* Restore original Post Data */

								wp_reset_postdata();

							} else {

								// no posts found

							}


						  ?>

					</div>


				</div>

			</div>



		</main><!-- #main -->

	</div><!-- #primary -->



<?php

//get_sidebar();

get_footer();

