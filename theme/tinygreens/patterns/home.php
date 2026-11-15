<?php
/**
 * Title: Home page
 * Slug: tinygreens/home
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
		<!-- wp:column {"width":"54%","className":"tg-hero-copy"} -->
		<div class="wp-block-column tg-hero-copy" style="flex-basis:54%">
			<!-- wp:paragraph {"className":"tg-eyebrow"} -->
			<p class="tg-eyebrow">Brisbane grower &amp; wholesale supplier</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"tg-hero-title"} -->
			<h1 class="wp-block-heading tg-hero-title"><span class="tg-line"><span>Microherbs we grow.</span></span> <span class="tg-line"><span><em>Produce</em> we supply.</span></span></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"tg-lead"} -->
			<p class="tg-lead">Brisbane microgreens and microherbs grown by us to order, plus fresh fruit, vegetables, mushrooms and edible flowers for cafés and restaurants. One local supplier, one delivery.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"className":"tg-actions"} -->
			<div class="wp-block-buttons tg-actions">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/wholesale/#apply">Open a trade account</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/shop/">Browse the grow list</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"className":"tg-joined"} -->
			<p class="tg-joined">Supplying <strong>40+ cafés &amp; restaurants</strong> across Brisbane</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"tg-hero-media"} -->
		<div class="wp-block-column tg-hero-media">
			<!-- wp:image {"sizeSlug":"full","className":"tg-hero-img"} -->
			<figure class="wp-block-image size-full tg-hero-img"><img src="<?php echo $img( 'lemon-balm-tray.jpg' ); ?>" alt="A tray of lemon balm microherbs grown by Tiny Greens" fetchpriority="high"/><figcaption class="wp-element-caption">Lemon balm, grown in Brisbane</figcaption></figure>
			<!-- /wp:image -->
			<!-- wp:image {"sizeSlug":"large","className":"tg-hero-inset"} -->
			<figure class="wp-block-image size-large tg-hero-inset"><img src="<?php echo $img( 'produce-crate-PLACEHOLDER-unsplash.jpg' ); ?>" alt="A crate of capsicums, chillies, avocados and spring onions"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"tg-paths","layout":{"type":"default"}} -->
	<div class="wp-block-group tg-paths">
<?php
$paths = array(
	array( 'https://wholesale.tinygreens.com.au/', 'Wholesale · customers', 'Order online' ),
	array( '/wholesale/#apply', 'Wholesale · new venues', 'Apply for a trade account' ),
	array( 'tel:+61458278951', 'Retail · for home', 'Call or text to order' ),
	array( '/shop/', 'Products', 'Browse the grow list' ),
);
foreach ( $paths as $p ) :
	?>
		<!-- wp:paragraph {"className":"tg-path"} -->
		<p class="tg-path"><a href="<?php echo esc_url( $p[0], array( 'https', 'http', 'tel' ) ); ?>"><span class="tg-path-label"><?php echo esc_html( $p[1] ); ?></span><span class="tg-path-action"><?php echo esc_html( $p[2] ); ?></span><span class="tg-arrow" aria-hidden="true">→</span></a></p>
		<!-- /wp:paragraph -->
<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"tg-section","style":{"spacing":{"padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group tg-section" style="padding-top:0">
	<!-- wp:group {"className":"tg-section-head tg-reveal","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group tg-section-head tg-reveal">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">What we do</p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading">Specialist grower.<br>Full-range <em>supplier.</em></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph -->
		<p>Microherbs are where we started and what we’re known for. Today we also bring venues the fruit and vegetables they use every day, so one order covers the pass and the coolroom.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"tg-sides"} -->
	<div class="wp-block-columns tg-sides">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo $img( 'grow-room-amaranth.jpg' ); ?>","dimRatio":0,"minHeight":560,"contentPosition":"bottom left","className":"tg-side tg-reveal"} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left tg-side tg-reveal" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim tg-shade"></span><img class="wp-block-cover__image-background" alt="Red amaranth microgreens growing under lights in the Tiny Greens grow room" src="<?php echo $img( 'grow-room-amaranth.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:paragraph {"className":"tg-tag"} --><p class="tg-tag">Grown by us</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Microherbs</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Grown to order in Brisbane and cut within 12 hours of delivery, for garnish, colour and flavour.</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"tg-text-link"} --><p class="tg-text-link"><a href="/shop/">See the range →</a></p><!-- /wp:paragraph -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo $img( 'produce-crate-PLACEHOLDER-unsplash.jpg' ); ?>","dimRatio":0,"minHeight":560,"contentPosition":"bottom left","className":"tg-side tg-reveal"} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left tg-side tg-reveal" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim tg-shade"></span><img class="wp-block-cover__image-background" alt="A wooden crate of capsicums, chillies, avocados and spring onions" src="<?php echo $img( 'produce-crate-PLACEHOLDER-unsplash.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:paragraph {"className":"tg-ph-tag"} --><p class="tg-ph-tag">Placeholder photo (Unsplash)</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"tg-tag"} --><p class="tg-tag">Sourced by us</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Fruit, veg &amp; mushrooms</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Fresh fruit and vegetables, specialty mushrooms, edible flowers and fresh herbs, on the same delivery as your micros.</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"tg-text-link"} --><p class="tg-text-link"><a href="/wholesale/">Wholesale supply →</a></p><!-- /wp:paragraph -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"microherbs","className":"tg-section tg-range","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="microherbs" class="wp-block-group tg-section tg-range">
	<!-- wp:group {"className":"tg-section-head tg-reveal","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group tg-section-head tg-reveal">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">The microherb range</p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading">Small leaves, <em>big</em> plates.</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph -->
		<p>More than twenty varieties, plus live trays of watercress and red vein sorrel. Call or message us to order, or to ask about something you don’t see listed.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"tg-cards","layout":{"type":"default"}} -->
	<div class="wp-block-group tg-cards">
<?php
$cards = array(
	// photo, alt text, name, sizes (from the wholesale price list; blank = not confirmed).
	array( 'red-amaranth-punnet.jpg', 'Red amaranth microgreens in a punnet', 'Red Amaranth', '' ),
	array( 'chefs-mix-punnet.jpg', 'Chefs Mix microgreens in a punnet', 'Chefs Mix', '100g · 500g' ),
	array( 'salad-mix-punnet.jpg', 'Salad Mix microgreens in a punnet', 'Salad Mix', '100g · 500g' ),
	array( 'lemon-balm-tray.jpg', 'Lemon balm microherbs', 'Lemon Balm', '' ),
);
foreach ( $cards as $c ) :
	$found = function_exists( 'wc_get_products' ) ? get_posts( array( 'post_type' => 'product', 'title' => $c[2], 'numberposts' => 1, 'fields' => 'ids' ) ) : array();
	$link  = $found ? get_permalink( $found[0] ) : home_url( '/shop/' );
	?>
		<!-- wp:group {"className":"tg-card tg-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group tg-card tg-reveal">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url( $link ); ?>" tabindex="-1" aria-hidden="true"><img src="<?php echo $img( $c[0] ); ?>" alt="<?php echo esc_attr( $c[1] ); ?>" loading="lazy"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $c[2] ); ?></a></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"tg-meta"} --><p class="tg-meta"><span><?php echo esc_html( $c[3] ? $c[3] : 'Sizes on request' ); ?></span><a class="tg-enquire" href="<?php echo esc_url( $link ); ?>">Enquire →</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"tg-more tg-reveal","layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group tg-more tg-reveal">
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/shop/">View our full grow list →</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
		<!-- wp:paragraph --><p>20+ varieties, including live trays</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"wholesale","className":"tg-section tg-trade","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="wholesale" class="wp-block-group tg-section tg-trade">
	<!-- wp:group {"className":"tg-section-head tg-reveal","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group tg-section-head tg-reveal">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">For cafés, restaurants &amp; caterers</p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading">Trade ordering, <em>made simple.</em></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph -->
		<p>If you run a café, restaurant or catering business, get in touch for wholesale pricing. Approved venues get trade pricing, online ordering and a direct line to us.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"tg-steps","layout":{"type":"default"}} -->
	<div class="wp-block-group tg-steps">
<?php
$steps = array(
	array( '01', 'Apply', 'Tell us about your venue and what you use. It takes two minutes.' ),
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

	<!-- wp:group {"className":"tg-trade-cta tg-reveal","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group tg-trade-cta tg-reveal">
		<!-- wp:paragraph --><p>Already a trade customer? Your price list and ordering are online.</p><!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://wholesale.tinygreens.com.au/">Order online</a></div><!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/wholesale/#apply">Apply for an account</a></div><!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"for-home","className":"tg-section","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div id="for-home" class="wp-block-group tg-section">
	<!-- wp:columns {"className":"tg-home-cook"} -->
	<div class="wp-block-columns tg-home-cook">
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column tg-reveal" style="flex-basis:45%">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo $img( 'salad-mix-punnet.jpg' ); ?>" alt="A punnet of mixed microgreens" loading="lazy"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column tg-reveal">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">For home cooks</p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading">Restaurant-grade greens, for your own table.</h2><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"tg-lead"} -->
			<p class="tg-lead">The same microgreens we grow for Brisbane chefs, for your own kitchen. Just call or send a text to order.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"tg-small-print"} -->
			<p class="tg-small-print">We deliver to homes within 20 km of Wynnum, or you’re welcome to pick up from us in Wynnum. Delivery is free within 5 km, $5 up to 10 km and $11.99 up to 20 km.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="tel:+61458278951">Call 0458 278 951</a></div><!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="sms:+61458278951">Send a text</a></div><!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"className":"tg-note"} -->
			<p class="tg-note"><strong>Run a café or restaurant?</strong> Contact us for wholesale pricing. <a class="tg-text-link" href="/wholesale/">Wholesale enquiries</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"story","className":"tg-section tg-story tg-reveal","style":{"spacing":{"padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"820px"}} -->
<div id="story" class="wp-block-group tg-section tg-story tg-reveal" style="padding-top:0">
	<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">Our story</p><!-- /wp:paragraph -->
	<!-- wp:heading --><h2 class="wp-block-heading">One rack, one shelf, <em>one light.</em></h2><!-- /wp:heading -->
	<!-- wp:paragraph {"className":"tg-quote"} -->
	<p class="tg-quote">“What started in our garage with a single growing rack, one shelf and one light quickly became something much bigger.”</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph -->
	<p>Tiny Greens began supplying one or two local kitchens. Word of mouth, consistency and good relationships did the rest. As we got to know what our customers needed, adding fresh fruit and vegetables was the natural next step, so chefs can get more of their produce from someone they already trust.</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"tg-sig"} -->
	<p class="tg-sig">Quality, reliable service and genuine relationships. Still the whole idea.<br><strong>David</strong>, founder</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"tg-text-link"} -->
	<p class="tg-text-link"><a href="/about-us/">Read our story →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
