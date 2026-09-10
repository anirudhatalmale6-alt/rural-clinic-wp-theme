<?php
/**
 * Title: Home page
 * Slug: nova-country-practice/home
 * Categories: nova
 * Description: The full home page — hero, quick access, new patients, services, hours and contact.
 *
 * Dynamic practice details are shortcodes, not baked-in values, so changing a
 * phone number in Settings -> Practice Details changes it everywhere at once.
 */
?>
<!-- wp:group {"className":"ncp-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group ncp-hero">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"padding":{"top":"4.4rem","bottom":"4.8rem"},"blockGap":{"left":"3.6rem"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:4.4rem;padding-bottom:4.8rem">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"ncp-eyebrow"} -->
			<p class="ncp-eyebrow">Cunnamulla · South West Queensland</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading">Modern medicine.<br><em>Country care.</em></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"ncp-lede"} -->
			<p class="ncp-lede">General practice for Cunnamulla and the district — with booking, telehealth, scripts and referrals a tap away.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"ncp-btn-big","style":{"spacing":{"margin":{"top":"1.9rem"}}}} -->
			<div class="wp-block-buttons ncp-btn-big" style="margin-top:1.9rem">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#book">Book an Appointment</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"ncp-btn-ghost"} -->
				<div class="wp-block-button ncp-btn-ghost"><a class="wp-block-button__link wp-element-button" href="#telehealth">Telehealth</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"className":"ncp-tiny","style":{"spacing":{"margin":{"top":"1.3rem"}}}} -->
			<p class="ncp-tiny" style="margin-top:1.3rem">New to the practice? <a class="ncp-tlink" href="/new-patients/">Register before your first visit →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:html -->
			<div class="ncp-imgph">Practice photograph<span>to be supplied</span></div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"nova-country-practice/quick-access"} /-->

