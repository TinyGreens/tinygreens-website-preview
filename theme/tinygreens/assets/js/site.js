// Header border on scroll + gentle fade-in of sections.
(function () {
	var header = document.querySelector('.tg-header');
	if (header) {
		var onScroll = function () { header.classList.toggle('is-scrolled', window.scrollY > 8); };
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	}
	var items = document.querySelectorAll('.tg-reveal');
	if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
		items.forEach(function (el) { el.classList.add('is-in'); });
		return;
	}
	document.documentElement.classList.add('tg-js');
	var io = new IntersectionObserver(function (entries) {
		entries.forEach(function (e) {
			if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); }
		});
	}, { rootMargin: '0px 0px -8% 0px' });
	items.forEach(function (el) { io.observe(el); });
})();
