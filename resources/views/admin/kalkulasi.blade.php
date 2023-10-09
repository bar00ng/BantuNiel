<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<style>
    .kedua {
        border-collapse: collapse; /* Menggabungkan batas antara sel */
        width: 100%;
    }

    .kedua th,
    .kedua td {
        border: 1px solid black; /* Menambahkan garis ke sel */
        padding: 8px; /* Menambahkan padding untuk tampilan yang lebih baik */
        text-align: left;
    }
</style>

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Kalkulasi Port</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/kalkulasi">Kalkulasi Port OLT</a></li>
                                <li class="breadcrumb-item active">Main Navigation</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-danger card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Kalkulasi OLT</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <table class="table" border="2">
                                                <thead>
                                                  <tr>
                                                    <th scope="col" class="text-center bg-success">Import File</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>
                                                        <center>
                                                        <div class="mb-3">
                                                            {{-- <label for="formFileMultiple" class="form-label">Multiple files input example</label> --}}
                                                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                        </div>
                                                        </center>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>
                                        {{-- <div class="col-lg-5">
                                            <table class="table" border="2">
                                                <thead>
                                                  <tr>
                                                    <th scope="col" class="text-center bg-success">OCC Sebelum Tambah</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td><center><input type="search"></center></td>
                                                  </tr>
                                                </tbody>
                                                <thead>
                                                    <tr>
                                                      <th scope="col" class="text-center bg-success">Keperluan Sebelum ODP</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><center><input type="search"></center></td>
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr>
                                                      <th scope="col" class="text-center bg-success">Rekomendasi Tambah</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><center><input type="search"></center></td>
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr>
                                                      <th scope="col" class="text-center bg-success">OCC SETELAH TAMBAH</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><center><input type="search"></center></td>
                                                    </tr>
                                                </tbody>
                                              </table>
                                        </div> --}}
                                    </div>
                                    <div class="table-responsive">
                                        <table class="kedua" border="1">
                                            <tr>
                                                <th class="bg-success text-center">Witel</th>
                                                <th class="bg-success text-center">STO</th>
                                                <th class="bg-success text-center">Hostname</th>
                                                <th class="bg-success text-center">IP OLT</th>
                                                <th class="bg-success text-center">Type</th>
                                                <th class="bg-success text-center">OCC AWAL</th>
                                                <th class="bg-success text-center">KEB. ODP</th>
                                                <th class="bg-success text-center">TAMB. MOD</th>
                                                <th class="bg-success text-center">OCC AKHIR</th>
                                            </tr>
                                            <tr>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="kedua" border="1">
                                            <tr>
                                                <th class="bg-success text-center">Witel</th>
                                                <th class="bg-success text-center">STO</th>
                                                <th class="bg-success text-center">Hostname</th>
                                                <th class="bg-success text-center">IP OLT</th>
                                                <th class="bg-success text-center">Type</th>
                                                <th class="bg-success text-center">PORT USE</th>
                                                <th class="bg-success text-center">IDLE PORT</th>
                                                <th class="bg-success text-center">SLOT IDLE</th>
                                                <th class="bg-success text-center">OCCUPANCY AWAL</th>
                                            </tr>
                                            <tr>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                                <td><center><input type="text"></center></td>
                                            </tr>
                                        </table>
                                    </div>
                                    {{-- <div id="map" style="width: 100%; height: 400px;">
                                        <div class="leaflet-control coordinate"></div>
                                    </div> --}}
                                    {{-- <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a> --}}
                                </div>
                            </div><!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card card-danger card-outline">
                                <div class="card-header">
                                    <h5 class="m-0 text-center">Summary Switch by Manufacture</h5>
                                </div>
                                <div class="card-body">
                                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-danger card-outline">
                                <div class="card-header">
                                    <h5 class="m-0 text-center">Summary Switch by Regional</h5>
                                </div>
                                <div class="card-body">
                                    <canvas id="myChart-2" style="width:100%;max-width:600px"></canvas>
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
        var xValues = ["Italy"];
        var yValues = [1];
        var barColors = [
          "#b91d47"
        ];

        new Chart("myChart", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Manufacture"
            }
          }
        });
</script>

<script>
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];

    new Chart("myChart-2", {
      type: "pie",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "Regional"
        }
      }
    });
</script>
