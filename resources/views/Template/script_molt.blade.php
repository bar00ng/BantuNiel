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
<script>
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

    // Marker
    var singleMarker = L.layerGroup([
        L.marker([-6.9169931, 107.6111925]).bindPopup(
            "<h3 class='text-center'>Telkom Bandung</h3> <img src='../images/lembong.jpg' class='popup-image'/> <p class='text-center'>Jl. Lembong No.11, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111</p>"
        ).openPopup(),
        L.marker([-6.9130279, 107.5755072]).bindPopup(
            "<h3 class='text-center'>Telkom Bandung Barat</h3> <img src='../images/rajawali.png' class='popup-image'/> <p class='text-center'>Jl. Rajawali Barat No.101, Garuda, Kec. Andir, Kota Bandung, Jawa Barat 40184</p>"
        ),
        L.marker([-6.7160221, 108.561057]).bindPopup(
            "<h3 class='text-center'>Telkom Cirebon</h3> <img src='../images/cirebon.png' class='popup-image'/> <p class='text-center'>Jl. Pagongan No.11, Pekalangan, Kec. Pekalipan, Kota Cirebon, Jawa Barat</p>"
        ),
        L.marker([-6.3101923, 107.2943845]).bindPopup(
            "<h3 class='text-center'>Telkom Karawang</h3> <img src='../images/karawang.png' class='popup-image'/> <p class='text-center'>Jl. Tuparev No.24, Nagasari, Kec. Karawang Bar., Kabupaten Karawang, Jawa Barat 41312</p>"
        ),
        L.marker([-6.9204043, 106.9287147]).bindPopup(
            "<h3 class='text-center'>Telkom Sukabumi</h3> <img src='../images/sukabumi.png' class='popup-image'/> <p class='text-center'>Jl. Masjid No.17, Gunungparang, Cikole, Kota Sukabumi, Jawa Barat 43111</p>"
        ),
        L.marker([-7.3268948, 108.2215061]).bindPopup(
            "<h3 class='text-center'>Telkom Tasikmalaya</h3> <img src='../images/tasikmalaya.png' class='popup-image'/> <p class='text-center'>Jl. Mayor Utarya No.4, Yudanagara, Kec. Cihideung, Tasikmalaya, Jawa Barat 46113</p>"
        ),
    ]);

    // CSS untuk popup-image agar responsif
    var customCss = "<style>.popup-image { max-width: 100%; height: auto; }</style>";
    singleMarker.eachLayer(function(layer) {
        layer.bindPopup(customCss + layer.getPopup().getContent());
    });

    // Tambahkan layer ke peta
    singleMarker.addTo(map);


    // Layer Controller
    var baseMaps = {
        "Normal": osm,
        "Satelite": googleSat,
    }

    var overLayMaps = {
        "Marker": singleMarker,
    }

    L.control.layers(baseMaps, overLayMaps, {
        collapsed: false
    }).addTo(map);
    // map.removeLayer(osm)

    // Event
    map.on('mousemove', function(e) {
        document.getElementsByClassName('coordinate')[0].innerHTML = 'lat: ' + e.latlng.lat + ' lng: ' + e
            .latlng.lng;
        // console.log('lat: ' + e.latlng.lat + ' lng: ' + e.latlng.lng);
    });

    // DataTable
    $(document).ready(function() {
        $('#datatables').DataTable()
    });

    $(document).ready(function() {
        $('#datatables3').DataTable()
    });

    // if (!navigator.geolocation) {
    //     console.log("Your browser doesn't support geolocation feature!");
    // } else {
    //     setInterval(() => {
    //         navigator.geolocation.getCurrentPosition(getPosition)
    //     }, 5000);
    // }

    // var marker, circle;

    // function getPosition(position) {
    //     var lat = position.coords.latitude;
    //     var long = position.coords.longitude;
    //     var accuracy = position.coords.accuracy;

    //     if (marker) {
    //         map.removeLayer(marker)
    //     }

    //     if (circle) {
    //         map.removeLayer(circle)
    //     }

    //     marker = L.marker([lat, long]);
    //     circle = L.circle([lat, long], {
    //         radius: accuracy
    //     })

    //     var featureGroup = L.featureGroup([marker, circle]).addTo(map)

    //     map.fitBounds(featureGroup.getBounds())

    //     console.log("Your cordinate is: Lat: " + lat + " Long: " + long + " Accuracy: " + accuracy);

    // }

    // Filter
        document.addEventListener("DOMContentLoaded", function() {
            // MERK
            const fiberCheckbox = document.getElementById("fiberCheckbox");
            const huaweiCheckbox = document.getElementById("huaweiCheckbox");
            const zteCheckbox = document.getElementById("zteCheckbox");
            const table = document.getElementById("datatables");
            // Witel
            const bdgCheckbox = document.getElementById("bdgCheckbox");
            const bdbCheckbox = document.getElementById("bdbCheckbox");
            const cbnCheckbox = document.getElementById("cbnCheckbox");
            const krwCheckbox = document.getElementById("krwCheckbox");
            const skbCheckbox = document.getElementById("skbCheckbox");
            const tsmCheckbox = document.getElementById("tsmCheckbox");

            const rows = table.querySelectorAll("tbody tr");

            function applyFilter() {
                rows.forEach(function(row) {
                    const witelCell = row.querySelector("td:nth-child(1)").textContent;
                    const merkCell = row.querySelector("td:nth-child(7)").textContent;
                       // Witel
                    const isBdg = bdgCheckbox.checked;
                    const isBdb = bdbCheckbox.checked;
                    const isCbn = cbnCheckbox.checked;
                    const isKrw = krwCheckbox.checked;
                    const isSkb = skbCheckbox.checked;
                    const isTsm = tsmCheckbox.checked;
                    // MERK
                    const isFiber = fiberCheckbox.checked;
                    const isHuawei = huaweiCheckbox.checked;
                    const isZte = zteCheckbox.checked;

                    if ((isBdg && witelCell === "BANDUNG") || (isBdb && witelCell === "BANDUNG BARAT") || (isCbn && witelCell === "CIREBON") || (isKrw && witelCell === "KARAWANG") || (isSkb && witelCell === "SUKABUMI") || (isTsm && witelCell === "TASIKMALAYA") || (isFiber && merkCell === "FH") || (isHuawei && merkCell === "HWE") || (isZte && merkCell === "ZTE")) {
                        row.style.display = "";
                    } else if (!isFiber && !isHuawei && !isZte && !isBdg && !isBdb && !isCbn && !isKrw && !isSkb && !isTsm) {
                        // Jika semua checkbox tidak dicentang, tampilkan semua data
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            }
            // MERK
            fiberCheckbox.addEventListener("change", applyFilter);
            huaweiCheckbox.addEventListener("change", applyFilter);
            zteCheckbox.addEventListener("change", applyFilter);
            // Witel
            bdgCheckbox.addEventListener("change", applyFilter);
            bdbCheckbox.addEventListener("change", applyFilter);
            cbnCheckbox.addEventListener("change", applyFilter);
            krwCheckbox.addEventListener("change", applyFilter);
            skbCheckbox.addEventListener("change", applyFilter);
            tsmCheckbox.addEventListener("change", applyFilter);


        });

</script>
