<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACCESS PND NITS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../lte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../lte/dist/css/adminlte.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">
    <style>
        .coordinate {
            position: absolute;
            bottom: 10px;
            right: 40%;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* .leaflet-popup-content-wrapper { */
        /* background-color: #000000; */
        /* color: white; */
        /* } */
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" class="nav-link">Dashboard</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> --}}
                <!-- Perbesar / Perkecil -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="brand-link text-center">
                {{-- <img src="../lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
                <span class="brand-text fw-bold">ACCESS PND NITS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#"
                                class="nav-link {{ request()->segment('1') == '' || request()->segment('1') == '' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Main Navigation
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#"
                                        class="nav-link {{ request()->segment('1') == '' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon ml-3"></i>
                                        <p>Dashboard OLT</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#"
                                        class="nav-link {{ request()->segment('1') == 'kalkulasi' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon ml-3"></i>
                                        <p>Kalkulasi Port OLT</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Simple Link
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard OLT</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>BIG OLT</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>MINI OLT</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>PON PORT</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>PON PORT OCC</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Map</h5>
                                </div>
                                <div class="card-body">
                                    <div id="map" style="width: 100%; height: 400px;">
                                        <div class="leaflet-control coordinate"></div>
                                    </div>
                                    {{-- <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a> --}}
                                </div>
                            </div><!-- /.card -->
                        </div>
                        <div class="col-lg-2">
                            <div class="small-box bg-warning ">
                                <div class="inner text-white">
                                    <h3>150</h3>

                                    <p>XGSPON OLT</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>GPON OLT</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>PON PORT ONU > 32</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Featured</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Special title treatment</h6>

                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        {{-- <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer> --}}
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->


</body>

</html>

<!-- jQuery -->
<script src="../lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../lte/dist/js/adminlte.min.js"></script>
{{-- Map --}}
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    // Map initilization
    var map = L.map('map', {
        center: [-6.9169931, 107.6111925],
        zoom: 8,
        dragging: true,
        scrollWheelZoom: true,
        zoomControl: true
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
            "<h3>Telkom Bandung</h3> <img src='../images/telkom_bandung.jpg' class='popup-image'/> <p>Berada dilokasi area Bandung</p>"
        ).openPopup(),
        L.marker([-6.9130279, 107.5755072]).bindPopup(
            "<h3>Telkom Bandung Barat</h3> <img src='../images/telkom_bandungbarat.png' class='popup-image'/> <p>Berada dilokasi area Bandung Barat</p>"
        ),
        L.marker([-6.7160221, 108.561057]).bindPopup(
            "<h3>Telkom Cirebon</h3> <img src='../images/cirebon.png' class='popup-image'/> <p>Berada dilokasi area Cirebon</p>"
        ),
        L.marker([-6.3101923, 107.2943845]).bindPopup(
            "<h3>Telkom Karawang</h3> <img src='../images/karawang.png' class='popup-image'/> <p>Berada dilokasi area Karawang</p>"
        ),
        L.marker([-6.9204043, 106.9287147]).bindPopup(
            "<h3>Telkom Sukabumi</h3> <img src='../images/sukabumi.png' class='popup-image'/> <p>Berada dilokasi area Sukabumi</p>"
        ),
        L.marker([-7.3268948, 108.2215061]).bindPopup(
            "<h3>Telkom Tasikmalaya</h3> <img src='../images/tasikmalaya.png' class='popup-image'/> <p>Berada dilokasi area Tasikmalaya</p>"
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
</script>
