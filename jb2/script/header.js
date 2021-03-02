var toggleButton = document.querySelector('.toggle-btn');
var topNav = document.querySelector('.topnav');
var links = document.querySelector('.links');
var navClick = false;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
var didScroll;

toggleButton.addEventListener('click', navMenu);

function navMenu() {
  topNav.classList.toggle('responsive');
  links.classList.toggle('responsive');
}

function closeNavMenu() {
  $('.topnav').removeClass('responsive')
  $('.links').removeClass('responsive')
  navClick = true;
}


var scrollStop = function (callback) {
	// Make sure a valid callback was provided
	if (!callback || typeof callback !== 'function') return;
	// Setup scrolling variable
	var isScrolling;
	// Listen for scroll events
	window.addEventListener('scroll', function (event) {
		// Clear our timeout throughout the scroll
		window.clearTimeout(isScrolling);
		// Set a timeout to run after scrolling ends
		isScrolling = setTimeout(function() {
	  	// Run the callback
			callback();
		}, 66);
	}, false);
};

scrollStop(function () {
    console.log('Scrolling has stopped.');
    var st = $(this).scrollTop();
    if (Math.abs(lastScrollTop - st) <= delta)
    return;
    // If current position > last position AND scrolled past navbar...
    if ((st > lastScrollTop && st > navbarHeight) || (navClick == true)){
      // Scroll Down
      $('header').removeClass('nav-down').addClass('nav-up');
      navClick = false;
    } else {
      // Scroll Up
      // If did not scroll past the document (possible on mac)...
      if(st + $(window).height() < $(document).height()) { 
        $('header').removeClass('nav-up').addClass('nav-down');
      }
    }
    lastScrollTop = st;
});




// trigger nav menu to collapse if screen width exceeds 768px
$(window).bind("resize", function () {
  console.log($(this).width())
  if ($(this).width() > 768) {
      $('.topnav').removeClass('responsive')
      $('.links').removeClass('responsive')
  }
}).trigger('resize');