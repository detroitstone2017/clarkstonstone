<?php get_header();

 ?>


<!-- Mosaic Collections Category Page -->
<!--  ***************************************-->
<!--  ***************************************-->



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


							if ( is_category() )  : ?>

							   <?php

							$terms = get_terms( array(
							    'taxonomy' => 'category',
							    'hide_empty' => false,
							    'hierarhical' => false,
							    'include' => array (
							    	275, 277, 278, 279, 280, 281, 282, 283, 284, 286, 288, 289, 291, 294, 296, 299, 300, 301, 304, 306, 307, 308, 309, 310, 311, 312, 313, 314, 315, 316, 317, 318, 319, 320, 321, 252, 253, 256, 259, 260, 261, 262, 263, 264, 266, 267, 268, 269, 270, 272, 273, 274
							    	)
							) );

							          foreach ( $terms as $term  ) { ?>
										       		
										       		<div class="xlarge-3 large-3 medium-6 columns category">

														<div class="category-image-wrapper boxshadow">

															<a href="<?php echo get_term_link( $term->term_id ); ?>" rel="bookmark"><div class="category-image" style="background-image: url(<?php echo z_taxonomy_image_url($term->term_id); ?> )"></div> </a>
															
															<p class="title">
																<a href="<?php echo get_term_link( $term->term_id ); ?>" rel="bookmark"><i class="ss-icon" aria-hidden="true"><?php echo $term->name; ?></i><?php echo $term->description; ?>
																	<span class="category-count"><?php echo '(' . $term->count . ')'; ?> </span>

																</a>
															</p>

														</div>
													</div>


												<?php

										       

									       	?>


										<?php

							    }?> 




					    <?php else: ?>

					    	<?php 
									while ( have_posts() ) : the_post();
										get_template_part( 'template-parts/content/content', 'category' );

									endwhile; // End of the loop.
								?>


							    
								

						<?php endif; ?>




							<!-- Add the pagination functions here. -->
								<?php

								$args = array(
									'screen_reader_text' => __( ' ', 'sava' ),

								);

								?>



					</div>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();