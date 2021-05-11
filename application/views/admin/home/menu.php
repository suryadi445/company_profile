<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Menu</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Makanan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="input_menu_makanan" class="col-sm-4 col-form-label">Nama Menu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input_menu_makanan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input_harga_makanan" class="col-sm-4 col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input_harga_makanan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input_keterangan_makanan" class="col-sm-4 col-form-label">Keterangan</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="5" id="input_keterangan_makanan"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input_gambar_makanan" class="col-sm-4 col-form-label">Upload Gambar</label>
                                    <div class="input-group col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="input_gambar_makanan">
                                            <label class="custom-file-label" for="input_gambar_makanan">Pilih Gambar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Tambah</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->

                <!-- right column -->
                <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Minuman</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="input_menu_minuman" class="col-sm-4 col-form-label">Nama Menu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input_menu_minuman">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input_harga_minuman" class="col-sm-4 col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input_harga_minuman">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input_keterangan_minuman" class="col-sm-4 col-form-label">Keterangan</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="5" id="input_keterangan_minuman"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input_gambar_minuman" class="col-sm-4 col-form-label">Upload Gambar</label>
                                    <div class="input-group col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="input_gambar_minuman">
                                            <label class="custom-file-label" for="input_gambar_minuman">Pilih Gambar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Tambah</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                    <!-- general form elements disabled -->
                </div>
            </div>
        </div>
    </section>
</div>