<!-- wp:group {"className":"ncp-dark","style":{"spacing":{"padding":{"top":"3.2rem","bottom":"3.2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ncp-dark" style="padding-top:3.2rem;padding-bottom:3.2rem">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"width":"65%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%">
			<!-- wp:paragraph {"className":"ncp-kicker"} -->
			<p class="ncp-kicker">New patients</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading -->
			<h2 class="wp-block-heading">Register online before your first appointment.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Fill in your details, history and Medicare information ahead of time, so your first appointment is spent with the doctor rather than at the front desk.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:buttons {"className":"ncp-btn-big"} -->
			<div class="wp-block-buttons ncp-btn-big">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#register">Register as a new patient</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1rem"}}}} -->
			<p style="margin-top:1rem"><a class="ncp-tlink" href="/new-patients/">What to expect on your first visit →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"3.6rem","bottom":"3.6rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:3.6rem;padding-bottom:3.6rem">
	<!-- wp:paragraph {"align":"center","className":"ncp-kicker"} -->
	<p class="has-text-align-center ncp-kicker">The practice</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","className":"ncp-statement"} -->
	<p class="has-text-align-center ncp-statement">Nova Country Practice is a new general practice serving Cunnamulla and the surrounding district.</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","className":"ncp-muted"} -->
	<p class="has-text-align-center ncp-muted"><span class="ncp-ph">One or two sentences on who you are and how you like to work — to be supplied</span></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><a class="ncp-tlink" href="/about/">About the clinic and our team →</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}},"color":{"background":"#f4ede5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f4ede5;padding-top:4rem;padding-bottom:4rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"ncp-kicker"} -->
			<p class="ncp-kicker">Services</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading -->
			<h2 class="wp-block-heading">What we care for.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph -->
		<p><a class="ncp-tlink" href="/services/">All services →</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="alignwide ncp-srows" style="max-width:1180px;margin:2rem auto 0">
		<a class="ncp-srow" href="/services/"><span class="ncp-srow-n">01</span><span class="ncp-srow-b"><span class="ncp-srow-t">General practice</span><span class="ncp-srow-d">Everyday medical care for all ages — acute illness, injuries and ongoing concerns.</span></span><span class="ncp-srow-a" aria-hidden="true">→</span></a>
		<a class="ncp-srow" href="/services/"><span class="ncp-srow-n">02</span><span class="ncp-srow-b"><span class="ncp-srow-t">Women's health</span><span class="ncp-srow-d">Cervical screening, contraception, family planning, menopause and general women's health.</span></span><span class="ncp-srow-a" aria-hidden="true">→</span></a>
		<a class="ncp-srow" href="/services/"><span class="ncp-srow-n">03</span><span class="ncp-srow-b"><span class="ncp-srow-t">Children's health</span><span class="ncp-srow-d">Childhood illness, development and growth checks, and immunisations.</span></span><span class="ncp-srow-a" aria-hidden="true">→</span></a>
		<a class="ncp-srow" href="/services/"><span class="ncp-srow-n">04</span><span class="ncp-srow-b"><span class="ncp-srow-t">Chronic disease management</span><span class="ncp-srow-d">Structured ongoing care and care plans, coordinated with your other providers.</span></span><span class="ncp-srow-a" aria-hidden="true">→</span></a>
		<a class="ncp-srow" href="/services/"><span class="ncp-srow-n">05</span><span class="ncp-srow-b"><span class="ncp-srow-t">Preventative health</span><span class="ncp-srow-d">Health checks, screening and risk assessment aimed at finding things early.</span></span><span class="ncp-srow-a" aria-hidden="true">→</span></a>
		<a class="ncp-srow" href="/services/"><span class="ncp-srow-n">06</span><span class="ncp-srow-b"><span class="ncp-srow-t">Skin checks &amp; procedures</span><span class="ncp-srow-d">Skin examinations and minor in-clinic procedures.</span></span><span class="ncp-srow-a" aria-hidden="true">→</span></a>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:4rem;padding-bottom:4rem">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"2.4rem"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"28%"} -->
		<div class="wp-block-column" style="flex-basis:28%">
			<!-- wp:heading {"level":3,"anchor":"hours"} -->
			<h3 class="wp-block-heading" id="hours">Opening hours</h3>
			<!-- /wp:heading -->
			<!-- wp:shortcode -->
			[ncp_hours]
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Contact</h3>
			<!-- /wp:heading -->
			<!-- wp:html -->
			<dl class="ncp-dl">
				<dt>Phone</dt><dd>[ncp_detail key="phone"]</dd>
				<dt>Address</dt><dd>[ncp_detail key="address"]</dd>
				<dt>After hours</dt><dd>[ncp_detail key="afterhours" label="to be supplied"]</dd>
			</dl>
			<p style="margin:0"><a class="ncp-tlink" href="/contact/">Contact page →</a></p>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:html -->
			<div class="ncp-mapph">Google Map<span>live embed once the address is confirmed</span></div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ncp-urgent","layout":{"type":"constrained"}} -->
<div class="wp-block-group ncp-urgent">
	<!-- wp:html -->
	<div class="alignwide" style="max-width:1180px;margin-inline:auto;display:flex;justify-content:space-between;align-items:center;gap:1.5rem;flex-wrap:wrap">
		<p><strong>Unwell after hours?</strong> [ncp_detail key="afterhours" label="After-hours arrangements to be supplied"] · 13 HEALTH 13 43 25 84 · In an emergency call <strong class="red">000</strong>.</p>
		<a class="ncp-tlink" href="/patient-information/#afterhours">After-hours &amp; emergency information →</a>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"4.2rem","bottom":"4.2rem"}},"color":{"background":"#f8efe9"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f8efe9;padding-top:4.2rem;padding-bottom:4.2rem">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center">Ready when you are.</h2>
	<!-- /wp:heading -->

	<!-- wp:buttons {"className":"ncp-btn-big","layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons ncp-btn-big">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#book">Book an Appointment</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"ncp-btn-ghost"} -->
		<div class="wp-block-button ncp-btn-ghost"><a class="wp-block-button__link wp-element-button" href="#telehealth">Telehealth</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
