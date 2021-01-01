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

    // get my location (current location)

    // map.locate({setView: true, watch: true}) /* This will return map so you can do chaining */
    //     .on('locationfound', function(e){
    //         var marker = L.marker([e.latitude, e.longitude]).bindPopup('Your are here :)');
    //         var circle = L.circle([e.latitude, e.longitude], e.accuracy/2, {
    //             weight: 1,
    //             color: 'red',
    //             fillColor: '#cacaca',
    //             fillOpacity: 0.2
    //         });
    //         map.addLayer(marker);
    //         map.addLayer(circle);
    //     })
    //    .on('locationerror', function(e){
    //         console.log(e);
    //         alert("Location access denied.");
    //     });
</script>