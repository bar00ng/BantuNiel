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
                                <h1 class="m-0">Mini OLT</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="/">Mini OLT TR-3</a></li>
                                    <li class="breadcrumb-item active">Main Navigation</li>
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
                                <div class="small-box bg-warning jarak-bawah">
                                    <div class="inner text-white">
                                        <h3 class="my-2">150</h3>
                                        <p class="my-3">XGSPON OLT</p>
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
                                        <p class="my-3">GPON OLT</p>
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
                                        <p class="my-3">PON PORT ONU > 32</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    {{-- <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a> --}}
                                </div>
                            </div>
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
                            {{-- <div class="col-lg-1">
                                <p style="font-weight: bold">TYPE: </p>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">BIG OLT</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">MINI OLT</label>
                                </div>
                            </div> --}}
                            <div class="col-lg-1">
                                <p style="font-weight: bold">Witel: </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="bdgCheckbox">
                                    <label class="form-check-label" for="bdgCheckbox">BDG</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="bdbCheckbox">
                                    <label class="form-check-label" for="bdbCheckbox">BDB</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="cbnCheckbox">
                                    <label class="form-check-label" for="cbnCheckbox">CBN</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="krwCheckbox">
                                    <label class="form-check-label" for="krwCheckbox">KRW</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="skbCheckbox">
                                    <label class="form-check-label" for="skbCheckbox">SKB</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="tsmCheckbox">
                                    <label class="form-check-label" for="tsmCheckbox">TSM</label>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-lg-12">
                                <div class="card card-primary card-outline mt-3">
                                    <div class="card-header">
                                        <h5 class="m-0">Table 1
                                            <a href="" class="btn btn-sm btn-success float-end">Excel</a>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="datatables" class="text-center table table-striped">
                                                <!-- Isi tabel pertama sesuai kebutuhan -->
                                                <thead>
                                                    <tr>
                                                        <th>WITEL</th>
                                                        <th>STO</th>
                                                        <th>HOSTNAME</th>
                                                        <th>OLT</th>
                                                        <th>IP</th>
                                                        <th>OLT</th>
                                                        <th>MERK</th>
                                                        <th>TYPE</th>
                                                        <th>SOFT. VER.</th>
                                                        <th>STATUS</th>
                                                        <th>ALAMAT</th>
                                                        <th>GEDUNG</th>
                                                        <th>LANTAI</th>
                                                        <th>RUANGAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @foreach ($data as $dt)
                                                        <tr>
                                                            <td>{{ $dt->regional }}</td>
                                                            <td>{{ $dt->sto }}</td>
                                                            <td>{{ $dt->type }}</td>
                                                            <td>{{ $dt->tech }}</td>
                                                            <td>{{ $dt->total_node }}</td>
                                                            <td>{{ $dt->total_port }}</td>
                                                            <td>{{ $dt->port_used }}</td>
                                                            <td>{{ $dt->port_idle }}</td>
                                                            <td>{{ $dt->total_slot }}</td>
                                                            <td>{{ $dt->slot_idle }}</td>
                                                            <td>{{ $dt->modul_idle }}</td>
                                                            <td>{{ $dt->total_onu }}</td>
                                                            <td><a href="#" class="btn btn-sm btn-info"> Detail</a></td>
                                                        </tr>
                                                    @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card card-primary card-outline mt-3">
                                    <div class="card-header">
                                        <h5 class="m-0">Table 2
                                            <a href="" class="btn btn-sm btn-success float-end">Excel</a>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="datatables2" class="text-center table table-striped">
                                                <!-- Isi tabel kedua sesuai kebutuhan -->
                                                <thead>
                                                    <tr>
                                                        <th>TAHUN PO</th>
                                                        <th>WITEL</th>
                                                        <th>STO</th>
                                                        <th>SITE NAME<th>
                                                        <th>SIZE OLT</th>
                                                        <th>Platform</th>
                                                        <th>HOSTNAME OLT</th>
                                                        <th>Lat</th>
                                                        <th>Long</th>
                                                        <th>Jarak ke STO<th>
                                                        <th>Nama Jalan STO</th>
                                                        <th>ME END1</th>
                                                        <th>LAG Group</th>
                                                        <th>Type SFP</th>
                                                        <th>Kes. UPLINK</th>
                                                        <th>Kes. ODC</th>
                                                        <th>Kes. Dis.</th>
                                                        <th>PLN Progress</th>
                                                        <th>ID PLN</th>
                                                        <th>SITAC</th>
                                                        <th>STOCK MINI OLT</th>
                                                        <th>PROGRES</th>
                                                        <th>TP. Golive</th>
                                                        <th>COUNTDOWN</th>
                                                        <th>STATUS INSTALASI</th>
                                                        <th>% KESIAPAN SERVICE</th>
                                                        <th>KETERANGAN INSTALASI</th>
                                                        <th>WASPANG</th>
                                                        <th>NMS</th>
                                                        <th>UIM</th>
                                                        <th>TACACS</th>
                                                        <th>IBOOSTER</th>
                                                        <th>CACTI</th>
                                                        <th>ACS</th>
                                                        <th>GEMBOK KERANGKENG</th>
                                                        <th>KERANGKENG</th>
                                                        <th>LABELLING</th>
                                                        <th>LANTAI KERJA</th>
                                                        <th>PROTECTION BAR</th>
                                                        <th>GROUNDING</th>
                                                        <th>TIANG LISTRIK</th>
                                                        <th>KETINGGIAN PANEL BOX</th>
                                                        <th>KONDISI PONDASI</th>
                                                        <th>PIPA GALVANIS</th>
                                                        <th>GEMBOK KABINET</th>
                                                        <th>CLAMP HOOK HDPE/LISTRIK</th>
                                                        <th>LETAK PERANGKAT</th>
                                                        <th>POSISI PANEL BOX</th>
                                                        <th>CEK MATERIAL</th>
                                                        <th>NILAI AKHIR</th>
                                                        <th>FOTO PERANGKAT</th>
                                                        <th>TGL GOLIVE</th>
                                                        <th>TGL BAST</th>
                                                        <th>TGL PLN TELKOM</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @foreach ($data as $dt)
                                                        <tr>
                                                            <td>{{ $dt->regional }}</td>
                                                            <td>{{ $dt->sto }}</td>
                                                            <td>{{ $dt->type }}</td>
                                                            <td>{{ $dt->tech }}</td>
                                                            <td>{{ $dt->total_node }}</td>
                                                            <td>{{ $dt->total_port }}</td>
                                                            <td>{{ $dt->port_used }}</td>
                                                            <td>{{ $dt->port_idle }}</td>
                                                            <td>{{ $dt->total_slot }}</td>
                                                            <td>{{ $dt->slot_idle }}</td>
                                                            <td>{{ $dt->modul_idle }}</td>
                                                            <td>{{ $dt->total_onu }}</td>
                                                            <td><a href="#" class="btn btn-sm btn-info"> Detail</a></td>
                                                        </tr>
                                                    @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
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

        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        @include('Template.script_molt')
    </body>

    </html>
