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
		<!-- wp:column {"width":"52%"} -->
		<div class="wp-block-column" style="flex-basis:52%">
			<!-- wp:paragraph {"className":"tg-eyebrow"} -->
			<p class="tg-eyebrow">Brisbane grower &amp; wholesale supplier</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading">Microgreens in Brisbane, <em>grown</em> for the&nbsp;kitchen.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"tg-lead"} -->
			<p class="tg-lead">We grow microherbs to order and supply cafés and restaurants with fresh fruit and vegetables alongside them. One local supplier, one delivery.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"className":"tg-actions"} -->
			<div class="wp-block-buttons tg-actions">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/wholesale/#apply">Open a trade account</a></div>
				<!-- /wp:button -->
				<!-- wp:paragraph {"className":"tg-text-link"} -->
				<p class="tg-text-link"><a href="#for-home">Buying for home? →</a></p>
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
			<!-- wp:image {"sizeSlug":"full","className":"tg-hero-img"} -->
			<figure class="wp-block-image size-full tg-hero-img"><img src="<?php echo $img( 'grow-room-amaranth.jpg' ); ?>" alt="Red amaranth microgreens growing under lights in the Tiny Greens grow room" fetchpriority="high"/><figcaption class="wp-element-caption">Red amaranth in our Brisbane grow room</figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"tg-section","style":{"spacing":{"padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group tg-section" style="padding-top:0">
	<!-- wp:group {"className":"tg-section-head tg-reveal","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group tg-section-head tg-reveal">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">What we do</p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading">Specialist grower.<br>Full-range supplier.</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph -->
		<p>Microherbs are where we started and what we're known for. Today we also bring venues the fruit and vegetables they use every day, so one order covers the pass and the coolroom.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"tg-sides"} -->
	<div class="wp-block-columns tg-sides">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo $img( 'lemon-balm-tray.jpg' ); ?>","dimRatio":0,"minHeight":520,"contentPosition":"bottom left","className":"tg-side tg-reveal","style":{"color":{"duotone":null}}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left tg-side tg-reveal" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim tg-shade"></span><img class="wp-block-cover__image-background" alt="A tray of lemon balm microherbs" src="<?php echo $img( 'lemon-balm-tray.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:paragraph {"className":"tg-tag"} --><p class="tg-tag">Grown by us</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Microherbs</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Grown to order in Brisbane and cut close to delivery, for garnish, colour and flavour.</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"tg-text-link"} --><p class="tg-text-link"><a href="/shop/">See the range →</a></p><!-- /wp:paragraph -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo $img( 'produce-crate-PLACEHOLDER-unsplash.jpg' ); ?>","dimRatio":0,"minHeight":520,"contentPosition":"bottom left","className":"tg-side tg-reveal"} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left tg-side tg-reveal" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim tg-shade"></span><img class="wp-block-cover__image-background" alt="A wooden crate of capsicums, chillies, avocados and spring onions" src="<?php echo $img( 'produce-crate-PLACEHOLDER-unsplash.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:paragraph {"className":"tg-ph-tag"} --><p class="tg-ph-tag">Placeholder photo (Unsplash)</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"tg-tag"} --><p class="tg-tag">Sourced by us</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Fruit, veg &amp; mushrooms</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Fresh fruit and vegetables, specialty mushrooms and edible flowers for your kitchen, on the same delivery as your micros.</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"tg-text-link"} --><p class="tg-text-link"><a href="/wholesale/">Wholesale supply →</a></p><!-- /wp:paragraph -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"tg-supply tg-reveal","layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group tg-supply tg-reveal">
		<!-- wp:paragraph --><p>Microherbs</p><!-- /wp:paragraph -->
		<!-- wp:paragraph --><p>Fruit &amp; vegetables</p><!-- /wp:paragraph -->
		<!-- wp:paragraph --><p>Specialty mushrooms</p><!-- /wp:paragraph -->
		<!-- wp:paragraph --><p>Edible flowers</p><!-- /wp:paragraph -->
		<!-- wp:paragraph --><p>Fresh herbs</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
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
	array( 'red-amaranth-punnet.jpg', 'Red amaranth microgreens in a punnet', 'Red Amaranth', 'Vivid magenta, mild and earthy', '50g punnet' ),
	array( 'chefs-mix-punnet.jpg', 'Chefs Mix microgreens in a punnet', 'Chefs Mix', 'Cabbage, radish and amaranth', '100g punnet · 500g bag' ),
	array( 'salad-mix-punnet.jpg', 'Salad Mix microgreens in a punnet', 'Salad Mix', 'Crisp, mild, an everyday base', '100g punnet · 500g bag' ),
	array( 'lemon-balm-tray.jpg', 'Lemon balm microherbs', 'Lemon Balm', 'Bright, citrusy and fresh', '50g punnet' ),
);
foreach ( $cards as $c ) :
	?>
		<!-- wp:group {"className":"tg-card tg-reveal","layout":{"type":"default"}} -->
		<div class="wp-block-group tg-card tg-reveal">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo $img( $c[0] ); ?>" alt="<?php echo esc_attr( $c[1] ); ?>" loading="lazy"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html( $c[2] ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"tg-notes"} --><p class="tg-notes"><?php echo esc_html( $c[3] ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"tg-meta"} --><p class="tg-meta"><span><?php echo esc_html( $c[4] ); ?></span><strong>Enquire</strong></p><!-- /wp:paragraph -->
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
		<p>If you run a café, restaurant or catering business, get in touch for wholesale pricing. Approved venues get their own price list, online ordering and a real person on the other end of the phone.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"tg-steps","layout":{"type":"default"}} -->
	<div class="wp-block-group tg-steps">
<?php
$steps = array(
	array( '01', 'Apply', 'Tell us about your venue and what you use. It takes two minutes.' ),
	array( '02', 'Get your price list', 'We set up your account and send you your trade price list.' ),
	array( '03', 'Order online', 'Order and reorder your regulars online, any time, from your own price list.' ),
	array( '04', 'Delivered', 'Delivered to your door on the days that suit your venue.' ),
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
		<!-- wp:paragraph --><p>Already supplied by us for micros? Ask about adding your fruit and veg to the same order.</p><!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/wholesale/#apply">Apply for a trade account</a></div>
		<!-- /wp:button --></div>
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
			<p class="tg-small-print">We deliver to homes within 20 km of Wynnum, or you’re welcome to pick up from us in Wynnum. Delivery is free within 5 km, $5 up to 10 km and $11.99 up to 20 km (including GST).</p>
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
	<!-- wp:heading --><h2 class="wp-block-heading">One rack, one shelf, one light.</h2><!-- /wp:heading -->
	<!-- wp:paragraph {"className":"tg-quote"} -->
	<p class="tg-quote">“When I moved to Brisbane I kept noticing that chefs wanted fresher, better microherbs. So I started growing them in our garage.”</p>
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
