var boilerplate = (function () { 
	"use strict";
	
	return {
		Initialise: function () {

			boilerplate.Menus();
			boilerplate.Slider.Init();

		},

		Menus: function () {

			$( '.main-nav ul' ).parent().prepend( '<button class="menu-toggle"></button>' );
				

			$( document.body ).on( 'click', '.menu-toggle', function () {
				$( this ).parent().toggleClass( 'menu-open' );
				
			});

			$( '.navicon' ).on( 'click', function (event) {
				$( document.body ).toggleClass( 'show-nav' );
				event.preventDefault();
				
			});

		},

		Slider: { 
			
			Init: function() {
				var $el = $('.slider');
				if($el.length === 0) return;
				$el.slick({
					// add controls here	
				});
			}
		}

	};
}());

$( boilerplate.Initialise );