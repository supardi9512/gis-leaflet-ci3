<div class="form-group">
    <label for="">Latitude</label>
    <input type="text" id="latitude" class="form-control">
</div>
<div class="form-group">
    <label for="">Longitude</label>
    <input type="text" id="longitude" class="form-control">
</div>

<div id="map" style="width: 100%; height: 500px;"></div>

<script>
    var curLocation = [0,0];
    if(curLocation[0] == 0 && curLocation[1] == 0) {
        curLocation = [-6.2857227,106.7252363];
    }
    var map = L.map('map').setView([-6.2857227,106.7252363], 16);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
		zoomOffset: -1
    }).addTo(map);

    map.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable: 'true'
    });

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        $('#latitude').val(position.lat);
        $('#longitude').val(position.lng).keyup();
    })

    $('#latitude, #longitude').change(function() {
        var position = [parseInt($('#latitude').val()), parseInt($('#longitude').val())];
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        map.panTo(position);
    });

    map.addLayer(marker);
</script>