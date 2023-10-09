<!-- jQuery -->
<script src="../lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
{{-- Bootstrap 5 --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<!-- AdminLTE App -->
<script src="../lte/dist/js/adminlte.min.js"></script>
{{-- Map --}}
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
{{-- J-Query --}}
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
{{-- DataTable --}}
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<style>
    /* CSS untuk marker kustom */
    .custom-marker {
        line-height: 1;
        font-size: 20px;
    }
</style>
<script>
     $(document).ready(function() {
        $('#datatables-mini').DataTable()
    });

    // Map initilization
    var map = L.map('map', {
    center: [-6.9169931, 107.6111925],
    zoom: 8,
    dragging: true,
    scrollWheelZoom: true,
    zoomControl: true,
    minZoom: 8,
});

var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
osm.addTo(map)

// Water color
var watercolor = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
// watercolor.addTo(map)

// Google Street
googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});
// googleStreets.addTo(map)

// Google Satelite
googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});
// googleSat.addTo(map)
// Membuat base maps
var baseMaps = {
    "Normal": osm,
    "Satellite": googleSat
};

// Membuat layer kontrol
var layerControl = L.control.layers(baseMaps, {}, {
    collapsed: false // Menampilkan layer control secara default
}).addTo(map);

// Menambahkan OSM (Normal) sebagai layer default
osm.addTo(map);


// Marker
var lokasiData = @json($data); // Pastikan Anda telah meneruskan data dari controller ke view
var markers = []; // Array untuk menyimpan marker

// BEFORE
// for (var i = 0; i < lokasiData.length; i++) {
//     var lokasi = lokasiData[i];
//     var marker = L.marker([lokasi.lat, lokasi.long]).bindPopup(
//         "<h6 class='text-center'>" + lokasi.nama_sto + " ( " + lokasi.witel + " )</h6>"
//     ).openPopup();
//     markers.push(marker);
// }

// Loop melalui data lokasi dan membuat marker untuk setiap lokasi
for (var i = 0; i < lokasiData.length; i++) {
        var lokasi = lokasiData[i];
        var markerColor = 'blue'; // Warna default

        // Tentukan warna marker berdasarkan nama witel
        switch (lokasi.witel) {
            case 'BANDUNG':
                markerColor = '#0977e6';
                break;
            case 'BANDUNG BARAT':
                markerColor = 'green';
                break;
            case 'CIREBON':
                markerColor = 'orange';
                break;
            case 'KARAWANG':
                markerColor = 'purple';
                break;
            case 'SUKABUMI':
                markerColor = '#371030';
                break;
            case 'TASIKMALAYA':
                markerColor = 'red'
                break;
            default:
                markerColor = 'blue'; // Warna default jika tidak ada yang cocok
        }

        var marker = L.marker([lokasi.lat, lokasi.long], {
            icon: L.divIcon({
                className: 'custom-marker',
                html: '<i class="fas fa-map-marker-alt" style="color: ' + markerColor + ';"></i>',
                iconSize: [30, 30]
            })
        }).bindPopup(
            "<h6 class='text-center'>" + lokasi.witel + " ( " + lokasi.nama_sto + " )</h6>" +
            "<div class='table-responsive'>" +
                "<table class='table table-striped'>" +
                    "<thead>" +
                        "<tr>" +
                            "<th>STO</th>" +
                            "<th>Type</th>" +
                            "<th>Platform</th>" +
                            "<th>OLT Size</th>" +
                            "<th>Tgl Dikirim</th>" +
                            "<th>Status</th>" +
                            "<th>Tgl Diterima</th>" +
                            "<th>PIC Penerima</th>" +
                            // "<th>Lat</th>" +
                            // "<th>Long</th>" +
                        "</tr>" +
                        "</thead>" +
                        "<tbody>" +
                        "<tr>" +
                            // "<td>" + lokasi.regional + "</td>" +
                            // "<td>" + lokasi.witel + "</td>" +
                            // "<td>" + lokasi.id_sto + "</td>" +
                            // "<td>" + lokasi.nama_sto + "</td>" +
                            // "<td>" + lokasi.lat + "</td>" +
                            // "<td>" + lokasi.long + "</td>" +
                        "</tr>" +
                    "</tbody>" +
                "</table>" +
            "</div>"
        ).openPopup();
        markers.push(marker);
    }

// Buat layerGroup untuk semua marker
var markerGroup = L.layerGroup(markers);

// Tambahkan layerGroup ke peta
markerGroup.addTo(map);


// Event
map.on('mousemove', function(e) {
    document.getElementsByClassName('coordinate')[0].innerHTML = 'lat: ' + e.latlng.lat + ' lng: ' + e
        .latlng.lng;
    // console.log('lat: ' + e.latlng.lat + ' lng: ' + e.latlng.lng);

    // Di sini Anda dapat menambahkan logika tambahan berdasarkan pergerakan mouse
});

</script>
