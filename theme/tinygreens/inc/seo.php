<?php
/**
 * SEO basics for the theme.
 *
 * 1. Australian English in the page's lang attribute.
 * 2. Meta descriptions, ONLY when no SEO plugin is active. The live site uses Yoast SEO,
 *    which keeps managing titles and descriptions after launch (see docs/12-seo-and-redirects.md
 *    for the recommended wording to paste into Yoast).
 * 3. Redirects for old addresses that won't exist on the new site. They only act when the
 *    address would otherwise be "not found", so they never override a real page or post.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** 1. lang="en-AU" (the live site's language setting is already English (Australia)). */
add_filter( 'language_attributes', function ( $output ) {
	return preg_replace( '/lang="en-US"/', 'lang="en-AU"', $output );
} );

function tg_seo_plugin_active() {
	return defined( 'WPSEO_VERSION' ) || class_exists( 'RankMath' ) || defined( 'AIOSEO_VERSION' ) || defined( 'SEOPRESS_VERSION' );
}

/** Descriptions by page address (about 150 characters each; no health or unconfirmed claims). */
function tg_seo_page_descriptions() {
	return array(
		''           => 'Microgreens in Brisbane, grown to order by Tiny Greens in Wynnum, plus fresh fruit, veg, mushrooms and edible flowers for cafés and restaurants.',
		'wholesale'  => 'Wholesale microherbs, fresh fruit, vegetables, mushrooms and edible flowers for Brisbane cafés and restaurants. Apply for a trade account.',
		'shop'       => 'Our microgreens grow list: microherbs and live trays grown to order in Brisbane and cut within 12 hours of delivery. Call or text to order.',
		'about-us'   => 'How Tiny Greens grew from one rack, one shelf and one light in a Brisbane garage into a microherb grower and fresh produce supplier.',
		'contact-us' => 'Contact Tiny Greens in Wynnum, Brisbane. Call or text 0458 278 951, email us, or apply for a trade account for your café or restaurant.',
		'terms'      => 'Terms of use for the Tiny Greens website: product information, how ordering works and your rights under Australian Consumer Law.',
		'privacy'    => 'How Tiny Greens collects, uses and stores the details you give us when you call, text, email or send a trade enquiry.',
	);
}

function tg_seo_description() {
	if ( is_front_page() ) {
		return tg_seo_page_descriptions()[''];
	}
	if ( function_exists( 'is_shop' ) && is_shop() ) {
		return tg_seo_page_descriptions()['shop'];
	}
	if ( is_singular( 'product' ) ) {
		$id   = get_queried_object_id();
		$name = get_the_title( $id );
		$cats = wp_get_post_terms( $id, 'product_cat', array( 'fields' => 'slugs' ) );
		$live = is_array( $cats ) && in_array( 'live-trays', $cats, true );
		$desc = trim( wp_strip_all_tags( get_post_field( 'post_content', $id ) ) );
		$lead = $live ? $name . ', a live tray from Tiny Greens in Brisbane.' : $name . ' microgreens grown to order in Brisbane by Tiny Greens.';
		$text = $lead . ( $desc ? ' ' . $desc : '' ) . ' Call or text to order, or apply for a trade account.';
		return wp_html_excerpt( $text, 158, '…' );
	}
	if ( is_page() ) {
		$slug = get_post_field( 'post_name', get_queried_object_id() );
		return tg_seo_page_descriptions()[ $slug ] ?? '';
	}
	if ( is_singular( 'post' ) ) {
		$p = get_queried_object();
		return wp_html_excerpt( trim( wp_strip_all_tags( $p->post_excerpt ? $p->post_excerpt : strip_shortcodes( $p->post_content ) ) ), 155, '…' );
	}
	return '';
}

/** 2. Meta description (skipped when Yoast or another SEO plugin is active). */
add_action( 'wp_head', function () {
	if ( tg_seo_plugin_active() ) {
		return;
	}
	$d = tg_seo_description();
	if ( $d ) {
		echo '<meta name="description" content="' . esc_attr( $d ) . '">' . "\n";
	}
}, 2 );

/** 3. Redirects for retired addresses (301 = permanent; passes Google ranking to the new page). */
function tg_seo_redirects() {
	return array(
		'services'                                       => '/shop/',       // old "Products" page
		'my-tickets'                                     => '/contact-us/', // support-ticket plugin pages
		'submit-ticket'                                  => '/contact-us/',
		'microgreens-in-brisban'                         => '/microgreens-in-brisbane/', // misspelt duplicate post (only if removed)
		'category/uncategorized'                         => '/blog/',
		'product-category/microgreens-in-brisbane-products' => '/shop/',    // only if this category is renamed/removed
	);
}
add_action( 'template_redirect', function () {
	if ( ! is_404() ) {
		return;
	}
	$path = trim( (string) wp_parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );
	$map  = tg_seo_redirects();
	if ( isset( $map[ $path ] ) ) {
		wp_safe_redirect( home_url( $map[ $path ] ), 301 );
		exit;
	}
} );
