$(document).ready(function() {

	$( '.navicon' ).on( 'click', function (event) {
		$( document.body ).toggleClass( 'show-nav');
		event.preventDefault();
		
	});

}); // end doc ready	