<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" <?php language_attributes(); ?>>
<![endif]-->
<?php global $custom_header_layout ?>
<html <?php language_attributes(); ?>>

<head>
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

	<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>

    <?php get_template_part( 'template-parts/headers/header', $custom_header_layout ); ?>



<?php if ( is_front_page()  ) : ?>    

    <!-- Slider Desktop -->

	<div class="clarkston-slider-wrapper">

		<div class="clarkston-slider-container">

    		<div class="clarkstone-slide-item">
    			<div class="clarkstone-slider-content">
    				<div class="clarkstone-slider-title">
    					<h1>Why pay more <br> when you can shop smart? </h1>
    				</div>
    				<div class="clarkstone-slider-btn">
    					<a href="/shop-local/" class="clarkston-slider-btn-link">Shop Local</a>
    				</div>
    			</div>
    			<img src="http://clarkstonstone.com/wp-content/uploads/2016/11/tiles-clarkston.jpg" alt="">
    		</div>
    		<div class="clarkstone-slide-item">
    			<div class="clarkstone-slider-content">
    				<div class="clarkstone-slider-title">
    					<h1>Why pay more to <br> Home Depot or Lowes? </h1>
    				</div>
    				<div class="clarkstone-slider-btn">
    					<a href="/shop-local/" class="clarkston-slider-btn-link">Shop Local</a>
    				</div>
    			</div>
    			<img src="http://clarkstonstone.com/wp-content/uploads/2016/11/granite-countertops-clarkston.jpg" alt="">
    		</div>
    		<div class="clarkstone-slide-item">
    			<div class="clarkstone-slider-content">
    				<div class="clarkstone-slider-title">
    					<h1>Why pay more to <br> Home Depot or Lowes? </h1>
    				</div>
    				<div class="clarkstone-slider-btn">
    					<a href="/shop-local/" class="clarkston-slider-btn-link">Shop Local</a>
    				</div>
    			</div>
    			<img src="http://clarkstonstone.com/wp-content/uploads/2016/11/quartz-countertops-clarkston.jpg" alt="">
    		</div>
    		
		</div>

	</div>

	<!-- Slider Mobile -->

	<div class="clarkston-slider-wrapper-mobile">

		<div class="clarkston-slider-container">

    		<div class="clarkstone-slide-item">
    			<div class="clarkstone-slider-content">
    				<div class="clarkstone-slider-title">
    					<h1>Why pay more <br> when you can shop smart? </h1>
    				</div>
    				<div class="clarkstone-slider-btn">
    					<a href="/shop-local/" class="clarkston-slider-btn-link">Shop Local</a>
    				</div>
    			</div>
    			<img src="http://clarkstonstone.com/wp-content/uploads/2016/12/granite-countertops-clarkston-mobile.jpg" alt="">
    		</div>
    		<div class="clarkstone-slide-item">
    			<div class="clarkstone-slider-content">
    				<div class="clarkstone-slider-title">
    					<h1>Why pay more to <br> Home Depot or Lowes? </h1>
    				</div>
    				<div class="clarkstone-slider-btn">
    					<a href="/shop-local/" class="clarkston-slider-btn-link">Shop Local</a>
    				</div>
    			</div>
    			<img src="http://clarkstonstone.com/wp-content/uploads/2016/12/marble-countertops-clarkston-mobile.jpg" alt="">
    		</div>
    		<div class="clarkstone-slide-item">
    			<div class="clarkstone-slider-content">
    				<div class="clarkstone-slider-title">
    					<h1>Why pay more to <br> Home Depot or Lowes? </h1>
    				</div>
    				<div class="clarkstone-slider-btn">
    					<a href="/shop-local/" class="clarkston-slider-btn-link">Shop Local</a>
    				</div>
    			</div>
    			<img src="http://clarkstonstone.com/wp-content/uploads/2016/12/quartz-countertops-clarkston-cuartz.jpg" alt="">
    		</div>

    		<div class="clarkstone-slide-item">
    			<div class="clarkstone-slider-content">
    				<div class="clarkstone-slider-title">
    					<h1>Why pay more to <br> Home Depot or Lowes? </h1>
    				</div>
    				<div class="clarkstone-slider-btn">
    					<a href="/shop-local/" class="clarkston-slider-btn-link">Shop Local</a>
    				</div>
    			</div>
    			<img src="http://clarkstonstone.com/wp-content/uploads/2016/12/tile-countertops-clarkston-mobile.jpg" alt="">
    		</div>
    		
		</div>

	</div>


<?php endif; ?>



        <div class="page-wrapper">                

        	<div class="site-content">


