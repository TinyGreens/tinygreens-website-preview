<?php
/**
 * Trade enquiry form: [tinygreens_trade_form]
 *
 * No plugin needed. Each enquiry is:
 *  1. saved in WordPress (Dashboard → Trade enquiries), so nothing is lost if email fails, and
 *  2. emailed to the address below, with Reply-To set to the venue.
 *
 * Spam protection: a hidden "honeypot" field, a minimum fill time and a per-visitor rate limit.
 * Deliberately no nonce: nonces go stale on cached pages and would reject real customers.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const TG_ENQUIRY_TO = 'david@tinygreens.com.au';

function tg_enquiry_fields() {
	return array(
		'venue'   => array( 'Venue or business name', 'text', true, 'organization' ),
		'name'    => array( 'Your name', 'text', true, 'name' ),
		'email'   => array( 'Email', 'email', true, 'email' ),
		'phone'   => array( 'Phone', 'tel', true, 'tel' ),
		'suburb'  => array( 'Suburb', 'text', true, 'address-level2' ),
		'type'    => array( 'Type of venue', 'select', true, '' ),
		'wants'   => array( 'Interested in', 'checks', false, '' ),
		'message' => array( 'Anything else? (what you use, how often, delivery days)', 'textarea', false, '' ),
	);
}

function tg_enquiry_options() {
	return array(
		'type'  => array( 'Café', 'Restaurant', 'Catering', 'Other' ),
		'wants' => array( 'Microherbs', 'Fruit & vegetables', 'Mushrooms', 'Edible flowers' ),
	);
}

/** Saved enquiries, visible only in the dashboard. */
add_action( 'init', function () {
	register_post_type( 'tg_enquiry', array(
		'labels'          => array(
			'name'          => 'Trade enquiries',
			'singular_name' => 'Trade enquiry',
			'menu_name'     => 'Trade enquiries',
		),
		'public'          => false,
		'show_ui'         => true,
		'show_in_menu'    => true,
		'menu_icon'       => 'dashicons-store',
		'menu_position'   => 26,
		'supports'        => array( 'title', 'editor' ),
		'capability_type' => 'post',
		'capabilities'    => array( 'create_posts' => 'do_not_allow' ),
		'map_meta_cap'    => true,
	) );
} );

/** Signed timestamp so we can tell how long the form was open. */
function tg_enquiry_stamp() {
	$t = time();
	return $t . '.' . hash_hmac( 'sha256', (string) $t, wp_salt( 'nonce' ) );
}

function tg_enquiry_stamp_age( $stamp ) {
	$parts = explode( '.', (string) $stamp, 2 );
	if ( 2 !== count( $parts ) || ! hash_equals( hash_hmac( 'sha256', $parts[0], wp_salt( 'nonce' ) ), $parts[1] ) ) {
		return -1;
	}
	return time() - (int) $parts[0];
}

add_shortcode( 'tinygreens_trade_form', function () {
	$status = isset( $_GET['enquiry'] ) ? sanitize_key( $_GET['enquiry'] ) : '';

	if ( 'sent' === $status ) {
		return '<div class="tg-form-done" role="status"><h3>Thanks, we’ve got it.</h3><p>We’ll be in touch about your wholesale pricing. If it’s urgent, call or text 0458 278 951.</p></div>';
	}

	$opts = tg_enquiry_options();
	ob_start();
	?>
	<form class="tg-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
		<?php if ( 'error' === $status ) : ?>
			<p class="tg-form-error" role="alert">Sorry, something went wrong sending that. Please check the required fields and try again, or call 0458 278 951.</p>
		<?php endif; ?>
		<input type="hidden" name="action" value="tg_trade_enquiry">
		<input type="hidden" name="tg_stamp" value="<?php echo esc_attr( tg_enquiry_stamp() ); ?>">
		<div class="tg-hp" aria-hidden="true"><label>Leave this empty <input type="text" name="tg_website" tabindex="-1" autocomplete="off"></label></div>
		<div class="tg-form-grid">
		<?php foreach ( tg_enquiry_fields() as $key => $f ) :
			list( $label, $type, $required, $auto ) = $f;
			$id  = 'tg-' . $key;
			$req = $required ? ' required' : '';
			$wide = in_array( $type, array( 'textarea', 'checks' ), true ) ? ' tg-field--wide' : '';
			?>
			<?php if ( 'checks' === $type ) : ?>
				<fieldset class="tg-field<?php echo $wide; ?>">
					<legend><?php echo esc_html( $label ); ?></legend>
					<div class="tg-checks">
					<?php foreach ( $opts[ $key ] as $o ) : ?>
						<label><input type="checkbox" name="tg_<?php echo esc_attr( $key ); ?>[]" value="<?php echo esc_attr( $o ); ?>"> <?php echo esc_html( $o ); ?></label>
					<?php endforeach; ?>
					</div>
				</fieldset>
			<?php else : ?>
				<p class="tg-field<?php echo $wide; ?>">
					<label for="<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $label ); ?><?php echo $required ? '' : ' <span>(optional)</span>'; ?></label>
					<?php if ( 'select' === $type ) : ?>
						<select id="<?php echo esc_attr( $id ); ?>" name="tg_<?php echo esc_attr( $key ); ?>"<?php echo $req; ?>>
							<option value="">Choose one</option>
							<?php foreach ( $opts[ $key ] as $o ) : ?>
								<option><?php echo esc_html( $o ); ?></option>
							<?php endforeach; ?>
						</select>
					<?php elseif ( 'textarea' === $type ) : ?>
						<textarea id="<?php echo esc_attr( $id ); ?>" name="tg_<?php echo esc_attr( $key ); ?>" rows="4" maxlength="2000"></textarea>
					<?php else : ?>
						<input id="<?php echo esc_attr( $id ); ?>" type="<?php echo esc_attr( $type ); ?>" name="tg_<?php echo esc_attr( $key ); ?>" autocomplete="<?php echo esc_attr( $auto ); ?>" maxlength="200"<?php echo $req; ?>>
					<?php endif; ?>
				</p>
			<?php endif; ?>
		<?php endforeach; ?>
		</div>
		<div class="wp-block-buttons tg-form-actions">
			<div class="wp-block-button"><button type="submit" class="wp-block-button__link wp-element-button">Send enquiry</button></div>
			<p>We only use your details to reply to this enquiry.</p>
		</div>
	</form>
	<?php
	return ob_get_clean();
} );

