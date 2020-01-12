// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 8,

        scrollwheel: true,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(50.8006353, 4.0378097), // België
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('google-map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(51.2862986, 4.4872748),
        map: map,
        title: 'Partner',
        icon: 'assets/images/map-marker-icon.png'
    });
    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(51.0890576, 4.0336239),
        map: map,
        title: 'Partner',
        icon: 'assets/images/map-marker-icon.png'
    });
}