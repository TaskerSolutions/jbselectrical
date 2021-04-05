// collapse bootstrap navbar on click of a link
$('.navbar-nav>li>a').on('click', function(){
  $('.navbar-collapse').collapse('hide');
});

// animate nav bar burger icon to close icon
$(document).ready(function () {
  $('.navbar-toggler').on('click', function () {
    $('.animated-icon').toggleClass('open');
  });
});