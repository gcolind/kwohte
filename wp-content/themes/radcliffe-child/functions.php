<?php

// Load parent CSS
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Remove the old Google Font declarations
remove_action('wp_print_styles', 'radcliffe_load_style');

// Register and enqueue styles
function radcliffechild_load_style() {

	if ( !is_admin() ) {
	    wp_enqueue_style( 'radcliffe_googlefonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700,700italic,800|Merriweather:400|Pacifico:400' );
	    wp_enqueue_style( 'radcliffe_style', get_stylesheet_uri() );
	}

}
add_action('wp_enqueue_scripts', 'radcliffechild_load_style');


// Register FontAwesome
add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );
/**
 * Register and load font awesome CSS files using a CDN.
 *
 * @link   http://www.bootstrapcdn.com/#fontawesome
 * @author FAT Media
 */
function prefix_enqueue_awesome() {
	wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );
}

?>
