$(function() {

	// Modernizr JS to detect object-fit functionality because object-fit does not work on Edge browsers
	// If it doesn't, it replaces the img's with background url's
	if ( ! Modernizr.objectfit ) {
	  $('.carousel-inner .item').each(function () {
	    var $container = $(this),
	        imgUrl = $container.find('img').prop('src');
	    if (imgUrl) {
	      $container
	        .css('backgroundImage', 'url(' + imgUrl + ')')
	        .addClass('compat-object-fit');
	    }
	  });
	  $('.carousel-inner .item .pic').remove();
	}

	// Cache the Window object
	var $window = $(window);
	
	// Parallax Backgrounds
		
	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning the object
		
		$(window).scroll(function() {
		
			// Scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!								
			var yPos = (-($window.scrollTop() / $bgobj.data('speed'))) + 170;
			
			// Put together our final background position
			var coords = '50% '+ yPos + 'px';
			
			// Move the background
			$bgobj.css({ backgroundPosition: coords });
			
		}); // end window scroll
	});
	
	//set map options
	var myLatLng = {lat: 37.578120, lng: -122.342642};
	
	var mapOptions = {
		center: myLatLng,
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.SATELLITE
	};

	 //create map
	var map = new google.maps.Map(document.getElementById('location-map'), mapOptions);

	//setting the mapTypeId upon construction
	map.setMapTypeId(google.maps.MapTypeId.ROADMAP);

	//create marker1
	var marker1Options = {
		position: myLatLng,
		map: map,
		title: "The Benz Doctor, 123 California Dr, Burlingame, CA",
		animation: google.maps.Animation.BOUNCE
	}

	var marker1 = new google.maps.Marker(marker1Options);
});