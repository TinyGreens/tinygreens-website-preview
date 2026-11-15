<?php
/**
 * Title: Where we deliver (trade)
 * Slug: tinygreens/delivery-area
 * Categories: tinygreens
 * Inserter: true
 *
 * Suburbs supplied by David (15 Nov 2026). Wording avoids promising full
 * coverage or fixed delivery days.
 */
$areas = array( 'Morningside', 'Cannon Hill', 'Seven Hills', 'Woolloongabba', 'Brisbane City', 'New Farm', 'Newstead', 'Moorooka' );
?>
<!-- wp:group {"anchor":"delivery","className":"tg-section tg-delivery","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="delivery" class="wp-block-group tg-section tg-delivery">
	<!-- wp:columns {"className":"tg-delivery-head tg-reveal"} -->
	<div class="wp-block-columns tg-delivery-head tg-reveal">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">Delivery</p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading">Delivering to <em>Brisbane’s kitchens.</em></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"tg-lead"} -->
			<p class="tg-lead">From our base in Wynnum, we currently deliver to cafés and restaurants in and around these areas. Every venue’s delivery is arranged around its service.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:list {"className":"tg-areas tg-reveal"} -->
	<ul class="wp-block-list tg-areas tg-reveal">
		<!-- wp:list-item --><li>Wynnum <span class="tg-area-tag">Our base</span></li><!-- /wp:list-item -->
<?php foreach ( $areas as $a ) : ?>
		<!-- wp:list-item --><li><?php echo esc_html( $a ); ?></li><!-- /wp:list-item -->
<?php endforeach; ?>
	</ul>
	<!-- /wp:list -->

	<!-- wp:group {"className":"tg-delivery-foot tg-reveal","layout":{"type":"default"}} -->
	<div class="wp-block-group tg-delivery-foot tg-reveal">
		<!-- wp:paragraph -->
		<p><strong>Not on the list?</strong> We may still be able to reach you. Tell us where your venue is and what you need, and we’ll let you know.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#apply">Ask about delivery</a></div><!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:+61458278951">Call 0458 278 951</a></div><!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
