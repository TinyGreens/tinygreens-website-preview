<?php
/**
 * Single product page (catalogue mode): an "how to order" panel and
 * "More from the grow list". Used by templates/single-product.html.
 *
 * Only confirmed facts: sizes come from the product's short description
 * (from David's price list); the 12-hour freshness line is for cut microherbs only.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Product reviews are switched off: no star ratings or review forms. */
add_filter( 'comments_open', function ( $open, $post_id ) {
	return 'product' === get_post_type( $post_id ) ? false : $open;
}, 10, 2 );
add_filter( 'woocommerce_product_tabs', function ( $tabs ) {
	unset( $tabs['reviews'] );
	return $tabs;
}, 98 );

function tg_product_main_cat( $id ) {
	$terms = get_the_terms( $id, 'product_cat' );
	return ( $terms && ! is_wp_error( $terms ) ) ? $terms[0] : null;
}

/** [tinygreens_product_panel]: category, sizes, freshness and the ways to order. */
add_shortcode( 'tinygreens_product_panel', function () {
	$id = get_the_ID();
	if ( ! $id || 'product' !== get_post_type( $id ) ) {
		return '';
	}
	$cat   = tg_product_main_cat( $id );
	$sizes = trim( wp_strip_all_tags( get_post_field( 'post_excerpt', $id ) ) );
	$micro = $cat && 'microherbs' === $cat->slug;
	// Editable in WordPress: Products → Edit → Product data → Attributes
	// ("Flavour" and "Great with"; separate several uses with | ).
	$product = function_exists( 'wc_get_product' ) ? wc_get_product( $id ) : null;
	$flavour = $product ? $product->get_attribute( 'Flavour' ) : '';
	$uses    = $product ? str_replace( ' | ', ', ', $product->get_attribute( 'Great with' ) ) : '';
	ob_start();
	?>
	<dl class="tg-pp-facts">
		<?php if ( $flavour ) : ?>
		<div><dt>Flavour</dt><dd><?php echo esc_html( $flavour ); ?></dd></div>
		<?php endif; ?>
		<?php if ( $uses ) : ?>
		<div><dt>Great with</dt><dd><?php echo esc_html( $uses ); ?></dd></div>
		<?php endif; ?>
		<div><dt>Sizes</dt><dd><?php echo esc_html( $sizes ? $sizes : 'On request' ); ?></dd></div>
		<?php if ( $cat ) : ?>
		<div><dt>Type</dt><dd><a href="<?php echo esc_url( get_term_link( $cat ) ); ?>"><?php echo esc_html( $cat->name ); ?></a></dd></div>
		<?php endif; ?>
		<?php if ( $micro ) : ?>
		<div><dt>Freshness</dt><dd>Grown to order in Brisbane, cut within 12 hours of delivery</dd></div>
		<?php endif; ?>
	</dl>
	<div class="tg-pp-order">
		<p class="tg-pp-order-label">For home</p>
		<p>Call or text to order. Delivery within 20 km of Wynnum, or pick up in Wynnum.</p>
		<div class="wp-block-buttons">
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="tel:+61458278951">Call 0458 278 951</a></div>
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="sms:+61458278951">Send a text</a></div>
		</div>
	</div>
	<div class="tg-pp-order tg-pp-order--trade">
		<p class="tg-pp-order-label">For cafés &amp; restaurants</p>
		<p>Trade customers order online with trade pricing. New venue? <a href="/wholesale/#apply">Apply for a trade account</a>.</p>
		<p class="tg-route-link"><a href="https://wholesale.tinygreens.com.au/">Order on the trade portal</a></p>
	</div>
	<?php
	return ob_get_clean();
} );

/** [tinygreens_more_products]: the next four products in grow-list order. */
add_shortcode( 'tinygreens_more_products', function () {
	$id = get_the_ID();
	if ( ! $id || 'product' !== get_post_type( $id ) ) {
		return '';
	}
	$all = get_posts( array(
		'post_type'   => 'product',
		'post_status' => 'publish',
		'numberposts' => 100,
		'orderby'     => array( 'menu_order' => 'ASC', 'title' => 'ASC' ),
		'fields'      => 'ids',
	) );
	$pos = array_search( $id, $all, true );
	if ( false === $pos || count( $all ) < 2 ) {
		return '';
	}
	$pick = array();
	for ( $i = 1; $i < count( $all ) && count( $pick ) < 4; $i++ ) {
		$pick[] = $all[ ( $pos + $i ) % count( $all ) ];
	}
	ob_start();
	echo '<ul class="tg-cards tg-more-cards">';
	foreach ( $pick as $pid ) {
		$link = get_permalink( $pid );
		$cat  = tg_product_main_cat( $pid );
		$img  = get_the_post_thumbnail( $pid, 'medium_large', array( 'loading' => 'lazy' ) );
		echo '<li><div class="wp-block-group tg-card tg-reveal">';
		if ( $img ) {
			printf( '<figure class="wp-block-post-featured-image"><a href="%s" tabindex="-1" aria-hidden="true">%s</a></figure>', esc_url( $link ), $img );
		} else {
			printf( '<figure class="wp-block-post-featured-image tg-no-photo"><a href="%s" tabindex="-1" aria-hidden="true"><span>Photo coming soon</span></a></figure>', esc_url( $link ) );
		}
		if ( $cat ) {
			printf( '<div class="tg-card-cat">%s</div>', esc_html( $cat->name ) );
		}
		printf( '<h3 class="wp-block-post-title"><a href="%s">%s</a></h3>', esc_url( $link ), esc_html( get_the_title( $pid ) ) );
		printf( '<a class="tg-enquire" href="%s">Enquire →<span class="screen-reader-text"> about %s</span></a>', esc_url( $link ), esc_html( get_the_title( $pid ) ) );
		echo '</div></li>';
	}
	echo '</ul>';
	return ob_get_clean();
} );
