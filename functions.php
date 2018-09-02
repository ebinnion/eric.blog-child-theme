<?php

add_action( 'wp_enqueue_scripts', 'enqueue_eric_blog_ixion_scripts' );

function enqueue_eric_blog_ixion_scripts() {
	wp_enqueue_style( 'ixion-style', get_template_directory_uri() . '/style.css', array(), '20151215' );

	wp_enqueue_script( 'ixion-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ixion-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_post_type_archive( 'jetpack-testimonial' ) ) {
		wp_enqueue_script( 'masonry' );
		wp_enqueue_script( 'ixion-testimonials', get_template_directory_uri() . '/assets/js/testimonials.js', array( 'jquery', 'masonry' ), '24102016', true );
	}
}
