<?php
/**
 * Title: Quick access strip
 * Slug: nova-country-practice/quick-access
 * Categories: nova
 * Description: The eight things patients come to the site for.
 *
 * Lives in the theme rather than in page content so the inline icons are not
 * stripped by WordPress content filtering.
 */
?>
<!-- wp:group {"className":"ncp-quick","style":{"spacing":{"padding":{"top":"2.4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group ncp-quick" style="padding-top:2.4rem">
	<!-- wp:html -->
	<div class="alignwide" style="max-width:1180px;margin-inline:auto">
		<div style="display:grid;grid-template-columns:repeat(4,1fr);border-bottom:1px solid rgba(26,28,23,.06)">
			<div class="wp-block-column" style="border-top:1px solid rgba(26,28,23,.06);padding:1.5rem 1.3rem 1.5rem 0">
				<a class="ncp-q" href="#book">
					<span class="ncp-q-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg></span>
					<span class="ncp-q-t">Book Appointment</span><span class="ncp-q-s">Online, any time</span>
				</a>
			</div>
			<div class="wp-block-column" style="border-top:1px solid rgba(26,28,23,.06);padding:1.5rem 1.3rem">
				<a class="ncp-q" href="#telehealth">
					<span class="ncp-q-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="6" width="13" height="12" rx="2"/><path d="M15.5 11l6-3.5v9l-6-3.5z"/></svg></span>
					<span class="ncp-q-t">Telehealth</span><span class="ncp-q-s">Phone or video consult</span>
				</a>
			</div>
			<div class="wp-block-column" style="border-top:1px solid rgba(26,28,23,.06);padding:1.5rem 1.3rem">
				<a class="ncp-q" href="/scripts-referrals/#scripts">
					<span class="ncp-q-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.6" y="8.6" width="18.8" height="6.8" rx="3.4" transform="rotate(-45 12 12)"/><path d="M9.2 9.2l5.6 5.6"/></svg></span>
					<span class="ncp-q-t">Repeat Scripts</span><span class="ncp-q-s">Request a prescription</span>
				</a>
			</div>
			<div class="wp-block-column" style="border-top:1px solid rgba(26,28,23,.06);padding:1.5rem 1.3rem">
				<a class="ncp-q" href="/scripts-referrals/#referrals">
					<span class="ncp-q-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5M9 13h6M9 17h4"/></svg></span>
					<span class="ncp-q-t">Repeat Referrals</span><span class="ncp-q-s">Request a referral</span>
				</a>
			</div>
			<div class="wp-block-column" style="border-top:1px solid rgba(26,28,23,.06);padding:1.5rem 1.3rem 1.5rem 0">
				<a class="ncp-q" href="/services/">
					<span class="ncp-q-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 3v5a4 4 0 0 0 8 0V3"/><path d="M10 12v2.5a4.5 4.5 0 0 0 9 0V13"/><circle cx="19" cy="11" r="2"/></svg></span>
					<span class="ncp-q-t">Services</span><span class="ncp-q-s">What we care for</span>
				</a>
			</div>
			<div class="wp-block-column" style="border-top:1px solid rgba(26,28,23,.06);padding:1.5rem 1.3rem">
				<a class="ncp-q" href="/fees/">
					<span class="ncp-q-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="5.5" width="19" height="13" rx="2"/><path d="M2.5 10h19M6 15h4"/></svg></span>
					<span class="ncp-q-t">Fees</span><span class="ncp-q-s">What to expect</span>
				</a>
			</div>
			<div class="wp-block-column" style="border-top:1px solid rgba(26,28,23,.06);padding:1.5rem 1.3rem">
				<a class="ncp-q" href="/contact/#hours">
					<span class="ncp-q-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5.2l3.2 2"/></svg></span>
					<span class="ncp-q-t">Opening Hours</span><span class="ncp-q-s">When we're open</span>
				</a>
			</div>
			<div class="wp-block-column" style="border-top:1px solid rgba(26,28,23,.06);padding:1.5rem 1.3rem">
				<a class="ncp-q" href="/contact/">
					<span class="ncp-q-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10.5c0 5.2-8 11-8 11s-8-5.8-8-11a8 8 0 1 1 16 0z"/><circle cx="12" cy="10.3" r="2.7"/></svg></span>
					<span class="ncp-q-t">Contact Us</span><span class="ncp-q-s">Phone, address, map</span>
				</a>
			</div>
		</div>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->

