/**
 * Transition Tools - JavaScripts
 */
function resizeMap() {
    var computedHeight = $(window).height() - 100; // footer & navbar are both 50px in height
    $('#initiatives-map').height(computedHeight);
}

$(document).ready(function(){
    /* create leaflet map object */
    var map = L.map('initiatives-map');

    /* set map view to zürich */
    map.setView([47.38, 8.60], 11);

    /* load tiles from open street map */
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Maps data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
        maxZoom: 18
    }).addTo(map);


    // Set the map's height on first pageload
    resizeMap();
    map.invalidateSize();

    // And resize map also when changing the window size
    $(window).resize(function() {
        resizeMap();
    });

    // Get initiatives data and set markers
    $.ajax({
        url: $('#initiatives-map').data('source'),
        dataType: "json",

        success: function (data) {
            // Loop initiatives and set marker for each venue
            $.each( data, function( key, initiative ) {
                $.each(initiative.venues, function( key, venue) {
                    // Set marker and infobox
                    var marker = L.marker([venue.locLatitude, venue.locLongitude], {icon: L.AwesomeMarkers.icon({icon: 'coffee',markerColor: 'red'})}).addTo(map);
                    marker.bindPopup(initiative.infobox);
                });
            });
        },

        error: function(jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
            console.log("Source: " + $('#initiatives-map').data('source'));
        }
    });

});
