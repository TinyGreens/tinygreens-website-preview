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
		var sibs = Array.prototype.filter.call(el.parentNode.children, function (c) { return c.classList.contains('tg-reveal'); });
		var i = sibs.indexOf(el);
		if (i > 0) { el.style.setProperty('--tg-delay', Math.min(i, 4) * 80 + 'ms'); }
	});
	var io = new IntersectionObserver(function (entries) {
		entries.forEach(function (e) {
			if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); }
		});
	}, { rootMargin: '0px 0px -8% 0px' });
	items.forEach(function (el) { io.observe(el); });
})();
