
// Add your nice, nice JavaScript here
// And minify! Time to check out Grunt or Gulp - what else to you have to do this weekend?

$(document).ready( function() {

	// Put some nice JavaScript in here.
	var $nav_main = $('#nav-main'),
		$nav_link = $('#nav-link');

	$nav_link.click( function() {
		console.log('clicked!');
		$nav_main.toggleClass('active');
		$nav_link.toggleClass('active');
		return false;
	});

});