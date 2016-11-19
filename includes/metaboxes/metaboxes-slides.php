<?php

// Custom Meta Boxes For Slides


function sava_slider_add_meta_box() {

	add_meta_box(' slider_cta ', ' Add Slider CTA ', 'sava_slider_add_meta_box_callback', 'slides', 'side','high' );
}



function sava_slider_add_meta_box_callback($post) {

	// global $post;

	wp_nonce_field( 'sava_save_content_slider_cta ', 'sava_slider_cta_nonce' );

	$value = get_post_meta( $post->ID, '_slider_cta_value_key', true );

	echo ' <input type="text" id="slider_cta_value_key" name="slider_cta_value_key" placeholder="button text..." value="' . esc_attr( $value ) . '"/> ';

}


add_action( 'add_meta_boxes', 'sava_slider_add_meta_box' );



function sava_save_content_slider_cta( $post_id ) {

	// global $post;

	if ( ! isset( $_POST['sava_slider_cta_nonce'] ) ) {
		return;
	}

	if ( ! wp_verify_nonce( $_POST['sava_slider_cta_nonce'], 'sava_save_content_slider_cta' ) ) {
		return;
	}

	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can ( 'edit_post', $post_id ) ) {
		return;
	}

	if ( !isset( $_POST[ 'slider_cta_value_key' ] ) ) {
		return;
	}

	$slider_cta = sanitize_text_field( $_POST['slider_cta_value_key'] );

	update_post_meta( $post_id, '_slider_cta_value_key',  $slider_cta );

}

add_action( 'save_post', 'sava_save_content_slider_cta' );