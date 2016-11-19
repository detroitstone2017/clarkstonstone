<?php get_header();

 ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="row">
				<div class="large-12 columns">

					<div class="services-container">

					<h1 class="entry-title"> <?php wp_title(''); ?> </h1>

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content/content', 'services' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

					</div>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
