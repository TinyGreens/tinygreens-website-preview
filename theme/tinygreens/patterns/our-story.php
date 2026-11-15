<?php
/**
 * Title: Our Story page
 * Slug: tinygreens/our-story
 * Categories: tinygreens
 * Inserter: true
 *
 * Text: David's own story (docs/03-content-and-business-rules.md), split into
 * four chapters and lightly edited. No dates, numbers or milestones added.
 */
$img = function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
$chapters = array(
	array( 'beginnings', 'Humble beginnings' ),
	array( 'relationships', 'Growing through relationships' ),
	array( 'beyond', 'Growing beyond microherbs' ),
	array( 'today', 'What drives us today' ),
);
?>
<!-- wp:group {"className":"tg-section tg-story-hero","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group tg-section tg-story-hero">
	<!-- wp:group {"className":"tg-story-hero-inner","layout":{"type":"default"}} -->
	<div class="wp-block-group tg-story-hero-inner">
		<!-- wp:paragraph {"className":"tg-eyebrow"} --><p class="tg-eyebrow">Our story</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"className":"tg-page-title"} -->
		<h1 class="wp-block-heading tg-page-title"><span class="tg-line"><span>One rack. One shelf.</span></span> <span class="tg-line"><span><em>One light.</em></span></span></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"tg-lead"} -->
		<p class="tg-lead">How a garage grow setup became a Brisbane microherb grower and fresh produce supplier, built on quality and relationships.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"tg-story-body","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group tg-story-body">
	<!-- wp:columns {"className":"tg-story-grid"} -->
	<div class="wp-block-columns tg-story-grid">
		<!-- wp:column {"width":"26%","className":"tg-story-nav-col"} -->
		<div class="wp-block-column tg-story-nav-col" style="flex-basis:26%">
			<!-- wp:html -->
			<nav class="tg-story-nav" aria-label="Chapters">
				<ol>
<?php foreach ( $chapters as $i => $c ) : ?>
					<li><a href="#<?php echo esc_attr( $c[0] ); ?>"><span class="tg-story-nav-n"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span><?php echo esc_html( $c[1] ); ?></a></li>
<?php endforeach; ?>
				</ol>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"tg-story-chapters"} -->
		<div class="wp-block-column tg-story-chapters">

			<!-- wp:group {"anchor":"beginnings","className":"tg-chapter","layout":{"type":"default"}} -->
			<div id="beginnings" class="wp-block-group tg-chapter">
				<!-- wp:paragraph {"className":"tg-chapter-label"} --><p class="tg-chapter-label">Chapter 1 <span>of 4</span></p><!-- /wp:paragraph -->
				<!-- wp:heading --><h2 class="wp-block-heading">Humble <em>beginnings.</em></h2><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"tg-chapter-lead"} -->
				<p class="tg-chapter-lead">Tiny Greens began after I moved to Brisbane and started visiting local cafés and restaurants. I noticed an opportunity to provide chefs with fresher, higher-quality microherbs and decided to give growing them a go.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>What started in our garage with a single growing rack, one shelf and one light quickly became something much bigger.</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<figure class="tg-rack tg-reveal" aria-label="Illustration of a single growing rack with one shelf and one light">
					<svg viewBox="0 0 520 300" aria-hidden="true">
						<g class="tg-rack-glow"><path d="M150 92 L120 196 H400 L370 92 Z"/></g>
						<rect class="tg-rack-light" x="146" y="80" width="228" height="12" rx="6"/>
						<line pathLength="1" class="tg-rack-wire" x1="200" y1="40" x2="200" y2="80"/><line pathLength="1" class="tg-rack-wire" x1="320" y1="40" x2="320" y2="80"/>
						<line pathLength="1" class="tg-rack-post" x1="100" y1="30" x2="100" y2="270"/><line pathLength="1" class="tg-rack-post" x1="420" y1="30" x2="420" y2="270"/>
						<line pathLength="1" class="tg-rack-bar" x1="100" y1="40" x2="420" y2="40"/>
						<rect class="tg-rack-shelf" x="100" y="210" width="320" height="8" rx="2"/>
						<rect class="tg-rack-tray" x="140" y="192" width="240" height="18" rx="3"/>
						<g class="tg-rack-sprouts">
