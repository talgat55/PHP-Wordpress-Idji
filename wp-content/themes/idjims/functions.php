<?php

/*
* Add Feature Imagee
**/
add_theme_support( 'post-thumbnails' );

/*
* Enrique SCript
*/

function th_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'th-style', get_stylesheet_uri() );


  wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/js/jquery-3.2.1.min.js' ), array(), '1' );
/*  	wp_enqueue_style( 'Lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,600,700,800,900' );
	wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/js/jquery-3.2.1.min.js' ), array(), '2' );
  	wp_enqueue_style( 'owl-awesome', get_theme_file_uri(  '/assets/css/owl.carousel.css'),array(), '2' );
  ///	wp_enqueue_style( 'style', get_theme_file_uri(  '/assets/css/style.css'),array(), '' );
  	wp_enqueue_script( 'jquery.inputmask', get_theme_file_uri(  '/assets/js/jquery.inputmask.js'),array(), '2' );
//	wp_enqueue_style( 'owl.theme.default.min', get_theme_file_uri(  '/assets/css/owl.theme.default.min.css'),array(), '2' );
 	wp_enqueue_script( 'default', get_theme_file_uri(  '/assets/js/default_js.js'),array(), '2' );
 //	wp_enqueue_script( 'owl', get_theme_file_uri(  '/assets/js/owl.carousel.js'),array(), '2' );
 	wp_enqueue_script( 'slick.min', get_theme_file_uri(  '/assets/js/slick.min.js'),array(), '2' );

 	wp_enqueue_script( 'appear', get_theme_file_uri(  '/assets/js/appear.js'),array(), '2' );
 	wp_enqueue_script( 'onenav', get_theme_file_uri(  '/assets/js/onenav1.js'),array(), '2' );

 */


}
add_action( 'wp_enqueue_scripts', 'th_scripts' );
