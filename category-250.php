<?php get_header();

 ?>


<!-- Flooring Collections Category Page -->
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


								$terms = get_terms( array(
								    'taxonomy' => 'category',
								    'hide_empty' => false,
								    'hierarhical' => false,
								    'include' => array (
								    	276, 287, 290, 295, 298, 257, 258,
								    	)
								) );

							          foreach ( $terms as $term  ) { ?>
										       		
										       		<div class="xlarge-3 large-3 medium-6 columns category">

														<div class="category-image-wrapper boxshadow">

															<a href="<?php echo get_term_link( $term->term_id ); ?>" rel="bookmark"><div class="category-image" style="background-image: url(<?php echo z_taxonomy_image_url($term->term_id, 'medium'); ?> )"></div> </a>
															
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





					</div>

				</div>


			    <div class="orphan-category-posts">

			    	<div class="row">

		   				 <?php

						// The Query
						$query = new WP_Query( array( 'category__in' => 250, 'category_name' => 'flooring-collections', 'orderby'=> 'title', 'order' => 'ASC' ) );


						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								get_template_part( 'template-parts/content/content', 'category' );
							}
							/* Restore original Post Data */
							wp_reset_postdata();
						} else {
							
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