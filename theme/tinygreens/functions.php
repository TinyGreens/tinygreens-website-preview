<?php
/**
 * Tiny Greens theme setup.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'after_setup_theme', function () {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
} );

add_action( 'wp_enqueue_scripts', function () {
	$ver = wp_get_theme()->get( 'Version' );
	wp_enqueue_style(
		'tinygreens-fonts',
		'https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300..600;1,6..72,300..500&family=Instrument+Sans:wght@400;500;600&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'tinygreens', get_stylesheet_uri(), array( 'tinygreens-fonts' ), $ver );
	wp_enqueue_script( 'tinygreens', get_theme_file_uri( 'assets/js/site.js' ), array(), $ver, array( 'strategy' => 'defer', 'in_footer' => true ) );
} );

add_action( 'enqueue_block_editor_assets', function () {
	wp_enqueue_style(
		'tinygreens-fonts-editor',
		'https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,300..600;1,6..72,300..500&family=Instrument+Sans:wght@400;500;600&display=swap',
		array(),
		null
	);
} );

add_action( 'wp_head', function () {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}, 1 );

/** Pattern category for Tiny Greens sections. */
add_action( 'init', function () {
	register_block_pattern_category( 'tinygreens', array( 'label' => __( 'Tiny Greens', 'tinygreens' ) ) );
} );

/** Trade enquiry form on the Wholesale page. */
require_once get_theme_file_path( 'inc/trade-enquiry.php' );

/** Product listings without prices or checkout. */
require_once get_theme_file_path( 'inc/catalogue.php' );
