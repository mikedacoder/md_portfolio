<?php

	// Load stylesheet
	function mikedryburgh_resources() {
		wp_enqueue_style('style', get_stylesheet_uri());		
	}

	add_action('wp_enqueue_scripts', 'mikedryburgh_resources');

//Customize excerpt word count length
function custom_excerpt_length() {
	return 50;
}

add_filter('excerpt_length', 'custom_excerpt_length');

function wpdocs_excerpt_more( $more ) {
    global $post;
    return '<p><a href="'. get_permalink($post->ID) . '">Read more... &raquo;</a></p>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

	// Theme setup
	function mikedryburgh_setup() {

		// Navigation Menus
		register_nav_menus(array(
			'primary' => __( 'Primary Menu'),
			'footer' => __( 'Footer Menu')
		));

		//Add featured image support
		add_theme_support('post-thumbnails');
		add_image_size('small-icon', 46, 46, true);
		add_image_size('portrait-small-thumbnail', 240, 360, true);
		add_image_size('landscape-small-thumbnail', 360, 240, true);
		add_image_size('portrait-large-thumbnail', 480, 720, true);
		add_image_size('landscape-large-thumbnail', 720, 480, true);
		add_image_size('portait-banner-image', 210, 920, array('left', 'top'));
		add_image_size('landscape-banner-image', 920, 210, array('left', 'top'));

		// Add Post Format support
		add_theme_support('post-formats', array('aside', 'gallery', 'link'));
	}

	add_action('after_setup_theme', 'mikedryburgh_setup');

?>