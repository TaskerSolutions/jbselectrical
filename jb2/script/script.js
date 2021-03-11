//animation for page title on page load
setTimeout(function() { 
		$('.ready').addClass('active');
}, 200);


//show more buttons for opening fields of text
function showMore(i) {
  var btn = document.getElementById(i + '-btn');
  var text = document.querySelector('.' + i + '-text');

  if ($(text).hasClass("closed")) {
    btn.innerHTML = 'Show less';
  } else {
    btn.innerHTML = 'Read more';
  }
  $(text).toggleClass("open closed");
}