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
	if(window.innerWidth > 600) {
		menulist.hidden = false;
	}
}, false);

//FUNCTION
function menu(evt) {
	console.log('heyyyy');
	console.log(menulist.hidden);
	//menulist.classList.toggle('visually-hidden');
	//rowNav.classList.toggle('full-length');
	//rowNav.classList.toggle('row-nav');
	if(menulist.hidden) {

		menulist.hidden = false;
		menulist.classList.add('full-length');
	} else {
		menulist.hidden = true;
		menulist.classList.remove('full-length');
	}
}

// function bringback(evt) {
// 		console.log('hi');
// 	if(rowNav.hidden) {
// 		rowNav.hidden = false;
// 	} else {
// 		rowNav.hidden = true;
// 	}
// }

if(window.innerWidth > 600) {
		menulist.hidden = false;
	}
	else {
		menulist.hidden = true;
	}