<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
                            <h1 class="m-0">Tracking</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/tracking">Tracking</a></li>
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
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>{{ $countBandung }} STO</h3>

                                    <p class="text-uppercase fw-bold">BANDUNG</p>
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
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $countBandungBarat }} STO</h3>

                                    <p class="text-uppercase fw-bold">Bandung Barat</p>
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
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3 style="color: white;">{{ $countCirebon }} STO</h3>

                                    <p  class="text-uppercase fw-bold" style="color: white;">Cirebon</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3>{{ $countKarawang }} STO</h3>

                                    <p class="text-uppercase fw-bold">Karawang</p>
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
                            <div class="small-box bg-dark">
                                <div class="inner">
                                    <h3>{{ $countSukabumi }} STO</h3>

                                    <p class="text-uppercase fw-bold">Sukabumi</p>
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
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $countTasikmalaya }} STO</h3>

                                    <p class="text-uppercase fw-bold"> Tasikmalaya </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box" style="background-image: linear-gradient(to right, rgb(228, 157, 249) , rgb(253, 253, 139));">
                                <div class="inner">
                                    <h3>{{ $totalCount }} STO</h3>

                                    <p class="text-uppercase fw-bold">Total Semua</p>
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
                    <div class="row">
                        <!-- Map Column -->
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="m-0">Map</h5>
                                </div>
                                <div class="card-body">
                                    <h5 class="m-0">
                                        <button type="submit" class="btn btn-sm btn-danger float-end mr-1 mb-3"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Delete All
                                        </button>
                                    </h5>
                                    <a href="/data_tracking">
                                        <h5 class="m-0">
                                            <button class="btn btn-sm btn-warning float-end mr-1 mb-3">
                                                Lihat Data
                                            </button>
                                        </h5>
                                    </a>
                                    <h5 class="m-0">
                                        <button type="button" class="btn btn-sm btn-primary float-end mr-1 mb-3"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Import Excel
                                        </button>
                                    </h5>
                                    <div id="map" style="width: 100%; height: 400px;">
                                        <div class="leaflet-control coordinate"></div>
                                    </div>

                                </div>
                            </div><!-- /.card -->
                        </div>
                        <div class="col-lg-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Table
                                        <a href="{{ url('/exportexcel') }}"
                                            class="btn btn-sm btn-success float-end">Excel</a>
                                        {{-- <a href="" class="btn btn-sm btn-warning float-end mr-1"><i
                                                class="fas fa-undo-alt"></i> Perbarui
                                            Data</a> --}}
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-primary float-end mr-1"
                                            data-bs-toggle="modal" data-bs-target="#importExcelTrackingModal">
                                            Import Excel Tracking
                                        </button>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="datatables-mini" class="text-center table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Witel</th>
                                                    <th>STO</th>
                                                    <th>Hostname</th>
                                                    <th>IP OLT</th>
                                                    <th>Types</th>
                                                    <th>Platform</th>
                                                    <th>OLT Sizes</th>
                                                    <th>Tgl Dikirim</th>
                                                    <th>Status</th>
                                                    <th>Tgl Diterima</th>
                                                    <th>PIC Penerima</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- konten --}}
                                                @foreach ($tracking as $track)
                                                <tr>
                                                    <td>{{ $track->witel }}</td>
                                                    <td>{{ $track->sto }}</td>
                                                    <td>{{ $track->hostname }}</td>
                                                    <td>{{ $track->ip_olt }}</td>
                                                    <td>{{ $track->types }}</td>
                                                    <td>{{ $track->platform }}</td>
                                                    <td>{{ $track->olt_size }}</td>
                                                    <td>{{ $track->tgl_dikirim }}</td>
                                                    <td>{{ $track->status }}</td>
                                                    <td>{{ $track->tgl_diterima }}</td>
                                                    <td>{{ $track->pic_penerima }}</td>
                                                    <td>
                                                        <a href="/edit_data_track/{{ $track->id }}"class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                                        <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div><!-- /.content -->
        </div><!-- /.content-wrapper -->


        <!-- Modal MAPS-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Import Excel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="/importlokasi" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import Data Maps</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal -->

        <!-- Modal Import Excel Tracking -->
        <div class="modal fade" id="importExcelTrackingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="importExcelTrackingModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="importExcelTrackingModalLabel">Import Excel Tracking</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/import_track" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import Excel Tracking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<!-- /.modal -->




        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        @include("Template/script_tracking")
    </div><!-- /.wrapper -->
</body>

</html>
