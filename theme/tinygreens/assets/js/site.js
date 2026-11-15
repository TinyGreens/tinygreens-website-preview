// Header border on scroll + staggered, once-only section reveals.
// The <head> adds the "tg-js" class; without JavaScript everything is simply visible.
(function () {
	var header = document.querySelector('.tg-header');
	if (header) {
		var onScroll = function () { header.classList.toggle('is-scrolled', window.scrollY > 8); };
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	}
	var items = Array.prototype.slice.call(document.querySelectorAll('.tg-reveal'));
	var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	if (!('IntersectionObserver' in window) || reduce) {
		items.forEach(function (el) { el.classList.add('is-in'); });
		return;
	}
	// Stagger siblings (cards, steps) by 80ms each, capped so nothing waits long.
	items.forEach(function (el) {
		var i;
		if (el.parentNode.tagName === 'LI') {
			// Product grid: stagger across each row of up to 4.
			i = Array.prototype.indexOf.call(el.parentNode.parentNode.children, el.parentNode) % 4;
		} else {
			var sibs = Array.prototype.filter.call(el.parentNode.children, function (c) { return c.classList.contains('tg-reveal'); });
			i = sibs.indexOf(el);
		}
		if (i > 0) { el.style.setProperty('--tg-delay', Math.min(i, 4) * 80 + 'ms'); }
	});
	var io = new IntersectionObserver(function (entries) {
		entries.forEach(function (e) {
			if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); }
		});
	}, { rootMargin: '0px 0px -8% 0px' });
	items.forEach(function (el) { io.observe(el); });
})();

// Our Story: highlight the chapter being read and fill the progress line.
(function () {
	var nav = document.querySelector('.tg-story-nav');
	if (!nav || !('IntersectionObserver' in window)) return;
	var links = Array.prototype.slice.call(nav.querySelectorAll('a'));
	var list = nav.querySelector('ol');
	var setActive = function (id) {
		links.forEach(function (a, i) {
			var on = a.getAttribute('href') === '#' + id;
			a.classList.toggle('is-active', on);
			if (on) {
				a.setAttribute('aria-current', 'true');
				list.style.setProperty('--tg-progress', ((i + 1) / links.length) * 100 + '%');
			} else {
				a.removeAttribute('aria-current');
			}
		});
	};
	var io = new IntersectionObserver(function (entries) {
		entries.forEach(function (e) { if (e.isIntersecting) setActive(e.target.id); });
	}, { rootMargin: '-45% 0px -50% 0px' });
	links.forEach(function (a) {
		var el = document.getElementById(a.getAttribute('href').slice(1));
		if (el) io.observe(el);
	});
})();
