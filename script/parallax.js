var ua = window.navigator.userAgent;
var isIE = /MSIE|Trident/.test(ua);
var isIOS = /iPad|iPhone/i.test(ua);

// remove parallax effect (fixed bg) from IE as it's not supported
if ( isIE ) {
  $(".parallax").addClass("device-ios");
  console.log("is IE");
}

// remove parallax effect (fixed bg) from ios 13 devices as it's not supported
if ( isIOS ) {
    $(".parallax").addClass("device-ios");
}