var rellax = new Rellax('.rellax');

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function openNavMenu() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


setTimeout(function() { 
		$('.ready').addClass('active');
}, 200);



function showMore(i) {
  var btn = document.getElementById(i + '-btn');
  var text = document.getElementById(i + '-text');
  var div = document.getElementById(i + '-div');
  if (text.style.display === 'none') {
    //text.style.display = 'block';
    //div.scrollIntoView();
    $(text).slideToggle(200);
    btn.innerHTML = 'Show less';
  } else {
    //text.style.display = 'none';
    $(text).slideToggle(-200);
    btn.innerHTML = 'Show more';
  }
}