<?php for ( $x = 152; $x <= 368; $x += 12 ) : $h = 14 + ( ( $x * 7 ) % 9 ); ?>
							<path style="--s:<?php echo (int) ( ( $x - 152 ) / 12 ); ?>" d="M<?php echo $x; ?> 192 V<?php echo 192 - $h; ?> m0 0 c-5 -2 -8 -6 -8 -9 c4 0 8 3 8 9 c0 -6 4 -9 8 -9 c0 3 -3 7 -8 9"/>
<?php endfor; ?>
						</g>
					</svg>
					<figcaption><span>1 rack</span><span>1 shelf</span><span>1 light</span></figcaption>
				</figure>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"anchor":"relationships","className":"tg-chapter","layout":{"type":"default"}} -->
			<div id="relationships" class="wp-block-group tg-chapter">
				<!-- wp:paragraph {"className":"tg-chapter-label"} --><p class="tg-chapter-label">Chapter 2 <span>of 4</span></p><!-- /wp:paragraph -->
				<!-- wp:heading --><h2 class="wp-block-heading">Growing through <em>relationships.</em></h2><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"tg-chapter-lead"} -->
				<p class="tg-chapter-lead">We began supplying just one or two local customers who appreciated the quality and freshness of what we were growing. Through word of mouth, consistency and strong relationships, the business gradually grew.</p>
				<!-- /wp:paragraph -->
				<!-- wp:image {"sizeSlug":"large","className":"tg-story-photo tg-reveal"} -->
				<figure class="wp-block-image size-large tg-story-photo tg-reveal"><img <?php echo tg_img( 'grow-room-amaranth.jpg', '(max-width: 781px) 100vw, 60vw' ); ?> alt="Red amaranth microgreens growing under lights in the Tiny Greens grow room" loading="lazy"/><figcaption class="wp-element-caption">Red amaranth in our grow room</figcaption></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"className":"tg-pull tg-reveal"} -->
				<p class="tg-pull tg-reveal">“What has always driven me isn’t just growing great produce. It’s the satisfaction of working closely with chefs and café owners, understanding exactly what they need, and being able to consistently deliver the quality they expect.”</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"anchor":"beyond","className":"tg-chapter","layout":{"type":"default"}} -->
			<div id="beyond" class="wp-block-group tg-chapter">
				<!-- wp:paragraph {"className":"tg-chapter-label"} --><p class="tg-chapter-label">Chapter 3 <span>of 4</span></p><!-- /wp:paragraph -->
				<!-- wp:heading --><h2 class="wp-block-heading">Growing beyond <em>microherbs.</em></h2><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"tg-chapter-lead"} -->
				<p class="tg-chapter-lead">As Tiny Greens grew, so did our understanding of our customers’ needs.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>What began as a specialist microherb operation naturally evolved into wholesale fresh produce distribution, allowing us to support our hospitality customers with a broader range of quality fruit and vegetables.</p>
				<!-- /wp:paragraph -->
				<?php /* Real produce photo goes here when David supplies one (Unsplash placeholder removed). */ ?>
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"anchor":"today","className":"tg-chapter","layout":{"type":"default"}} -->
			<div id="today" class="wp-block-group tg-chapter">
				<!-- wp:paragraph {"className":"tg-chapter-label"} --><p class="tg-chapter-label">Chapter 4 <span>of 4</span></p><!-- /wp:paragraph -->
				<!-- wp:heading --><h2 class="wp-block-heading">What drives us <em>today.</em></h2><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"tg-chapter-lead"} -->
				<p class="tg-chapter-lead">Building genuine relationships with our customers, and knowing that our products contribute to what they create, has always been the most rewarding part of the business.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>Today, Tiny Greens continues to grow with the same philosophy that started it all.</p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"className":"tg-values tg-reveal"} -->
				<ul class="wp-block-list tg-values tg-reveal">
					<!-- wp:list-item --><li><span>01</span>Exceptional quality</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><span>02</span>Reliable service</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li><span>03</span>Genuine relationships</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:paragraph {"className":"tg-signoff"} -->
				<p class="tg-signoff"><strong>David</strong>Founder, Tiny Greens</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tinygreens/how-to-order"} /-->
