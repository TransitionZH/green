/**
 * Transition Tools - JavaScripts
 */

$(document).ready(function() {
    console.log('JS is working');
});

if ($('#mapid').length > 0) {
    var mymap = L.map('mapid').setView([47.3773697, -8.3966319], 11);

    L.tileLayer('http://a.tile.openstreetmap.org/${z}/${x}/${y}.png', {
        attribution: 'bla',
        maxZoom: 18
    }).addTo(mymap);
}
