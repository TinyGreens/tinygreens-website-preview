<?php
/**
 * LOCAL PREVIEW ONLY. Fills the private local WordPress with pages and a
 * sample grow list so the theme can be previewed. Never run on the live site:
 * the real products come across from the current website.
 *
 * Product names and sizes are from David's wholesale price list (15 Nov 2026).
 * No prices and no made-up descriptions.
 */
require '/wordpress/wp-load.php';
require_once ABSPATH . 'wp-admin/includes/image.php';

foreach ( array( array( 'Wholesale', 'wholesale' ), array( 'Our Story', 'about-us' ) ) as $p ) {
	if ( ! get_page_by_path( $p[1] ) ) {
		wp_insert_post( array( 'post_type' => 'page', 'post_status' => 'publish', 'post_title' => $p[0], 'post_name' => $p[1] ) );
	}
}

if ( ! class_exists( 'WC_Product_Simple' ) || get_posts( array( 'post_type' => 'product', 'numberposts' => 1, 'post_status' => 'any' ) ) ) {
	return;
}

// Skip WooCommerce's setup wizard and sample notices in the local preview.
update_option( 'woocommerce_onboarding_profile', array( 'skipped' => true ) );
update_option( 'woocommerce_task_list_hidden', 'yes' );
update_option( 'woocommerce_coming_soon', 'no' );
update_option( 'woocommerce_currency', 'AUD' );

function tg_seed_image( $file ) {
	static $cache = array();
	if ( isset( $cache[ $file ] ) ) {
		return $cache[ $file ];
	}
	$src    = get_theme_file_path( 'assets/images/' . $file );
	$upload = wp_upload_bits( $file, null, file_get_contents( $src ) );
	if ( ! empty( $upload['error'] ) ) {
		return 0;
	}
	$id = wp_insert_attachment( array( 'post_mime_type' => 'image/jpeg', 'post_title' => $file, 'post_status' => 'inherit' ), $upload['file'] );
	wp_update_attachment_metadata( $id, wp_generate_attachment_metadata( $id, $upload['file'] ) );
	return $cache[ $file ] = $id;
}

$cats = array();
foreach ( array( 'microherbs' => 'Microherbs', 'live-trays' => 'Live trays' ) as $slug => $name ) {
	$t             = term_exists( $slug, 'product_cat' ) ?: wp_insert_term( $name, 'product_cat', array( 'slug' => $slug ) );
	$cats[ $slug ] = (int) $t['term_id'];
}

// name, category, sizes (only where the price list states them), photo.
$products = array(
	array( 'Bronze Fennel', 'microherbs', '', '' ),
	array( 'Chefs Mix', 'microherbs', '100g · 500g', 'chefs-mix-punnet.jpg' ),
	array( 'Chervil', 'microherbs', '', '' ),
	array( 'Coriander', 'microherbs', '', '' ),
	array( 'Green Cabbage', 'microherbs', '', '' ),
	array( 'Green Mizuna', 'microherbs', '', '' ),
	array( 'Green Mustard', 'microherbs', '', '' ),
	array( 'Green Shiso', 'microherbs', '', '' ),
	array( 'Lemon Balm', 'microherbs', '', 'lemon-balm-tray.jpg' ),
	array( 'Parsley', 'microherbs', '', '' ),
	array( 'Pea Shoots', 'microherbs', '500g · 1.5kg', '' ),
	array( 'Pink Radish', 'microherbs', '100g · 500g', '' ),
	array( 'Purple Radish', 'microherbs', '100g · 500g', '' ),
	array( 'Red Amaranth', 'microherbs', '', 'red-amaranth-punnet.jpg' ),
	array( 'Red Cabbage', 'microherbs', '', '' ),
	array( 'Red Shiso', 'microherbs', '', '' ),
	array( 'Red Vein Sorrel', 'microherbs', '', '' ),
	array( 'Salad Mix', 'microherbs', '100g · 500g', 'salad-mix-punnet.jpg' ),
	array( 'Live Micro Watercress', 'live-trays', '', '' ),
	array( 'Live Red Vein Sorrel', 'live-trays', '12 pots', '' ),
);

foreach ( $products as $i => $row ) {
	list( $name, $cat, $sizes, $photo ) = $row;
	$p = new WC_Product_Simple();
	$p->set_name( $name );
	$p->set_status( 'publish' );
	$p->set_menu_order( $i );
	$p->set_category_ids( array( $cats[ $cat ] ) );
	if ( $sizes ) {
		$p->set_short_description( $sizes );
	}
	if ( $photo ) {
		$p->set_image_id( tg_seed_image( $photo ) );
	}
	$p->save();
}
