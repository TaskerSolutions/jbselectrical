// collapse bootstrap navbar on click of a link
$('.navbar-nav>li>a').on('click', function(){
  $('.navbar-collapse').collapse('hide');
});

$(document).ready(function () {
  // animate nav bar burger icon to close icon
  $('.navbar-toggler').on('click', function () {
    $('.animated-icon').toggleClass('open');
  });
});