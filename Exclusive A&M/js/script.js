const header = document.querySelector('.header');
const headerAfterSend = document.querySelector('.header-after-send');
const headerSendButton = document.querySelector('#header__send-button');
const inputName = document.querySelector('#inputName');
const inputPhone = document.querySelector('#inputPhone');
const mobileMenu = document.querySelector('.mobile-menu');
const burgerButton = document.querySelector('.burger__button');
const burgerButtonClose = document.querySelector('.burger__button-close');


headerSendButton.onclick = function (e) {

	event.preventDefault();
	if (inputName.value.length > 0 && inputPhone.value.length > 0) {
		header.style.display = 'none';
		headerAfterSend.style.display = 'block';
	} else {
		alert('Please, enter Your name and Your phone');
	}

};

document.querySelector('.burger__button').addEventListener('click', function () {
	mobileMenu.classList.toggle('active');
	burgerButton.classList.toggle('hide');
	burgerButtonClose.classList.toggle('active');

});

// document.burgerButton.onclick = function () {
// 	document.querySelector('.mobileMenu').toggleClass('active');
// };



