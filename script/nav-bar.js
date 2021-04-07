/* collapse bootstrap navbar on click of a link
$('.navbar-nav>li>a').on('click', function(){
  $('.navbar-collapse').collapse('hide');
});*/

var overlayHidden = true;

$(document).ready(function () {
  // animate nav bar burger icon to close icon
  $('.navbar-toggler').on('click', function () {
    $('.animated-icon').toggleClass('open');
    
    var overlay = $('.nav-overlay');
    var navbar = $('.navbar');
    
    if(overlayHidden) {
      // show overlay
      overlayHidden = false;
      overlay.show();
      overlay.animate(
          {opacity: "1"},
          100
        );
      overlay.css("z-index", "20");
      navbar.css("background-color", "#00000000");

      // disable scroll
      $('html, body').css({
        overflow: 'hidden',
      });

    } else {
      // hide overlay
      overlayHidden = true;
      overlay.animate(
        {opacity: "0"},
        200
      );
      setTimeout(() => {
         overlay.css("z-index", "-20")
         navbar.css("background-color", "#1b1b1be8");
      }, 200);
     
      // enable scroll
      $('html, body').css({
        overflow: 'auto',
      });
    }
  });
});