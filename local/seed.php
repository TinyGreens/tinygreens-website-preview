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

// DRAFT legal text for David to review (see docs/08-terms-privacy-review.md). Not legal advice.
$tg_p = function ( $t ) {
	return '<!-- wp:paragraph --><p>' . $t . '</p><!-- /wp:paragraph -->';
};
$tg_h = function ( $t ) {
	return '<!-- wp:heading --><h2 class="wp-block-heading">' . $t . '</h2><!-- /wp:heading -->';
};
$tg_contact = 'Call or text <a href="tel:+61458278951">0458 278 951</a>, or email <a href="mailto:david@tinygreens.com.au">david@tinygreens.com.au</a>.';

$tg_terms = implode( "\n", array(
	$tg_p( '<em>Last updated: November 2026</em>' ),
	$tg_h( 'About us' ),
	$tg_p( 'This website is run by Tiny Greens, a microherb grower and fresh produce supplier based in Wynnum, Brisbane, Queensland. ' . $tg_contact ),
	$tg_h( 'Product information' ),
	$tg_p( 'This website is a catalogue. We don’t take orders or payments through it. Our range changes with the seasons, so a product shown here may not always be available. Photos show typical produce; what you receive may look slightly different.' ),
	$tg_h( 'Ordering' ),
	$tg_p( 'Home customers order by phone or text, and we confirm the order, price and delivery or pick-up details with you directly. Trade customers order through our trade portal under their trade account.' ),
	$tg_h( 'Your rights' ),
	$tg_p( 'Nothing in these terms limits any rights you have under the Australian Consumer Law.' ),
	$tg_h( 'Using this website' ),
	$tg_p( 'The text and photos on this website belong to Tiny Greens. Please don’t copy them without our permission. We take care to keep this website accurate, but details can change, so please check with us before relying on them.' ),
	$tg_h( 'Changes' ),
	$tg_p( 'We may update these terms from time to time. The current version is always on this page. These terms are governed by the laws of Queensland.' ),
) );

$tg_privacy = implode( "\n", array(
	$tg_p( '<em>Last updated: November 2026</em>' ),
	$tg_p( 'This policy explains what personal information Tiny Greens collects and how we use it.' ),
	$tg_h( 'What we collect' ),
	$tg_p( 'When you call, text or email us, or send our trade enquiry form, we collect the details you give us: for example your name, business or venue name, email, phone number, suburb and what you’re interested in. We don’t collect payment details through this website.' ),
	$tg_h( 'How we use it' ),
	$tg_p( 'We use your details to reply to you, set up and manage trade accounts, and arrange orders and deliveries. We won’t add you to a mailing list without asking, and we don’t sell or rent your information.' ),
	$tg_h( 'Where it’s kept' ),
	$tg_p( 'Trade enquiries are emailed to us and stored in our website’s private admin area. Our website host and email provider store this information on our behalf. Trade customers’ order details are kept in our trade ordering system.' ),
	$tg_h( 'Cookies' ),
	$tg_p( 'This website doesn’t use advertising or tracking cookies.' ),
	$tg_h( 'Access and corrections' ),
	$tg_p( 'You can ask to see, correct or delete the information we hold about you. ' . $tg_contact ),
	$tg_h( 'Changes' ),
	$tg_p( 'We may update this policy from time to time. The current version is always on this page.' ),
) );

$tg_pages = array(
	array( 'Wholesale', 'wholesale', '' ),
	array( 'Our Story', 'about-us', '' ),
	array( 'Contact', 'contact-us', '' ),
	array( 'Terms', 'terms', $tg_terms ),
	array( 'Privacy', 'privacy', $tg_privacy ),
);
foreach ( $tg_pages as $p ) {
	if ( ! get_page_by_path( $p[1] ) ) {
		wp_insert_post( array( 'post_type' => 'page', 'post_status' => 'publish', 'post_title' => $p[0], 'post_name' => $p[1], 'post_content' => $p[2] ) );
	}
}

if ( ! class_exists( 'WC_Product_Simple' ) ) {
	return;
}
$tg_has_products = (bool) get_posts( array( 'post_type' => 'product', 'numberposts' => 1, 'post_status' => 'any' ) );
if ( ! $tg_has_products ) :

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
endif;

require __DIR__ . '/product-drafts.php';
