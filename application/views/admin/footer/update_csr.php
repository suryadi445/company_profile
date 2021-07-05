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
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">CSR</h3>
                        </div>
                        <!-- alert -->
                        <?php if ($this->session->flashdata()) : ?>
                            <div class="flash2" data-id="<?= $this->session->flashdata('gagal') ?>"></div>
                        <?php endif ?>
                        <!-- alert -->
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('admin/prosesUpdate_csr') ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <div class="form-group">
                                    <label for="judul">Judul CSR</label>
                                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul CSR" value="<?= $row['judul'] ?>">
                                    <div class="text-danger"><?= form_error('judul'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan CSR</label>
                                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan keterangan CSR" value="<?= $row['keterangan'] ?>">
                                    <div class="text-danger"><?= form_error('keterangan'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Upload Gambar CSR</label>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="gambar" name="gambar" autocomplete="off" value="<?= $row['gambar'] ?>">
                                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                                </div>
                                            </div>
                                            <div class="text-danger"><?= form_error('gambar'); ?></div>
                                        </div>
                                    </div>
                                    <div class="mb-3"><small>* Pilih gambar baru jika ingin mengganti gambar</small></div>
                                    <div class="form-group row ml-1">
                                        <div class="input-group">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-6">
                                                    <img src="<?= base_url('assets/upload_image/') . $row['gambar'] ?>" width="100px" height="100px">
                                                    <div>Gambar Lama</div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="<?= base_url('assets/image/default.jpg') ?>" width="100px" height="100px" id="blah">
                                                    <div>Gambar Baru</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
</div>