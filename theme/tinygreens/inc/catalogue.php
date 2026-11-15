<?php
/**
 * WooCommerce in "catalogue mode": products are listed for information only.
 * No prices, no Add to cart. People call, text or apply for a trade account.
 * Only active when WooCommerce is installed.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Themes load after plugins, so WooCommerce is already available here.
if ( class_exists( 'WooCommerce' ) ) {
	add_filter( 'woocommerce_is_purchasable', '__return_false' );
	add_filter( 'woocommerce_get_price_html', '__return_empty_string' );
	add_filter( 'woocommerce_variation_is_purchasable', '__return_false' );

	// Show the whole grow list on one page, in the order set in WordPress.
	add_action( 'pre_get_posts', function ( $q ) {
		if ( ! is_admin() && $q->is_main_query() && ( $q->is_post_type_archive( 'product' ) || $q->is_tax( array( 'product_cat', 'product_tag' ) ) ) ) {
			$q->set( 'posts_per_page', 100 );
			$q->set( 'orderby', array( 'menu_order' => 'ASC', 'title' => 'ASC' ) );
		}
	} );
	add_filter( 'loop_shop_per_page', function () {
		return 100;
	} );
}

/** Products without a photo yet get a soft placeholder, so the grid stays even. */
add_filter( 'render_block_core/post-featured-image', function ( $html, $block ) {
	if ( '' !== trim( $html ) || 'product' !== get_post_type() ) {
		return $html;
	}
	$class = 'wp-block-post-featured-image tg-no-photo';
	if ( ! empty( $block['attrs']['className'] ) ) {
		$class .= ' ' . $block['attrs']['className'];
	}
	return sprintf(
		'<figure class="%s"><a href="%s" aria-label="%s"><span>Photo coming soon</span></a></figure>',
		esc_attr( $class ),
		esc_url( get_permalink() ),
		esc_attr( get_the_title() )
	);
}, 10, 2 );
