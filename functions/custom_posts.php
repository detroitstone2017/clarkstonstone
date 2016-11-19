<?php 





/*

* Creating a function to create our CPT

*/





// Our custom post type function

function create_posttype() {



	register_post_type( 'slides',

	// CPT Options

		array(

			'labels' => array(

				'name' => __( 'Slides' ),

				'singular_name' => __( 'Slide' )

			),

			'public' => true,

			'has_archive' => true,

			'rewrite' => array('slug' => 'slides'),

		)

	);





	register_post_type( 'products',

	// CPT Options

		array(

			'labels' => array(

				'name' => __( 'Products' ),

				'singular_name' => __( 'Product' )

			),

			'public' => true,

			'has_archive' => true,

			'rewrite' => array('slug' => 'products'),

		)

	);

}

// Hooking up our function to theme setup

add_action( 'init', 'create_posttype' );





function slider_post_type() {



// Set UI labels for Custom Post Type

	$labels = array(

		'name'                => _x( 'Slides', 'Post Type General Name', 'sava' ),

		'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'sava' ),

		'menu_name'           => __( 'Slides', 'sava' ),

		'parent_item_colon'   => __( 'Parent Slide', 'sava' ),

		'all_items'           => __( 'All Slides', 'sava' ),

		'view_item'           => __( 'View Slide', 'sava' ),

		'add_new_item'        => __( 'Add New Slide', 'sava' ),

		'add_new'             => __( 'Add New', 'sava' ),

		'edit_item'           => __( 'Edit Slide', 'sava' ),

		'update_item'         => __( 'Update Slide', 'sava' ),

		'search_items'        => __( 'Search Slide', 'sava' ),

		'not_found'           => __( 'Not Found', 'sava' ),

		'not_found_in_trash'  => __( 'Not found in Trash', 'sava' ),

	);

	

// Set other options for Custom Post Type

	

	$args = array(

		'label'               => __( 'slides', 'sava' ),

		'description'         => __( 'Slides', 'sava' ),

		'labels'              => $labels,

		// Features this CPT supports in Post Editor

		'supports'            => array( 'title', 'excerpt', 'thumbnail'),

		'hierarchical'        => false,

		'public'              => true,

		'show_ui'             => true,

		'show_in_menu'        => false,

		'show_in_nav_menus'   => false,

		'show_in_admin_bar'   => false,

		'menu_position'       => 5,

		'can_export'          => false,

		'has_archive'         => false,

		'exclude_from_search' => true,

		'publicly_queryable'  => true,

		'capability_type'     => 'page',

	);

	

	// Registering your Custom Post Type

	register_post_type( 'slides', $args );


}



add_action( 'init', 'slider_post_type', 0 );



function products_post_type() {



// Set UI labels for Custom Post Type

	$labels = array(

		'name'                => _x( 'Products', 'Post Type General Name', 'sava' ),

		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'sava' ),

		'menu_name'           => __( 'Products', 'sava' ),

		'parent_item_colon'   => __( 'Parent Products', 'sava' ),

		'all_items'           => __( 'All Products', 'sava' ),

		'view_item'           => __( 'View Products', 'sava' ),

		'add_new_item'        => __( 'Add New Product', 'sava' ),

		'add_new'             => __( 'Add New Product', 'sava' ),

		'edit_item'           => __( 'Edit Product', 'sava' ),

		'update_item'         => __( 'Update Product', 'sava' ),

		'search_items'        => __( 'Search Product', 'sava' ),

		'not_found'           => __( 'Not Found', 'sava' ),

		'not_found_in_trash'  => __( 'Not found in Trash', 'sava' ),

	);

	

// Set other options for Custom Post Type

	

	$args = array(

		'label'               => __( 'products', 'sava' ),

		'description'         => __( 'products', 'sava' ),

		'labels'              => $labels,

		// Features this CPT supports in Post Editor

		'supports'            => array( 'title', 'excerpt', 'thumbnail'),

		'hierarchical'        => false,

		'public'              => true,

		'show_ui'             => true,

		'show_in_menu'        => true,

		'show_in_nav_menus'   => true,

		'show_in_admin_bar'   => true,

		'menu_position'       => 5,

		'can_export'          => false,

		'has_archive'         => true,

		'exclude_from_search' => true,

		'publicly_queryable'  => true,

		'capability_type'     => 'page',

	);

	

	// Registering your Custom Post Type

	register_post_type( 'products', $args );




  	register_taxonomy( 'categories', array('products'), array(
        'hierarchical' => true, 
        'label' => 'Categories', 
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'categories', 'products' ); // Better be safe than so



}



/* Hook into the 'init' action so that the function

* Containing our post type registration is not 

* unnecessarily executed. 

*/



add_action( 'init', 'products_post_type', 0 );