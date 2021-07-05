<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">CSR</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">CSR</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url('admin/tambah_csr'); ?>" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul_csr">Judul CSR</label>
                                    <input type="text" class="form-control" name="judul" id="judul_csr" placeholder="Masukkan judul untuk CSR">
                                    <div class="text-danger error"><?= form_error('judul') ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan_csr">Keterangan</label>
                                    <textarea class="form-control" id="keterangan_csr" name="keterangan" rows="3"></textarea>
                                    <div class="text-danger error"><?= form_error('keterangan') ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar_promo" class="col-sm-4 col-form-label">Upload Gambar</label>
                                    <div class="row">
                                        <div class="input-group col-sm-8 mb-n3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar" autocomplete="off" value="<?= set_value('gambar_promo') ?>">
                                                <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                            </div>
                                            <div class="input-group col-sm-4">
                                                <img src="<?= base_url('assets/image/default.jpg') ?>" width="100px" height="100px" id="blah">
                                            </div>
                                        </div>
                                        <div class="text-danger mt-n5 col-sm-8 error"><?= form_error('gambar'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content -->
</div>