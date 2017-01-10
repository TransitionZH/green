/**
 * Transition Tools - JavaScripts
 */

function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$(document).ready(function(){
    /* create leaflet map object */
    if ($('#initiatives-map').length > 0) {
        var map = L.map('initiatives-map');
        var initiativeUuid = getUrlParameter('tx_transitiontools_initiatives[initiative]');

        function resizeMap() {
            var computedHeight = $(window).height() - $('.navbar').height() - $('.footer').height(); // footer & navbar are both 50px in height
            $('#initiatives-map').height(computedHeight);
        }

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
                $.each( data, function(initiativeKey, initiative) {
                    $.each(initiative.venues, function(venueKey, venue) {

                        // Set marker and infobox
                        var marker = L.marker(
                            [venue.locLatitude, venue.locLongitude], 
                            {icon: L.AwesomeMarkers.icon({icon: 'coffee', markerColor: 'red'})}
                        )
                        .bindPopup(initiative.infobox)
                        .addTo(map);

                        // Open popup (infobox) if marker matches initiative passed in url
                        // If an initiative has multiple venues, all popups are displayed
                        if (initiativeUuid && initiativeKey == initiativeUuid) {
                            marker.openPopup();
                        }

                    });
                });
            },

            error: function(jqXHR, textStatus) {
                console.log("Request failed: " + textStatus);
                console.log("Source: " + $('#initiatives-map').data('source'));
            }
        });
    }
});
