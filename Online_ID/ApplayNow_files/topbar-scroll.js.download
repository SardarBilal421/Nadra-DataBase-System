/*
// When the user scrolls the page, execute myFunction

window.onscroll = function() {setTopBar()};
	
// Get the navbar
var navbar = document.getElementsByClassName("top-sticky")[0];

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function setTopBar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
  
  console.log("called");
}

$(document).ready(function(){
	setTopBar();
});
*/


// When the user scrolls the page, execute myFunction

window.onscroll = function() {setTopBar()};
	
// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
//function setTopBar() {
//
//	// Get the navbar
//	var navbar = document.getElementsByClassName("top-sticky")[0];
//	
//	if(navbar == null || navbar == undefined) {
//		return;
//	}
//
//	// Get the offset position of the navbar
//	var sticky = navbar.offsetTop;
//
//	if (window.pageYOffset >= sticky) {
//		//navbar.classList.add("sticky")
//		$(navbar).addClass("sticky");
//	} else {
//		navbar.classList.remove("sticky");
//	}
//}

function setTopBar() {

	// Get the navbar
	var navbars = document.getElementsByClassName("top-sticky");
	
	for(var i = 0; i < navbars.length; i++) {
		var navbar = navbars[i];
		if(navbar == null || navbar == undefined) {
			return;
		}
	
		// Get the offset position of the navbar
		var sticky = navbar.offsetTop;
	
		if (window.pageYOffset >= sticky) {
			//navbar.classList.add("sticky")
			$(navbar).addClass("sticky");
		} else {
			navbar.classList.remove("sticky");
		}
	}
}

$(document).ready(function(){
	setTopBar();
});

