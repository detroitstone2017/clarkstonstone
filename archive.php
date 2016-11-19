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

							

								$args = array(
									
										'show_option_all'    => '',
											'orderby'            => 'name',
											'order'              => 'ASC',
											'style'              => 'list',
											'show_count'         => 0,
											'hide_empty'         => 1,
											'use_desc_for_title' => 1,
											'child_of'           => get_cat_id( single_cat_title("", false) ),
											'feed'               => '',
											'feed_type'          => '',
											'feed_image'         => '',
											'exclude'            => '',
											'exclude_tree'       => '',
											'include'            => '',
											'hierarchical'       => 0,
											'title_li'           => '',
											'show_option_none'   => '',
											'number'             => null,
											'echo'               => 1,
											'depth'              => 1,
											'current_category'   => 1,
											'pad_counts'         => 0,
											'taxonomy'           => 'category',
											'walker'             => null,

										); 

										$categories = get_categories( $args );

										?>


								<?php if ( is_category() && !empty($categories) ) :


										foreach ( $categories as $category ) : ?>



											<div class="large-3 columns category">

												<div class="category-image-wrapper boxshadow">

													<a href="<?php echo  z_taxonomy_image_url($category->term_id); ?>" rel="lightbox"><div class="category-image" style="background-image: url(<?php echo z_taxonomy_image_url($category->term_id); ?> )"></div> </a>
													
													<p class="title">
														<a href="<?php echo get_category_link( $category->term_id ); ?>" rel="bookmark"><i class="ss-icon" aria-hidden="true"><?php echo $category->name; ?></i><?php echo $category->description; ?>

														</a>
													</p>

												</div>
											</div>


										<?php endforeach; ?>
									

							
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


								<div class="large-12 columns">

							 		<?php the_posts_pagination($args); ?> 

								</div>

										

					</div>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();