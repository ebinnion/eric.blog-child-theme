<?php

add_action( 'wp_enqueue_scripts', 'enqueue_eric_blog_ixion_scripts', 11 );

function enqueue_eric_blog_ixion_scripts() {
	wp_enqueue_style( 'eric-blog-ixion-child', get_template_directory_uri() . '/style.css', array(), '20151215' );
	wp_enqueue_style( 'eric-blog', get_stylesheet_uri(), array( 'eric-blog-ixion-child' ), '20180902' );

	wp_dequeue_style( 'ixion-fonts-archivo' );
	wp_dequeue_style( 'ixion-fonts-cooper' );
	wp_dequeue_style( 'genericons' );
}
