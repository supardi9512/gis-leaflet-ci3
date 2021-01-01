<div id="map" style="width: 100%; height: 500px;"></div>

<script>
    // data dari database
	var data = [
        <?php foreach($tps as $key => $value) { ?>
            {"lokasi":[<?= $value->latitude; ?>,<?= $value->longitude; ?>], "nama_tps":"<?= $value->nama_tps; ?>"},
        <?php } ?>
	];

    var map = new L.Map('map', {zoom: 13, center: new L.latLng(-6.912988, 107.619465),     zoomControl: false
});	//set center from first location

L.control.zoom({
    position: 'bottomright'
}).addTo(map);

    map.addLayer(new L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
		zoomOffset: -1
    }));

    var icon1 = L.icon({
        iconUrl: '<?= base_url('icon/icon-marker.png'); ?>',

        iconSize:     [30, 38], // size of the icon
        iconAnchor:   [15, 35], // point of the icon which will correspond to marker's location
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    // CONTROL SEARCH

	var markersLayer = new L.LayerGroup();	//layer contain searched elements
	
	map.addLayer(markersLayer);

	map.addControl( new L.Control.Search({
		position:'topright',		
		layer: markersLayer,
		initial: false,
		zoom: 17,
        collapsed: true
	}) );


	////////////populate map with markers from sample data
	for(i in data) {
		var nama_tps = data[i].nama_tps,	//value searched
			lokasi = data[i].lokasi,		//position found
			marker = new L.Marker(new L.latLng(lokasi), {title: nama_tps, icon: icon1} );//se property searched
		marker.bindPopup('Nama TPS: '+ nama_tps );
		markersLayer.addLayer(marker);
	}
</script>