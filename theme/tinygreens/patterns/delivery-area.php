<?php
/**
 * Title: Where we deliver (trade)
 * Slug: tinygreens/delivery-area
 * Categories: tinygreens
 * Inserter: true
 *
 * Suburbs supplied by David (15 Nov 2026). The map is an illustration drawn
 * from approximate suburb positions, not a street map.
 */
$base    = array( 'Wynnum', 680, 128 );
$suburbs = array(
	// name, x, y, label anchor (start|end), label dx, label dy.
	array( 'Morningside', 292, 208, 'start', 14, -10 ),
	array( 'Cannon Hill', 376, 250, 'start', 14, 6 ),
	array( 'Seven Hills', 304, 286, 'start', 14, 22 ),
	array( 'Woolloongabba', 150, 318, 'start', 14, 22 ),
	array( 'Brisbane City', 104, 236, 'middle', 0, 38 ),
	array( 'New Farm', 202, 228, 'start', 14, 6 ),
	array( 'Newstead', 184, 152, 'start', 14, -6 ),
	array( 'Moorooka', 98, 498, 'start', 14, 6 ),
);
?>
<!-- wp:group {"anchor":"delivery","className":"tg-section tg-delivery","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="delivery" class="wp-block-group tg-section tg-delivery">
	<!-- wp:columns {"className":"tg-delivery-grid"} -->
	<div class="wp-block-columns tg-delivery-grid">
		<!-- wp:column {"width":"42%","className":"tg-delivery-copy tg-reveal"} -->
		<div class="wp-block-column tg-delivery-copy tg-reveal" style="flex-basis:42%">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">Delivery</p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading">Where we <em>deliver.</em></h2><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"tg-lead"} -->
			<p class="tg-lead">From our base in Wynnum to cafés and restaurants across Brisbane, including:</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"tg-suburbs"} -->
			<ul class="wp-block-list tg-suburbs">
				<!-- wp:list-item --><li>Wynnum</li><!-- /wp:list-item -->
<?php foreach ( $suburbs as $s ) : ?>
				<!-- wp:list-item --><li><?php echo esc_html( $s[0] ); ?></li><!-- /wp:list-item -->
<?php endforeach; ?>
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph -->
			<p><strong>Delivery days are set around your venue.</strong> Tell us when you need your produce and we’ll put together a delivery schedule that suits your service.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"tg-small-print"} -->
			<p class="tg-small-print">Not on the list? Ask us. We may already deliver near you. Call or text <a href="tel:+61458278951">0458 278 951</a>.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"tg-delivery-map-col"} -->
		<div class="wp-block-column tg-delivery-map-col">
			<!-- wp:html -->
			<figure class="tg-map tg-reveal">
				<svg viewBox="40 90 760 450" role="img" aria-labelledby="tg-map-title">
					<title id="tg-map-title">Illustrated map of the Brisbane suburbs Tiny Greens delivers to from Wynnum</title>
					<path class="tg-map-bay" d="M800 0 H758 C736 46 712 92 708 136 C704 186 726 236 734 300 C742 372 770 452 800 520 Z"/>
					<text class="tg-map-water" x="772" y="300" text-anchor="middle" transform="rotate(90 772 300)">Moreton Bay</text>
					<g class="tg-map-routes">
<?php foreach ( $suburbs as $i => $s ) :
	$mx = ( $base[1] + $s[1] ) / 2;
	$my = min( $base[2], $s[2] ) - 40 - $i * 4;
	?>
						<path style="--i:<?php echo (int) $i; ?>" d="M<?php echo (int) $base[1]; ?> <?php echo (int) $base[2]; ?> Q<?php echo (int) $mx; ?> <?php echo (int) $my; ?> <?php echo (int) $s[1]; ?> <?php echo (int) $s[2]; ?>" pathLength="1"/>
<?php endforeach; ?>
					</g>
					<g class="tg-map-stops">
<?php foreach ( $suburbs as $i => $s ) : ?>
						<g style="--i:<?php echo (int) $i; ?>"><circle cx="<?php echo (int) $s[1]; ?>" cy="<?php echo (int) $s[2]; ?>" r="7"/><text x="<?php echo (int) ( $s[1] + $s[4] ); ?>" y="<?php echo (int) ( $s[2] + $s[5] ); ?>" text-anchor="<?php echo esc_attr( $s[3] ); ?>"><?php echo esc_html( $s[0] ); ?></text></g>
<?php endforeach; ?>
					</g>
					<g class="tg-map-base">
						<circle class="tg-map-pulse" cx="<?php echo (int) $base[1]; ?>" cy="<?php echo (int) $base[2]; ?>" r="16"/>
						<circle cx="<?php echo (int) $base[1]; ?>" cy="<?php echo (int) $base[2]; ?>" r="11"/>
						<text x="<?php echo (int) $base[1]; ?>" y="<?php echo (int) ( $base[2] + 46 ); ?>" text-anchor="middle">Wynnum</text>
						<text class="tg-map-sub" x="<?php echo (int) $base[1]; ?>" y="<?php echo (int) ( $base[2] + 70 ); ?>" text-anchor="middle">Our base</text>
					</g>
				</svg>
				<figcaption>Illustration only, not to scale.</figcaption>
			</figure>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
