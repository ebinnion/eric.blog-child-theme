<?php

add_action( 'wp_enqueue_scripts', 'enqueue_eric_blog_ixion_scripts', 11 );

function enqueue_eric_blog_ixion_scripts() {
	wp_enqueue_style( 'eric-blog-ixion-child', get_template_directory_uri() . '/style.css', array(), '20151215' );
	wp_enqueue_style( 'eric-blog', get_stylesheet_uri(), array( 'eric-blog-ixion-child' ), '20180902-1' );

	wp_dequeue_style( 'ixion-fonts-archivo' );
	wp_dequeue_style( 'ixion-fonts-cooper' );
	wp_dequeue_style( 'genericons' );

	// Use jQuery 3.
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1' );
	wp_deregister_script( 'jquery-migrate' );
	wp_register_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.0.min.js', array(), '3.0.0' );
}
