<?php
/**
 * Title: Contact page
 * Slug: tinygreens/contact
 * Categories: tinygreens
 * Inserter: true
 *
 * Only confirmed details: phone, email, Wynnum base, home delivery bands.
 * No street address, opening hours or reply times (not confirmed).
 */
$tel  = '+61458278951';
$rows = array(
	array( 'Call', '0458 278 951', 'tel:' . $tel ),
	array( 'Text', '0458 278 951', 'sms:' . $tel ),
	array( 'Email', 'david@tinygreens.com.au', 'mailto:david@tinygreens.com.au' ),
);
?>
<!-- wp:group {"className":"tg-section tg-contact-hero","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group tg-section tg-contact-hero">
	<!-- wp:columns {"className":"tg-contact-grid"} -->
	<div class="wp-block-columns tg-contact-grid">
		<!-- wp:column {"width":"46%","className":"tg-contact-copy"} -->
		<div class="wp-block-column tg-contact-copy" style="flex-basis:46%">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">Contact</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"tg-page-title"} -->
			<h1 class="wp-block-heading tg-page-title"><span class="tg-line"><span>Talk to the</span></span> <span class="tg-line"><span>person who</span></span> <span class="tg-line"><span><em>grows it.</em></span></span></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"tg-lead"} -->
			<p class="tg-lead">Call, text or email David directly, whether you’re ordering for home or setting up supply for your venue.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"tg-contact-base"} -->
			<p class="tg-contact-base"><span>Based in</span>Wynnum, Brisbane</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"tg-contact-aside"} -->
		<div class="wp-block-column tg-contact-aside">
			<!-- wp:html -->
			<ul class="tg-contact-list">
<?php foreach ( $rows as $r ) : ?>
				<li class="tg-reveal"><a href="<?php echo esc_attr( $r[2] ); ?>"><span class="tg-contact-label"><?php echo esc_html( $r[0] ); ?></span><span class="tg-contact-value"><?php echo esc_html( $r[1] ); ?></span><span class="tg-contact-arrow" aria-hidden="true">→</span></a></li>
<?php endforeach; ?>
			</ul>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"tg-section tg-contact-routes","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group tg-section tg-contact-routes">
	<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">Find the right way in</p><!-- /wp:paragraph -->
	<!-- wp:heading {"className":"tg-order-title"} --><h2 class="wp-block-heading tg-order-title">What are you <em>after?</em></h2><!-- /wp:heading -->
	<!-- wp:columns {"className":"tg-routes"} -->
	<div class="wp-block-columns tg-routes">
		<!-- wp:column {"className":"tg-route tg-reveal"} -->
		<div class="wp-block-column tg-route tg-reveal">
			<!-- wp:paragraph {"className":"tg-tag"} --><p class="tg-tag">For home</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Order microgreens for home</h3><!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Call or text your order. We deliver within 20 km of Wynnum: free within 5 km, $5 up to 10 km and $11.99 up to 20 km. Or pick up from us in Wynnum.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"tg-route-link"} --><p class="tg-route-link"><a href="sms:+61458278951">Send a text</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"tg-route tg-reveal"} -->
		<div class="wp-block-column tg-route tg-reveal">
			<!-- wp:paragraph {"className":"tg-tag"} --><p class="tg-tag">New venues</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Supply for your café or restaurant</h3><!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Tell us about your venue and what you use. We’ll come back to you about trade pricing, delivery and the current produce list.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"tg-route-link"} --><p class="tg-route-link"><a href="/wholesale/#apply">Apply for a trade account</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"tg-route tg-route--trade tg-reveal"} -->
		<div class="wp-block-column tg-route tg-route--trade tg-reveal">
			<!-- wp:paragraph {"className":"tg-tag"} --><p class="tg-tag">Trade customers</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Place or change an order</h3><!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Your price list and ordering are on the trade portal. For anything else, call or text David.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"tg-route-link"} --><p class="tg-route-link"><a href="https://wholesale.tinygreens.com.au/">Trade portal</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
