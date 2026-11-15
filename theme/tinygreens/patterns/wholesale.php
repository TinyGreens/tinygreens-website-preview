<?php
/**
 * Title: Wholesale page
 * Slug: tinygreens/wholesale
 * Categories: tinygreens
 * Inserter: true
 */
$img = function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"className":"tg-hero","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group tg-hero">
	<!-- wp:columns {"className":"tg-hero-grid"} -->
	<div class="wp-block-columns tg-hero-grid">
		<!-- wp:column {"width":"52%"} -->
		<div class="wp-block-column" style="flex-basis:52%">
			<!-- wp:paragraph {"className":"tg-eyebrow"} -->
			<p class="tg-eyebrow">Wholesale · Brisbane</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading">Wholesale produce for Brisbane <em>kitchens</em>.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"tg-lead"} -->
			<p class="tg-lead">Microherbs we grow to order and cut within 12 hours of delivery, plus fresh fruit and vegetables, specialty mushrooms and edible flowers, all on one delivery. If you run a café, restaurant or catering business, get in touch for wholesale pricing.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"className":"tg-actions"} -->
			<div class="wp-block-buttons tg-actions">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#apply">Apply for a trade account</a></div>
				<!-- /wp:button -->
				<!-- wp:paragraph {"className":"tg-text-link"} -->
				<p class="tg-text-link"><a href="https://wholesale.tinygreens.com.au/">Already a customer? Trade portal →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"className":"tg-joined"} -->
			<p class="tg-joined">Supplying <strong>40+ cafés &amp; restaurants</strong> across Brisbane</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"tg-hero-media"} -->
		<div class="wp-block-column tg-hero-media">
			<!-- wp:image {"sizeSlug":"full","className":"tg-hero-img tg-hero-img--centre"} -->
			<figure class="wp-block-image size-full tg-hero-img tg-hero-img--centre"><img src="<?php echo $img( 'lemon-balm-tray.jpg' ); ?>" alt="A tray of lemon balm microherbs" fetchpriority="high"/><figcaption class="wp-element-caption">Lemon balm, grown in Brisbane</figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"range","className":"tg-section tg-range","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="range" class="wp-block-group tg-section tg-range">
	<!-- wp:group {"className":"tg-section-head tg-reveal","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group tg-section-head tg-reveal">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">What we supply</p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading">One supplier for the pass <em>and</em> the coolroom.</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph -->
		<p>A sample of what we carry. The range changes with the seasons, so ask us for the full current list.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"tg-cats","layout":{"type":"default"}} -->
	<div class="wp-block-group tg-cats">
<?php
$cats = array(
	array( 'Grown by us', 'Microherbs', 'Chefs Mix, Salad Mix, Red Amaranth, Pea Shoots, Pink and Purple Radish, Red and Green Shiso, Coriander, Bronze Fennel, Red Vein Sorrel and more, plus live trays of watercress and red vein sorrel.' ),
	array( 'Sourced by us', 'Fruit &amp; vegetables', 'Leafy greens, tomatoes, onions, cucumbers, avocados, citrus, apples, bananas and fresh herbs.' ),
	array( 'Sourced by us', 'Specialty mushrooms', 'Enoki, king oyster, shiitake, oyster, shimeji, swiss brown, button, flat and portobello.' ),
	array( 'Sourced by us', 'Edible flowers', 'Cornflowers and mixed edible flowers for plating and desserts.' ),
);
foreach ( $cats as $c ) :
	?>
		<!-- wp:group {"className":"tg-cat tg-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group tg-cat tg-reveal">
			<!-- wp:paragraph {"className":"tg-tag"} --><p class="tg-tag"><?php echo esc_html( $c[0] ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo $c[1]; ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php echo esc_html( $c[2] ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"tg-more tg-reveal","layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group tg-more tg-reveal">
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/shop/">View all products →</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
		<!-- wp:paragraph --><p>Can’t see something you use? Ask us. We’ll tell you straight if we can supply it.</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"how-it-works","className":"tg-section tg-trade","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="how-it-works" class="wp-block-group tg-section tg-trade">
	<!-- wp:group {"className":"tg-section-head tg-reveal","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group tg-section-head tg-reveal">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">How it works</p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading">From first call to <em>first delivery.</em></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph -->
		<p>Approved venues get trade pricing, online ordering and a direct line to us.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"tg-steps","layout":{"type":"default"}} -->
	<div class="wp-block-group tg-steps">
<?php
$steps = array(
	array( '01', 'Apply', 'Tell us about your venue and what you use. The form below takes two minutes.' ),
	array( '02', 'Get your price list', 'We’ll talk through what you need and set up your trade account.' ),
	array( '03', 'Order online', 'Order your regulars online through our trade portal.' ),
	array( '04', 'Delivered', 'Delivery days arranged around your venue.' ),
);
foreach ( $steps as $s ) :
	?>
		<!-- wp:group {"className":"tg-step tg-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group tg-step tg-reveal">
			<!-- wp:paragraph {"className":"tg-n"} --><p class="tg-n"><?php echo esc_html( $s[0] ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html( $s[1] ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php echo esc_html( $s[2] ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"apply","className":"tg-section tg-apply","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="apply" class="wp-block-group tg-section tg-apply">
	<!-- wp:columns {"className":"tg-apply-grid"} -->
	<div class="wp-block-columns tg-apply-grid">
		<!-- wp:column {"width":"38%"} -->
		<div class="wp-block-column tg-apply-intro" style="flex-basis:38%">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">Trade enquiries</p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading">Apply for a trade account.</h2><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"tg-lead"} -->
			<p class="tg-lead">Tell us a little about your venue and we’ll be in touch about your wholesale pricing.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"tg-small-print"} -->
			<p class="tg-small-print">Rather talk it through? Call or text David on <a href="tel:+61458278951">0458 278 951</a>, or email <a href="mailto:david@tinygreens.com.au">david@tinygreens.com.au</a>.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:shortcode -->
[tinygreens_trade_form]
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