function tg_enquiry_handle() {
	$back = wp_get_referer();
	$back = $back ? remove_query_arg( 'enquiry', strtok( $back, '#' ) ) : home_url( '/wholesale/' );

	$fail = function () use ( $back ) {
		wp_safe_redirect( add_query_arg( 'enquiry', 'error', $back ) . '#apply' );
		exit;
	};

	// Bots: honeypot filled, or form sent impossibly fast. Pretend it worked.
	$age = tg_enquiry_stamp_age( wp_unslash( $_POST['tg_stamp'] ?? '' ) );
	if ( ! empty( $_POST['tg_website'] ) || $age < 3 ) {
		wp_safe_redirect( add_query_arg( 'enquiry', 'sent', $back ) . '#apply' );
		exit;
	}

	// Rate limit: 5 enquiries per hour per visitor.
	$ip_key = 'tg_enq_' . md5( $_SERVER['REMOTE_ADDR'] ?? '' );
	$count  = (int) get_transient( $ip_key );
	if ( $count >= 5 ) {
		$fail();
	}
	set_transient( $ip_key, $count + 1, HOUR_IN_SECONDS );

	$opts = tg_enquiry_options();
	$data = array();
	foreach ( tg_enquiry_fields() as $key => $f ) {
		$raw = wp_unslash( $_POST[ 'tg_' . $key ] ?? '' );
		if ( 'checks' === $f[1] ) {
			$val = array_values( array_intersect( (array) $raw, $opts[ $key ] ) );
			$val = implode( ', ', $val );
		} elseif ( 'select' === $f[1] ) {
			$val = in_array( $raw, $opts[ $key ], true ) ? $raw : '';
		} elseif ( 'email' === $f[1] ) {
			$val = sanitize_email( $raw );
		} elseif ( 'textarea' === $f[1] ) {
			$val = sanitize_textarea_field( mb_substr( (string) $raw, 0, 2000 ) );
		} else {
			$val = sanitize_text_field( mb_substr( (string) $raw, 0, 200 ) );
		}
		if ( $f[2] && '' === $val ) {
			$fail();
		}
		$data[ $key ] = $val;
	}
	if ( ! is_email( $data['email'] ) ) {
		$fail();
	}

	$lines = array();
	foreach ( tg_enquiry_fields() as $key => $f ) {
		$lines[] = $f[0] . ': ' . ( '' !== $data[ $key ] ? $data[ $key ] : '-' );
	}
	$body  = implode( "\n", $lines );
	$title = $data['venue'] . ' (' . $data['suburb'] . ')';

	$post_id = wp_insert_post( array(
		'post_type'    => 'tg_enquiry',
		'post_status'  => 'private',
		'post_title'   => $title,
		'post_content' => $body,
	) );
	if ( ! $post_id || is_wp_error( $post_id ) ) {
		$fail();
	}

	$sent = wp_mail(
		TG_ENQUIRY_TO,
		'New trade enquiry: ' . $title,
		$body . "\n\nAlso saved in WordPress under Trade enquiries.",
		array( 'Reply-To: ' . $data['name'] . ' <' . $data['email'] . '>' )
	);
	update_post_meta( $post_id, '_tg_emailed', $sent ? 'yes' : 'no' );

	wp_safe_redirect( add_query_arg( 'enquiry', 'sent', $back ) . '#apply' );
	exit;
}
add_action( 'admin_post_nopriv_tg_trade_enquiry', 'tg_enquiry_handle' );
add_action( 'admin_post_tg_trade_enquiry', 'tg_enquiry_handle' );

/** Shortcode blocks inside theme templates aren't run by default; run them. */
add_filter( 'render_block_core/shortcode', function ( $content ) {
	return preg_replace( '#<p>\s*</p>#', '', do_shortcode( shortcode_unautop( $content ) ) );
} );
