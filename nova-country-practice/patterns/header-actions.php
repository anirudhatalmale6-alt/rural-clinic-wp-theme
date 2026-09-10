<?php
/**
 * Title: Header actions
 * Slug: nova-country-practice/header-actions
 * Categories: nova
 * Inserter: no
 *
 * The two buttons that must be reachable on every page. Destinations come from
 * Settings -> Practice Details; until they are set the button shows a visible
 * placeholder rather than a link that silently goes nowhere.
 */
$d = ncp_details();
$tele = trim( (string) $d['telehealth_url'] );
$book = trim( (string) $d['booking_url'] );
?>
<!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons">
	<?php if ( $tele ) : ?>
		<!-- wp:button {"className":"ncp-btn-ghost"} -->
		<div class="wp-block-button ncp-btn-ghost"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $tele ); ?>">Telehealth</a></div>
		<!-- /wp:button -->
	<?php else : ?>
		<!-- wp:button {"className":"ncp-btn-ghost"} -->
		<div class="wp-block-button ncp-btn-ghost"><a class="wp-block-button__link wp-element-button" href="#telehealth-not-set" title="Telehealth destination to be connected">Telehealth</a></div>
		<!-- /wp:button -->
	<?php endif; ?>

	<?php if ( $book ) : ?>
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $book ); ?>">Book</a></div>
		<!-- /wp:button -->
	<?php else : ?>
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#booking-not-set" title="Booking destination to be connected">Book</a></div>
		<!-- /wp:button -->
	<?php endif; ?>
</div>
<!-- /wp:buttons -->
