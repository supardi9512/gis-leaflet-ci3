<div id="map" style="width: 100%; height: 500px;"></div>

<script>
    var map = L.map('map').setView([-6.2857227,106.7252363], 16);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
		zoomOffset: -1
    }).addTo(map);

    // create a red polyline from an array of LatLng points
    var latlngs = [
        [[-6.283992, 106.727374],
        [-6.286828, 106.727406],
        [-6.287639, 106.728115],
        [-6.285986, 106.729810],
        [-6.284237, 106.730110]],
        [[-6.279736, 106.724391],
        [-6.281145, 106.726094],
        [-6.280967, 106.726781]]
    ];

    var polyline = L.polyline(latlngs, {color: 'red'}).bindPopup('<b>Jalur 1</b>').addTo(map);

    // zoom the map to the polyline
    map.fitBounds(polyline.getBounds());

    // create a red polyline from an array of LatLng points
    var latlngs2 = [
        [-6.281351, 106.726424],
        [-6.281988, 106.727964],
        [-6.281934, 106.728318]
    ];

    var polyline2 = L.polyline(latlngs2, {color: 'blue'}).bindPopup('<b>Jalur 2</b>').addTo(map);

    // zoom the map to the polyline
    // map.fitBounds(polyline2.getBounds());
</script>