const acceptBtn = document.querySelector('.accept-btn__link');
const callbackBtn = document.querySelector('.callback-btn');
const infoBar = document.querySelector('.info-bar');

acceptBtn.addEventListener('click', (e) => {
  e.preventDefault();
  callbackBtn.style.transform = 'translateY(84px)'
  infoBar.style.opacity = '0'
});



$('.main-slider').slick({
  // autoplay: true,
  autoplaySpeed: 8000,
  dots: true,
  arrows: true,
  infinite: true,
  speed: 1000,
  slidesToShow: 1,
  adaptiveHeight: true
});