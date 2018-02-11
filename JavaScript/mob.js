$( document ).ready(function() {

$( ".cross" ).hide();
$( ".menum" ).hide();
$( ".hamburger" ).click(function() {
$( ".menum" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".menum" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});

});