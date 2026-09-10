<?php
/**
 * Nova Country Practice — theme setup.
 *
 * Deliberately small. Everything visual lives in theme.json and style.css so the
 * site stays editable in the block editor and portable to another developer.
 *
 * @package nova-country-practice
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NCP_VERSION', '1.0.0' );

/**
 * Enqueue the theme stylesheet. Nothing is loaded from an external host —
 * the fonts are served from the theme's own assets folder via theme.json.
 */
function ncp_enqueue_assets() {
	wp_enqueue_style(
		'nova-country-practice',
		get_stylesheet_uri(),
		array(),
		NCP_VERSION
	);

	wp_enqueue_script(
		'nova-country-practice',
		get_theme_file_uri( 'assets/site.js' ),
		array(),
		NCP_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ncp_enqueue_assets' );

/**
 * Load the same stylesheet inside the block editor, so what the practice sees
 * while editing matches what a patient sees.
 */
function ncp_editor_assets() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'ncp_editor_assets' );

/**
 * Theme supports.
 */
function ncp_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 293,
		'width'       => 531,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	register_block_pattern_category( 'nova', array( 'label' => __( 'Nova Country Practice', 'nova-country-practice' ) ) );
}
add_action( 'after_setup_theme', 'ncp_setup' );

/**
 * Practice details live in one place.
 *
 * Every value here is a placeholder until the practice supplies the real one.
 * Nothing in this list is invented: a blank stays visibly blank on the page
 * rather than being filled with a plausible guess, because a wrong phone number
 * or a wrong after-hours arrangement on a medical site can do real harm.
 *
 * Edit these under Settings → Practice Details in the admin.
 */
function ncp_details() {
	$defaults = array(
		'phone'        => '',
		'address'      => '',
		'postal'       => '',
		'email'        => '',
		'abn'          => '',
		'booking_url'  => '',
		'telehealth_url' => '',
		'scripts_url'  => '',
		'referrals_url' => '',
		'register_url' => '',
		'facebook_url' => '',
		'instagram_url' => '',
		'afterhours'   => '',
		'hours'        => array(
			'Monday' => '', 'Tuesday' => '', 'Wednesday' => '', 'Thursday' => '',
			'Friday' => '', 'Saturday' => '', 'Sunday' => '',
		),
	);

	return wp_parse_args( get_option( 'ncp_details', array() ), $defaults );
}

/**
 * Render a practice detail, or a visible labelled placeholder if it is not set yet.
 *
 * @param string $key   Key from ncp_details().
 * @param string $label What to show while the value is missing.
 * @return string Escaped HTML.
 */
function ncp_detail( $key, $label = 'to be supplied' ) {
	$details = ncp_details();
	$value   = isset( $details[ $key ] ) ? trim( (string) $details[ $key ] ) : '';

	if ( '' === $value ) {
		return '<span class="ncp-ph">' . esc_html( $label ) . '</span>';
	}

	return esc_html( $value );
}

/**
 * A link that falls back to a visible placeholder rather than a dead "#".
 *
 * @param string $key   Key from ncp_details().
 * @param string $text  Link text.
 * @param string $class Extra classes.
 * @return string Escaped HTML.
 */
function ncp_link( $key, $text, $class = '' ) {
	$details = ncp_details();
	$url     = isset( $details[ $key ] ) ? trim( (string) $details[ $key ] ) : '';

	if ( '' === $url ) {
		return '<span class="ncp-ph">' . esc_html( $text ) . ' — destination to be connected</span>';
	}

	return sprintf(
		'<a class="%1$s" href="%2$s" rel="noopener">%3$s</a>',
		esc_attr( $class ),
		esc_url( $url ),
		esc_html( $text )
	);
}

/**
 * Shortcodes so the practice can drop a detail into any block without editing code.
 * Usage: [ncp_detail key="phone"] or [ncp_hours]
 */
function ncp_detail_shortcode( $atts ) {
	$atts = shortcode_atts( array( 'key' => 'phone', 'label' => 'to be supplied' ), $atts );
	return ncp_detail( $atts['key'], $atts['label'] );
}
add_shortcode( 'ncp_detail', 'ncp_detail_shortcode' );

