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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        @if ($success = Session::get('success'))
            <script>
                Swal.fire({
                    title: 'Tambah Data Berhasil!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    timer: 2500,
                    timerProgressBar: true
                });
            </script>
        @endif

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
                            <a href="/tracking">
                                <button type="button" class="btn btn-sm btn-primary float-end mr-1"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Kembali ke Tracking Maps
                                </button>
                            </a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatables3" class="text-center table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Regional</th>
                                        <th>Witel</th>
                                        <th>Id STO</th>
                                        <th>Nama STO</th>
                                        <th>Lat</th>
                                        <th>Long</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $tr)
                                        <tr>
                                            <td>{{ $tr->regional }}</td>
                                            <td>{{ $tr->witel }}</td>
                                            <td>{{ $tr->id_sto }}</td>
                                            <td>{{ $tr->nama_sto }}</td>
                                            <td>{{ $tr->lat }}</td>
                                            <td>{{ $tr->long }}</td>
                                            <td>
                                                <a href="/edit_lokasi/{{ $tr->id }}"class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
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
