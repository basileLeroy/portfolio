let burger = document.querySelector('.menu-button'),
	nav    = document.querySelector('.menu-display');

burger.addEventListener('click', function(e){
	this.classList.toggle('is-open');
	nav.classList.toggle('is-open');
});