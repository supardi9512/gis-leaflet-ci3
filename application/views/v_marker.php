<div id="map" style="width: 100%; height: 500px;"></div>

<script>
    var locations = [
        ["<b>Hello world!</b><br>LOCATION_1.", -6.282936, 106.728737],
        ["<b>Hello world!</b><br>LOCATION_2.", -6.289206, 106.729295],
        ["<b>Hello world!</b><br>LOCATION_3.", -6.283960, 106.725733],
        ["<b>Hello world!</b><br>LOCATION_4.", -6.279566, 106.721270],
        ["<b>Hello world!</b><br>LOCATION_5.", -6.293216, 106.729466]
    ];
    var map = L.map('map').setView([-6.2857227,106.7252363], 16);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
		zoomOffset: -1
    }).addTo(map);

    var icon1 = L.icon({
        iconUrl: '<?= base_url('icon/icon-marker.png'); ?>',

        iconSize:     [30, 38], // size of the icon
        iconAnchor:   [17, 94], // point of the icon which will correspond to marker's location
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });
    for (var i = 0; i < locations.length; i++) {
        marker = new L.marker([locations[i][1], locations[i][2]], {icon: icon1})
            .bindPopup(locations[i][0])
            .addTo(map);
    }

</script>