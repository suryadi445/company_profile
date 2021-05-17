<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Promo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="<?= base_url('admin/tambah_promo') ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="promo_awal" class="col-sm-4 col-form-label">Promo Awal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control datepicker" name="promo_awal">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="promo_akhir" class="col-sm-4 col-form-label">Promo Akhir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control datepicker" name="promo_akhir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="menu_promo" class="col-sm-4 col-form-label">Menu Promo</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="menu_promo" name="menu_promo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_awal" class="col-sm-4 col-form-label">Harga Awal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="harga_awal" name="harga_awal">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_promo" class="col-sm-4 col-form-label">Harga Promo</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="harga_promo" name="harga_promo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gambar_promo" class="col-sm-4 col-form-label">Upload Gambar</label>
                                    <div class="input-group col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar_promo">
                                            <label class="custom-file-label" for="gambar_promo">Pilih Gambar</label>
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
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>