function ncp_hours_shortcode() {
	$details = ncp_details();
	$rows    = '';

	foreach ( $details['hours'] as $day => $value ) {
		$value = trim( (string) $value );
		$cell  = '' === $value ? '<span class="ncp-ph">hours</span>' : esc_html( $value );
		$rows .= '<tr><th scope="row">' . esc_html( $day ) . '</th><td>' . $cell . '</td></tr>';
	}

	return '<table class="ncp-hours"><caption class="screen-reader-text">' .
		esc_html__( 'Opening hours', 'nova-country-practice' ) .
		'</caption><tbody>' . $rows . '</tbody></table>';
}
add_shortcode( 'ncp_hours', 'ncp_hours_shortcode' );

/**
 * Settings → Practice Details.
 *
 * One screen holding every fact that appears in more than one place, so the
 * practice changes a phone number once rather than hunting through pages.
 */
function ncp_settings_page() {
	add_options_page(
		__( 'Practice Details', 'nova-country-practice' ),
		__( 'Practice Details', 'nova-country-practice' ),
		'manage_options',
		'ncp-details',
		'ncp_render_settings_page'
	);
}
add_action( 'admin_menu', 'ncp_settings_page' );

function ncp_register_settings() {
	register_setting( 'ncp_details_group', 'ncp_details', array(
		'type'              => 'array',
		'sanitize_callback' => 'ncp_sanitize_details',
		'default'           => array(),
	) );
}
add_action( 'admin_init', 'ncp_register_settings' );

function ncp_sanitize_details( $input ) {
	$clean = array();
	$urls  = array( 'booking_url', 'telehealth_url', 'scripts_url', 'referrals_url', 'register_url', 'facebook_url', 'instagram_url' );

	foreach ( (array) $input as $key => $value ) {
		if ( 'hours' === $key ) {
			foreach ( (array) $value as $day => $hours ) {
				$clean['hours'][ sanitize_text_field( $day ) ] = sanitize_text_field( $hours );
			}
			continue;
		}
		if ( in_array( $key, $urls, true ) ) {
			$clean[ $key ] = esc_url_raw( trim( (string) $value ) );
			continue;
		}
		$clean[ $key ] = sanitize_text_field( $value );
	}

	return $clean;
}

function ncp_render_settings_page() {
	$d = ncp_details();

	$fields = array(
		'phone'          => __( 'Phone', 'nova-country-practice' ),
		'address'        => __( 'Street address', 'nova-country-practice' ),
		'postal'         => __( 'Postal address', 'nova-country-practice' ),
		'email'          => __( 'Practice email (general enquiries only)', 'nova-country-practice' ),
		'afterhours'     => __( 'After-hours arrangements', 'nova-country-practice' ),
		'booking_url'    => __( 'Book appointment link', 'nova-country-practice' ),
		'telehealth_url' => __( 'Telehealth link', 'nova-country-practice' ),
		'scripts_url'    => __( 'Repeat prescription link', 'nova-country-practice' ),
		'referrals_url'  => __( 'Repeat referral link', 'nova-country-practice' ),
		'register_url'   => __( 'New patient registration link', 'nova-country-practice' ),
		'facebook_url'   => __( 'Facebook page', 'nova-country-practice' ),
		'instagram_url'  => __( 'Instagram page', 'nova-country-practice' ),
	);
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Practice Details', 'nova-country-practice' ); ?></h1>
		<p><?php esc_html_e( 'These appear across the whole site. Anything left blank shows on the page as a visible placeholder rather than being guessed at.', 'nova-country-practice' ); ?></p>
		<form method="post" action="options.php">
			<?php settings_fields( 'ncp_details_group' ); ?>
			<table class="form-table" role="presentation">
				<?php foreach ( $fields as $key => $label ) : ?>
					<tr>
						<th scope="row"><label for="ncp-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $label ); ?></label></th>
						<td><input class="regular-text" type="text" id="ncp-<?php echo esc_attr( $key ); ?>"
							name="ncp_details[<?php echo esc_attr( $key ); ?>]"
							value="<?php echo esc_attr( $d[ $key ] ); ?>"></td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<th scope="row"><?php esc_html_e( 'Opening hours', 'nova-country-practice' ); ?></th>
					<td>
						<?php foreach ( $d['hours'] as $day => $value ) : ?>
							<p>
								<label style="display:inline-block;width:7em"><?php echo esc_html( $day ); ?></label>
								<input class="regular-text" type="text"
									name="ncp_details[hours][<?php echo esc_attr( $day ); ?>]"
									value="<?php echo esc_attr( $value ); ?>"
									placeholder="<?php esc_attr_e( 'e.g. 8:30am – 5:30pm, or Closed', 'nova-country-practice' ); ?>">
							</p>
						<?php endforeach; ?>
					</td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}
