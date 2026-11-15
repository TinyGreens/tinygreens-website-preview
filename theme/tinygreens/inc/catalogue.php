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

	// No public shop: visitors who reach WooCommerce's Cart, Checkout or My Account
	// pages (old links, bookmarks) are sent somewhere useful. Product editing in
	// WordPress is untouched.
	add_action( 'template_redirect', function () {
		if ( is_admin() ) {
			return;
		}
		if ( is_cart() || is_checkout() ) {
			wp_safe_redirect( home_url( '/shop/' ), 301 );
			exit;
		}
		if ( is_account_page() ) {
			wp_safe_redirect( home_url( '/contact-us/' ), 301 );
			exit;
		}
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
	if ( is_singular( 'product' ) && get_the_ID() === get_queried_object_id() ) {
		return sprintf( '<figure class="%s"><span class="screen-reader-text">Photo coming soon</span></figure>', esc_attr( $class ) );
	}
	return sprintf(
		'<figure class="%s"><a href="%s" aria-label="%s"><span class="screen-reader-text">Photo coming soon</span></a></figure>',
		esc_attr( $class ),
		esc_url( get_permalink() ),
		esc_attr( get_the_title() )
	);
}, 10, 2 );

/** No shop icons: stop WooCommerce auto-adding its cart and account icons to the header. */
add_filter( 'hooked_block_types', function ( $hooked ) {
	return array_values( array_diff( $hooked, array( 'woocommerce/mini-cart', 'woocommerce/customer-account' ) ) );
}, 20 );

/**
 * Temporary stock photos: whatever is in the image's Caption field (Media Library) is shown
 * under the photo on its product page, e.g. "Illustrative photo · credit". When David uploads
 * his own photo (no caption), the note disappears by itself. No code change needed.
 */
add_filter( 'render_block_core/post-featured-image', function ( $html ) {
	if ( '' === trim( $html ) || ! is_singular( 'product' ) || get_the_ID() !== get_queried_object_id() ) {
		return $html;
	}
	$caption = wp_get_attachment_caption( get_post_thumbnail_id() );
	if ( ! $caption ) {
		return $html;
	}
	return preg_replace( '#</figure>\s*$#', '<figcaption class="tg-photo-note">' . esc_html( $caption ) . '</figcaption></figure>', $html, 1 );
}, 20 );
