var boilerplate = (function () { 
	"use strict";
	
	return {
		Initialise: function () {

			boilerplate.Menus();
			boilerplate.Slider.Init();
			boilerplate.map.Init();

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
		},

		map:  {

			Init: function() {
				var map = document.querySelector('.map');
				if (map) {
					var mapScript = document.createElement('script');
					mapScript.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=boilerplate.map.Load&key=AIzaSyDhRv0umy_C6q9jtktoGTWm-qrWFeHdJMQ';
					document.body.appendChild(mapScript); 
				}
			},

			Load: function() {

				var element = document.getElementById( 'map' ),
					center = new google.maps.LatLng( element.dataset['lat'], element.dataset['lng'] ),
					mapOptions = {
						zoom: 13,
						center: center,
						minZoom: 6,
						maxZoom: 18,
						mapTypeControl: false,
						scrollwheel: false
					},
					map = new google.maps.Map( element, mapOptions ),
					marker = new google.maps.Marker(
						{
							position: center,
							map: map,
							visible: true,
						}
					),
					styles = [{elementType:"geometry",stylers:[{color:"#f5f5f5"}]},{elementType:"labels.icon",stylers:[{visibility:"off"}]},{elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{elementType:"labels.text.stroke",stylers:[{color:"#f5f5f5"}]},{featureType:"administrative.land_parcel",elementType:"labels.text.fill",stylers:[{color:"#bdbdbd"}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#eeeeee"}]},{featureType:"poi",elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#e5e5e5"}]},{featureType:"poi.park",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]},{featureType:"road",elementType:"geometry",stylers:[{color:"#ffffff"}]},{featureType:"road.arterial",stylers:[{visibility:"off"}]},{featureType:"road.arterial",elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{featureType:"road.highway",elementType:"geometry",stylers:[{color:"#dadada"}]},{featureType:"road.highway",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"road.highway",elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{featureType:"road.local",stylers:[{visibility:"off"}]},{featureType:"road.local",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]},{featureType:"transit.line",elementType:"geometry",stylers:[{color:"#e5e5e5"}]},{featureType:"transit.station",elementType:"geometry",stylers:[{color:"#eeeeee"}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#c9c9c9"}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]}];
				
				map.setOptions({
					styles: styles
				});
			}
		}
	};

}());

$( boilerplate.Initialise );