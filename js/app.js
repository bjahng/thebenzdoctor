$(function() {
	
	//set map options
	var myLatLng = {lat: 37.578265, lng: -122.342668};
	var mapOptions = {
		center: myLatLng,
		zoom: 15,
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