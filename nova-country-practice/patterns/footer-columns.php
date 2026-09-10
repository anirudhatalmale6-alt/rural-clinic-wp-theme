<?php
/**
 * Title: Footer columns
 * Slug: nova-country-practice/footer-columns
 * Categories: nova
 * Inserter: no
 */
$d = ncp_details();
$logo = get_theme_file_uri( 'assets/logo-reversed.svg' );
?>
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"2.2rem"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:html -->
			<img class="ncp-flogo" src="<?php echo esc_url( $logo ); ?>" alt="Nova Country Practice" width="531" height="293" style="width:180px;height:auto;margin-bottom:.9rem">
			<p style="font-size:.83rem;margin:0 0 1.1rem">General practice · Cunnamulla, South West Queensland</p>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:html -->
			<h4>Appointments</h4>
			<p style="margin:0"><?php echo ncp_link( 'booking_url', 'Book online' ); ?></p>
			<p style="margin:0"><?php echo ncp_link( 'telehealth_url', 'Telehealth' ); ?></p>
			<p style="margin:0"><a href="/scripts-referrals/">Repeat prescriptions</a></p>
			<p style="margin:0"><a href="/scripts-referrals/">Repeat referrals</a></p>
			<p style="margin:0"><a href="/new-patients/">New patients</a></p>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:html -->
			<h4>Practice</h4>
			<p style="margin:0"><a href="/about/">About</a></p>
			<p style="margin:0"><a href="/about/#team">Our team</a></p>
			<p style="margin:0"><a href="/services/">Services</a></p>
			<p style="margin:0"><a href="/fees/">Fees &amp; billing</a></p>
			<p style="margin:0"><a href="/contact/">Contact</a></p>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:html -->
			<h4>Information</h4>
			<p style="margin:0"><a href="/patient-information/#afterhours">After hours</a></p>
			<p style="margin:0"><a href="/patient-information/#results">Results &amp; recalls</a></p>
			<p style="margin:0"><a href="/patient-information/#privacy">Privacy</a></p>
			<p style="margin:0"><a href="/patient-information/#feedback">Feedback</a></p>
			<p style="margin:0"><a href="/patient-information/#access">Accessibility</a></p>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:html -->
			<h4>Find us</h4>
			<p style="margin:0 0 .5rem;font-size:.83rem"><?php echo ncp_detail( 'address', 'Street address to be supplied' ); ?></p>
			<p style="margin:0 0 .5rem;font-size:.83rem"><?php echo ncp_detail( 'phone', 'Phone to be supplied' ); ?></p>
			<p style="margin:0 0 .5rem;font-size:.83rem"><?php echo ncp_detail( 'afterhours', 'After-hours arrangements to be supplied' ); ?></p>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:html -->
	<div class="ncp-fbot" style="margin-top:2.6rem">
		<p class="ncp-tiny" style="margin:0 0 .45rem">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Nova Country Practice
			&nbsp;·&nbsp; <a href="/patient-information/#privacy">Privacy</a>
			&nbsp;·&nbsp; <a href="/patient-information/#policies">Practice policies</a>
			&nbsp;·&nbsp; <a href="/patient-information/#access">Accessibility</a></p>
		<p class="ncp-tiny" style="margin:0;max-width:70ch">Health information on this site is general in nature and does not replace advice from your doctor.</p>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
