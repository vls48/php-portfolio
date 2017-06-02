//GLOBAL VARIABLES 
var iconObj = document.querySelector('.ham-menu');
var menulist = document.getElementById('nav-list');
var rowNav = document.querySelector('.row-nav');
var w = window.innerWidth;
var h = window.innerHeight;

//LISTENER
iconObj.addEventListener('click', function(evt) {
	menu(evt, '.ham-menu');
}, false);

window.addEventListener("resize", function(evt) {
	bringback(evt, '.ham-menu');
}, false);

//FUNCTION
function menu(evt) {
	console.log('heyyyy');
	menulist.classList.toggle('visually-hidden');
	rowNav.classList.toggle('full-length');
	rowNav.classList.toggle('row-nav');
}

function bringback(evt) {
		console.log('hi');



}