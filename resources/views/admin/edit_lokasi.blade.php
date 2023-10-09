<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            <div class="container-fluid">
                <div class="card">
                    <h5 class="card-header">Edit Data Lokasi</h5>
                    <div class="card-body p-4">
                        <form action="/update_lokasi/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Regional</label>
                                        <input name="regional" type="text" class="form-control" value="{{ $data->regional }}" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                      </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Witel</label>
                                        <input name="witel" type="text" class="form-control" value="{{ $data->witel }}"  id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label ">ID STO</label>
                                        <input name="id_sto" type="text" class="form-control @error('id_sto') is-invalid @enderror" value="{{ $data->id_sto }} " id="exampleInputEmail1" aria-describedby="emailHelp">
                                        @error('id_sto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                        @enderror
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama STO</label>
                                        <input name="nama_sto" type="text" class="form-control" value="{{ $data->nama_sto }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Lat</label>
                                        <input name="lat" type="text" class="form-control" value="{{ $data->lat }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Long</label>
                                        <input name="long" type="text" class="form-control" value="{{ $data->long }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Ubah</button>
                            <a href="/data_tracking" class="btn btn-primary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- /.content-wrapper -->


        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        @include("Template/script_tracking")
    </div><!-- /.wrapper -->
</body>

</html>
