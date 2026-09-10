/**
 * Nova Country Practice — small progressive enhancements only.
 * No tracking, no external calls, no dependencies.
 */
(function () {
	'use strict';

	// Patient Information: open the section a #hash points at, and an "open all" toggle.
	function openFromHash() {
		if (!location.hash) return;
		var el = document.querySelector(location.hash);
		if (el && el.tagName === 'DETAILS') {
			el.open = true;
			el.scrollIntoView({ block: 'center', behavior: 'smooth' });
		}
	}
	openFromHash();
	window.addEventListener('hashchange', openFromHash);

	var toggle = document.querySelector('[data-ncp-expand-all]');
	if (toggle) {
		toggle.addEventListener('click', function () {
			var all = document.querySelectorAll('details.ncp-acc');
			var anyClosed = Array.prototype.some.call(all, function (d) { return !d.open; });
			Array.prototype.forEach.call(all, function (d) { d.open = anyClosed; });
			toggle.textContent = anyClosed ? 'Close all' : 'Open all';
		});
	}

	// Any link whose destination has not been connected yet says so out loud
	// rather than silently doing nothing.
	document.querySelectorAll('a[href$="-not-set"], a[href="#book"], a[href="#telehealth"], a[href="#register"]').forEach(function (a) {
		a.addEventListener('click', function (e) {
			e.preventDefault();
			window.alert(
				(a.textContent || 'This link').trim() +
				' — destination not connected yet.\n\nSet it under Settings → Practice Details once the AutoMed account is live.'
			);
		});
	});
})();
