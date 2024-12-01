let burger = document.querySelector('.menu-button'),
	nav    = document.querySelector('.menu-display');

burger.addEventListener('click', function(e){
	this.classList.toggle('is-open');
	nav.classList.toggle('is-open');
});



// /* Onload demo - dirty timeout */
// let clickEvent = new Event('click');

// window.addEventListener('load', function(e) {
// 	burger.dispatchEvent(clickEvent);
	
// 	// setTimeout(function(){
// 	// 	burger.dispatchEvent(clickEvent);
// 	// }, 5500);
// });