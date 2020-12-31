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

    var routeControl = L.Routing.control({
        waypoints: [
            L.latLng(-6.280691, 106.725892),
            L.latLng(-6.278213, 106.724757)
        ],
        routeWhileDragging: false,
    }).addTo(map);

// MENCARI NILAI KM DAN WAKTU TEMPUH

//  routeControl.on('routesfound', function(e) {
//    var routes = e.routes;
//    var summary = routes[0].summary;
//    // alert distance and time in km and minutes
//    alert('Total distance is ' + summary.totalDistance / 1000 + ' km and total time is ' + Math.round(summary.totalTime % 3600 / 60) + ' minutes');
// });
</script>