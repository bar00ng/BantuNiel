<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('Template.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <!-- DataTables CSS dan JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

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
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Table
                            <a href="/data_tracking">
                                <button type="button" class="btn btn-sm btn-primary float-end mr-1"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Kembali ke Data Tracking Maps
                                </button>
                            </a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="/update_lokasi/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Regional</label>
                              <input name="regional" type="text" class="form-control" value="{{ $data->regional }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Witel</label>
                                <input name="witel" type="text" class="form-control" value="{{ $data->witel }}"  id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Id STO</label>
                                <input name="id_sto" type="text" class="form-control" value="{{ $data->id_sto }} " id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama STO</label>
                                <input name="nama_sto" type="text" class="form-control" value="{{ $data->nama_sto }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Lat</label>
                                <input name="lat" type="text" class="form-control" value="{{ $data->lat }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                               <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Long</label>
                              <input name="long" type="text" class="form-control" value="{{ $data->long }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                          </form>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->

        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
       <script>
        $(document).ready(function() {
            $('#datatables3').DataTable();
        });
       </script>
</body>

</html>
