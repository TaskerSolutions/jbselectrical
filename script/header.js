//hide header on scroll
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
var didScroll;

// on scroll, let the interval function know the user has scrolled
$(window).scroll(function(event){
  didScroll = true;
});

// run hasScrolled() and reset didScroll status
setInterval(function() {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);
//The interval checks every 250ms if didScroll has changed.
//If it has, it runs the function and resets didScroll to false.
//It’s much easier for the browser to set a boolean variable than to
//run through a whole set of functions for every pixel scrolled.

function hasScrolled() {
  // do stuff here...
  var st = $(this).scrollTop();
  if (Math.abs(lastScrollTop - st) <= delta)
  return;
  // If current position > last position AND scrolled past navbar...
  if (st > lastScrollTop && st > navbarHeight){
    // Scroll Down
    $('.header-container').removeClass('nav-down').addClass('nav-up');
    $('.logo').height("36px");
  } else {
    // Scroll Up
    // If did not scroll past the document (possible on mac)...
    if(st + $(window).height() < $(document).height()) { 
      $('.header-container').removeClass('nav-up').addClass('nav-down');
      $('.logo').height("40px");
    }
  }
  lastScrollTop = st;
}