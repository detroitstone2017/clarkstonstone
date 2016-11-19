<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>

<div class="product-single">

	<div class="row">

		<div class="large-6 columns no-pad service">

			<div class="service-image">

				<a href="<?php echo esc_url( the_post_thumbnail_url() ); ?>" rel="lightbox"><?php the_post_thumbnail(); ?></a>

			</div>


		</div>

		<div class="large-6 columns">

			<?php the_title( '<h1 class="title">', '</h1>' ); ?>

			<?php the_content(); ?>
			
		</div>

	
	</div>

</div>