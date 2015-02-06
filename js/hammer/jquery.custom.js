jQuery(document).ready(function($) {
 
    function runGesture() {
       // Set our gesture container variable
var gestureContainer;
 
// Set our variable to be 'hammered'
var hammeredGesture;

// Assign our container to the ID
gestureContainer = $('body.gesture');
 
// Hammer our Gesture
hammeredGesture = $(gestureContainer).hammer();

// Bind our Hammer to the event we want to run
hammeredGesture.bind("drag", function ( evnt ) {
 
    // Set up a URL variable and set it to false
var url = false;
 
/* 
Test if the direction we are swipeing is right 
if TRUE then get the span with class 'nav-next'
and pass the href link to the URL
*/
 
if ( evnt.direction == 'right' ) {
    url = jQuery('.nav-next a').attr('href');
}
 
/*
Same as the right key but change the value
of the URL to get the previous link
*/
 
if ( evnt.direction == 'left' ) {
    url = jQuery('.nav-previous a').attr('href');
}
 
/*
If the URL has a value then change the get
the window and pass the URL location to it
*/
 
if ( url ) {
    window.location = url;
}
 
});
    }
 // Only run the gestures on an iPhone or mobile device
if ( $('.gesture').hasClass( 'iphone' ) ) {
    runGesture();
}
});