<?php
/**
 * Enqueue scripts and styles.
 */
function conalp_scripts() {
	wp_enqueue_style( 'conalp-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '1.0.0' );

	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display:400,700,400italic', false );

	wp_enqueue_script( 'conalp-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'slide-menu', get_template_directory_uri() . '/js/dist/slide-menu.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js', array(), false, true );

	wp_enqueue_script( 'scrollMagic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js', array(), false, true );

	wp_enqueue_script( 'scrollMagicIndicators-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js', array(), false, true );

	wp_enqueue_script( 'ScrollMagicGsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), false, true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'conalp_scripts' );