<div id="map" style="width: 100%; height: 500px;"></div>

<script>
    var map = L.map('map').setView([-6.912988, 107.619465], 13);

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

    <?php foreach($tps as $key => $value) { ?>

    L.marker([<?= $value->latitude; ?>, <?= $value->longitude; ?>], {icon: icon1})
        .bindPopup("<h5><b>Nama TPS : <?= $value->nama_tps; ?></b></h5>Kecamatan : <?= $value->kecamatan; ?><br>Lokasi : <?= $value->lokasi; ?>")
        .addTo(map);

    <?php } ?>
</script>