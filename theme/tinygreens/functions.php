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
	$mtime = function ( $file ) use ( $ver ) {
		$path = get_theme_file_path( $file );
		return file_exists( $path ) ? $ver . '.' . filemtime( $path ) : $ver;
	};
	wp_enqueue_style( 'tinygreens', get_stylesheet_uri(), array(), $mtime( 'style.css' ) );
	wp_enqueue_script( 'tinygreens', get_theme_file_uri( 'assets/js/site.js' ), array(), $mtime( 'assets/js/site.js' ), array( 'strategy' => 'defer', 'in_footer' => true ) );
} );

/** Mark the page as JavaScript-capable before it paints, so entrance animations don't flash. */
add_action( 'wp_head', function () {
	echo "<script>document.documentElement.classList.add('tg-js')</script>\n";
}, 0 );

add_action( 'wp_head', function () {
	// Fonts are self-hosted (theme.json "fontFace"; free OFL licence). Preload the two used first.
	foreach ( array( 'newsreader-latin.woff2', 'instrument-sans-latin.woff2' ) as $font ) {
		printf( '<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n", esc_url( get_theme_file_uri( 'assets/fonts/' . $font ) ) );
	}
}, 1 );

/** Pattern category for Tiny Greens sections. */
add_action( 'init', function () {
	register_block_pattern_category( 'tinygreens', array( 'label' => __( 'Tiny Greens', 'tinygreens' ) ) );
} );

/** Trade enquiry form on the Wholesale page. */
require_once get_theme_file_path( 'inc/trade-enquiry.php' );

/** Product listings without prices or checkout. */
require_once get_theme_file_path( 'inc/catalogue.php' );
require_once get_theme_file_path( 'inc/product-page.php' );
require_once get_theme_file_path( 'inc/seo.php' );

/**
 * Responsive theme photo: src (large) + srcset (800 px and large) + sizes + width/height.
 * Each photo in assets/images/ has a "-800" smaller copy beside it.
 */
function tg_img( $file, $sizes = '100vw' ) {
	$dir   = get_theme_file_path( 'assets/images/' );
	$small = preg_replace( '/\.jpg$/', '-800.jpg', $file );
	$big   = @getimagesize( $dir . $file );
	$out   = 'src="' . esc_url( get_theme_file_uri( 'assets/images/' . $file ) ) . '"';
	if ( $big ) {
		$set = array();
		if ( file_exists( $dir . $small ) && ( $s = @getimagesize( $dir . $small ) ) ) {
			$set[] = esc_url( get_theme_file_uri( 'assets/images/' . $small ) ) . ' ' . $s[0] . 'w';
		}
		$set[] = esc_url( get_theme_file_uri( 'assets/images/' . $file ) ) . ' ' . $big[0] . 'w';
		$out  .= ' srcset="' . implode( ', ', $set ) . '" sizes="' . esc_attr( $sizes ) . '" width="' . $big[0] . '" height="' . $big[1] . '"';
	}
	return $out;
}
