<?php
/**
 * DRAFT product copy for David to approve or correct (LOCAL PREVIEW ONLY).
 * Short and practical for chefs: what it is, flavour, uses. General culinary
 * knowledge only: no health claims, awards or growing claims.
 * Chefs Mix ingredients are from David's current site; Salad Mix ingredients are unconfirmed.
 *
 * On the real site David edits these in WordPress: the description box, and
 * Product data → Attributes → "Flavour" and "Great with".
 */
if ( ! function_exists( 'wc_get_products' ) ) {
	return;
}

// name => description, flavour, great with (uses separated by |)
$tg_drafts = array(
	'Bronze Fennel'         => array( 'Feathery bronze-green fronds with a gentle aniseed sweetness.', 'Mild aniseed, sweet', 'Seafood | Citrus salads | Pork | Desserts' ),
	'Chefs Mix'             => array( 'Our blend of cabbage, radish and red amaranth: colour, crunch and a light pepper note in one punnet.', 'Mild, fresh, lightly peppery', 'Salads | Burgers | Tacos | Everyday garnish' ),
	'Chervil'               => array( 'Delicate, lacy leaves with a soft anise note.', 'Mild anise, parsley-like', 'Eggs | Fish | Butter sauces | Spring vegetables' ),
	'Coriander'             => array( 'All the brightness of coriander in a tender leaf.', 'Fresh, citrusy, herbal', 'Tacos | Curries | Asian salads | Ceviche' ),
	'Green Cabbage'         => array( 'Mild and crisp; a versatile green base.', 'Mild, fresh, slightly sweet', 'Salads | Sandwiches | Bowls | Garnish' ),
	'Green Mizuna'          => array( 'Fine, jagged leaves with a gentle mustard bite.', 'Mild, peppery', 'Noodle bowls | Asian dishes | Soups | Salads' ),
	'Green Mustard'         => array( 'Real heat for dishes that need a kick.', 'Hot, mustardy', 'Beef | Rich meats | Sandwiches | Eggs' ),
	'Green Shiso'           => array( 'Aromatic leaves with notes of mint, basil and citrus.', 'Minty, herbal, citrus', 'Sashimi | Sushi | Cocktails | Salads' ),
	'Lemon Balm'            => array( 'Soft leaves with a clean lemon-mint aroma.', 'Lemony, minty', 'Desserts | Fruit | Cocktails | Fish' ),
	'Parsley'               => array( 'Classic parsley flavour in a finer, more delicate leaf.', 'Fresh, grassy, herbal', 'Pasta | Fish | Sauces | Everyday garnish' ),
	'Pea Shoots'            => array( 'Tender shoots and curling tendrils that taste of fresh peas.', 'Sweet, fresh pea', 'Salads | Stir-fries | Risotto | Plating height' ),
	'Pink Radish'           => array( 'Crisp pink stems with a peppery radish bite.', 'Peppery, crisp', 'Tacos | Poke bowls | Sandwiches | Seafood' ),
	'Purple Radish'         => array( 'Deep purple leaves with peppery radish heat.', 'Peppery, crisp', 'Salads | Sushi | Seafood | Colour contrast' ),
	'Red Amaranth'          => array( 'Vivid magenta leaves for instant colour on the plate.', 'Mild, earthy', 'Plating colour | Salads | Seafood | Desserts' ),
	'Red Cabbage'           => array( 'Purple stems and green leaves, mild and crunchy.', 'Mild, fresh', 'Salads | Sandwiches | Bowls | Colour' ),
	'Red Shiso'             => array( 'Deep red-purple leaves with spiced, minty notes.', 'Minty, spiced, aromatic', 'Sushi | Sashimi | Cocktails | Desserts' ),
	'Red Vein Sorrel'       => array( 'Green leaves with striking red veins and a sharp lemon tang.', 'Tart, lemony', 'Fish | Rich sauces | Salads | Plating' ),
	'Salad Mix'             => array( 'A ready-to-use microgreen mix for salads and everyday garnish.', 'Mild, fresh', 'Salads | Sandwiches | Wraps | Bowls' ),
	'Live Micro Watercress' => array( 'Living watercress in the tray. Snip what you need, when you need it.', 'Peppery, fresh', 'Soups | Fish | Steak | Garnish' ),
	'Live Red Vein Sorrel'  => array( 'Living red vein sorrel in pots. Snip what you need, when you need it.', 'Tart, lemony', 'Fish | Rich sauces | Plating' ),
);

foreach ( $tg_drafts as $name => $d ) {
	$found = get_posts( array( 'post_type' => 'product', 'title' => $name, 'numberposts' => 1, 'fields' => 'ids', 'post_status' => 'any' ) );
	if ( ! $found ) {
		continue;
	}
	$p = wc_get_product( $found[0] );
	if ( ! $p || $p->get_attribute( 'Flavour' ) ) {
		continue; // already has copy: don't overwrite edits
	}
	$attrs = array();
	foreach ( array( 'Flavour' => array( $d[1] ), 'Great with' => array_map( 'trim', explode( '|', $d[2] ) ) ) as $label => $values ) {
		$a = new WC_Product_Attribute();
		$a->set_name( $label );
		$a->set_options( $values );
		$a->set_visible( true );
		$a->set_variation( false );
		$attrs[] = $a;
	}
	$p->set_attributes( $attrs );
	$p->set_description( '<!-- wp:paragraph --><p>' . esc_html( $d[0] ) . '</p><!-- /wp:paragraph -->' );
	$p->save();
}
