(() => {
	document.documentElement.classList.add('js');

	const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	if (!reducedMotion) {
		const revealItems = document.querySelectorAll('.rismor-reveal');
		if ('IntersectionObserver' in window) {
			const observer = new IntersectionObserver((entries, instance) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						entry.target.classList.add('is-visible');
						instance.unobserve(entry.target);
					}
				});
			}, { rootMargin: '0px 0px -10% 0px', threshold: 0.08 });

			revealItems.forEach((item) => observer.observe(item));
		} else {
			revealItems.forEach((item) => item.classList.add('is-visible'));
		}
	}

	const header = document.querySelector('.rismor-site-header');
	if (header) {
		const updateHeader = () => header.classList.toggle('is-scrolled', window.scrollY > 24);
		updateHeader();
		window.addEventListener('scroll', updateHeader, { passive: true });
	}
})();
