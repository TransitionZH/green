/**
 * Transition Tools - JavaScripts
 */

function resizeMap() {
	var computedHeight = $(window).height() - 100; // footer & navbar are both 50px in height
	$('#initiatives-map').height(computedHeight);
}

$(document).ready(function() {
	// Set the map's height on first pageload
	resizeMap();

	// And resize map also when changing the window size
	$(window).resize(function() {
		resizeMap();
	});
});


/*
 Map
*/
if ($('#initiatives-map').length > 0) {
    /* create leaflet map object */
    var mymap = L.map('initiatives-map').setView([47.38, 8.60], 11);

    /* load tiles from open street map */
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Maps data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
        maxZoom: 18
    }).addTo(mymap);

    /* create a random marker */
    var marker = L.marker([47.38, 8.60], {icon: L.AwesomeMarkers.icon({icon: 'coffee',markerColor: 'red'})}).addTo(mymap);
    var marker = L.marker([47.38, 8.70], {icon: L.AwesomeMarkers.icon({icon: 'coffee',markerColor: 'blue'})}).addTo(mymap);

    /* add a random popup to the marker */
    marker.bindPopup('<div class="media organization"><a class="media-left" href=""><img class="media-object" src="http://www.placehold.it/100x100" alt="Generic placeholder image"></a><div class="media-body" style="color:#000"><h4 class="media-heading">Beispielorganisation</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.<div class="clearfix"></div><div class="organization-links"><a href="#">Website</a></div></div></div>');


}
