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


					<div class="archive-category">

						<h1 class="entry-title"> <?php wp_title(''); ?> </h1>

							<div class="row">

								<?php
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/content/content', 'category' ); ?>

									
								
								<?php
								endwhile; // End of the loop.
								?>

									<!-- Add the pagination functions here. -->
									<?php

										$args = array(
											'screen_reader_text' => __( ' ', 'sava' ),

										);

										?>


										<div class="large-12 columns">

									 		<?php the_posts_pagination($args); ?> 

										</div>

										
							</div>

					</div>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
