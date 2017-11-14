var boilerplate = (function () { // functions run where approproate without onlad because contained in IIFE function
	"use strict";
	
	return {
		Initialise: function () {

			boilerplate.Menus();

		},

		Menus: function () {

			$( '.main-nav ul' ).parent().prepend( '<button class="menu-toggle"></button>' );
				// onload add button element (with menu-toggle class) to sub-nav's parent list element in this case list with id of li-2 

			$( document.body ).on( 'click', '.menu-toggle', function () {
				$( this ).parent().toggleClass( 'menu-open' );
				// on click menu-toggle apply menu-open to menu-toggle's parent
			});

			$( '.navicon' ).on( 'click', function (event) {
				$( document.body ).toggleClass( 'show-nav' );
				event.preventDefault();
				// on click navicon apply the main-nav-open element to the body class. target with main-nav-open & in scss
			});

		}

	};
}());

$( boilerplate.Initialise );