
const backTopBtn = document.querySelector('.back-top');

window.addEventListener('scroll', () => {

	if (window.scrollY > 400) {
		backTopBtn.style.opacity = '1';
	} else {
		backTopBtn.style.opacity = '0';
	};

});

backTopBtn.addEventListener('click', (e) => {

	e.preventDefault();

	window.scrollTo({
		top: 0,
		behavior: "smooth"
	});

});