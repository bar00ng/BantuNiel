<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

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
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
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
                                    <div id="map" style="width: 100%; height: 600px;">
                                        <div class="leaflet-control coordinate"></div>
                                    </div>
                                    {{-- <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a> --}}
                                </div>
                            </div><!-- /.card -->
                        </div>
                        <div class="col-lg-2">
                            <div class="small-box bg-warning jarak-bawah">
                                <div class="inner text-white">
                                    <h3 class="my-2">150</h3>
                                    <p class="my-3">Jumlah Port</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                            <div class="small-box bg-success jarak-bawah">
                                <div class="inner">
                                    <h3 class="my-2">150</h3>
                                    <p class="my-3">Port Idle</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                            <div class="small-box bg-danger jarak-bawah">
                                <div class="inner">
                                    <h3 class="my-2">150</h3>
                                    <p class="my-3">Slot Idle</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                            <div class="small-box bg-danger jarak-bawah">
                                <div class="inner">
                                    <h3 class="my-2">150</h3>
                                    <p class="my-3">OCC % OLT</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                {{-- <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a> --}}
                            </div>
                        </div>
                        <h1>Filter</h1>
                        <div class="col-lg-1">
                            <p style="font-weight: bold">Merk: </p>
                        </div>
                        <div class="col-lg-2 mb-5">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="fiberCheckbox">
                                <label class="form-check-label" for="fiberCheckbox">Fiberhome</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="huaweiCheckbox">
                                <label class="form-check-label" for="huaweiCheckbox">Huawei</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="zteCheckbox">
                                <label class="form-check-label" for="zteCheckbox">ZTE</label>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <p style="font-weight: bold">OLT SIZE: </p>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="bigOltCheckbox">
                                <label class="form-check-label" for="bigOltCheckbox">BIG OLT</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="miniOltCheckbox">
                                <label class="form-check-label" for="miniOltCheckbox">MINI OLT</label>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <p style="font-weight: bold">WITEL: </p>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="bdgCheckbox">
                                <label class="form-check-label" for="bdgCheckbox">BANDUNG</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="bdbCheckbox">
                                <label class="form-check-label" for="bdbCheckbox">BANDUNG BARAT</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="cbnCheckbox">
                                <label class="form-check-label" for="cbnCheckbox">CIREBON</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="krwCheckbox">
                                <label class="form-check-label" for="krwCheckbox">KARAWANG</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="skbCheckbox">
                                <label class="form-check-label" for="skbCheckbox">SUKABUMI</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="tsmCheckbox">
                                <label class="form-check-label" for="tsmCheckbox">TASIKMALAYA</label>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Table
                                        <a href="{{ url('/exportexcel') }}"
                                            class="btn btn-sm btn-success float-end">Excel</a>
                                        <a href="" class="btn btn-sm btn-danger float-end mr-1">PDF</a>
                                        <a href="" class="btn btn-sm btn-warning float-end mr-1"><i
                                                class="fas fa-undo-alt"></i> Perbarui
                                            Data</a>
                                        <!-- Button trigger modal -->
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-primary float-end mr-1"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Import Excel
                                        </button>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="datatables" class="text-center table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>WITEL</th>
                                                    <th>STO</th>
                                                    <th>NODE</th>
                                                    <th>MERK</th>
                                                    <th>IP OLT</th>
                                                    <th>TYPES</th>
                                                    <th>OLT SIZES</th>
                                                    <th>MAX PORT</th>
                                                    <th>PORT USED</th>
                                                    <th>IDLE PORT</th>
                                                    <th>ADD PORT</th>
                                                    <th>ADD MODUL</th>
                                                    <th>SLOT MAX</th>
                                                    <th>IDLE SLOT</th>
                                                    <th>MOD ACT</th>
                                                    <th>MOD IDLE</th>
                                                    <th>ONU TERPASANG</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($data as $dt)
                                                    <tr>
                                                        <td>{{ $dt->witel }}</td>
                                                        <td>{{ $dt->sto }}</td>
                                                        <td>{{ $dt->node }}</td>
                                                        <td>{{ $dt->merk }}</td>
                                                        <td>{{ $dt->ip_olt }}</td>
                                                        <td>{{ $dt->types }}</td>
                                                        <td>{{ $dt->olt_sizes }}</td>
                                                        <td>{{ $dt->max_port }}</td>
                                                        <td>{{ $dt->port_used }}</td>
                                                        <td>{{ $dt->idle_port }}</td>
                                                        <td>{{ $dt->add_port }}</td>
                                                        <td>{{ $dt->add_modul }}</td>
                                                        <td>{{ $dt->slot_max }}</td>
                                                        <td>{{ $dt->idle_slot }}</td>
                                                        <td>{{ $dt->mod_act }}</td>
                                                        <td>{{ $dt->mod_idle }}</td>
                                                        <td>{{ $dt->onu_terpasang }}</td>
                                                        <td><a href="" class="btn btn-sm btn-danger">Delete</a>
                                                            <a href=""class="btn btn-sm btn-success">Detail</a>
                                                        </td>
                                                    </tr>
                                                @endforeach --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Import Excel</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/importexcel" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        @csrf
                                        <div class="form-group">
                                            <input type="file" name="file" required>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Import Gaes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->

        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        @include('Template.script')
</body>

</html>
