<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Layanan</h1>
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
                            <h3 class="card-title">Layanan</h3>
                        </div>
                        <!-- alert -->
                        <?php if ($this->session->flashdata()) : ?>
                            <div class="flash2" data-id="<?= $this->session->flashdata('gagal') ?>"></div>
                        <?php endif ?>
                        <!-- alert -->
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('admin/proses_update_layanan') ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Layanan</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_layanan">
                                        <?php if ($row['jenis_layanan'] == 'gojek') { ?>
                                            <option value="gojek" selected <?php echo set_select('jenis_layanan', 'gojek'); ?>>Go Food</option>
                                            <option value="grab" <?php echo set_select('jenis_layanan', 'grab'); ?>>Grab Food</option>
                                            <option value="shopee" <?php echo set_select('jenis_layanan', 'shopee'); ?>>Shopee Food</option>
                                        <?php } else if ($row['jenis_layanan'] == 'grab') { ?>
                                            <option value="gojek" <?php echo set_select('jenis_layanan', 'gojek'); ?>>Go Food</option>
                                            <option value="grab" selected <?php echo set_select('jenis_layanan', 'grab'); ?>>Grab Food</option>
                                            <option value="shopee" <?php echo set_select('jenis_layanan', 'shopee'); ?>>Shopee Food</option>
                                        <?php } else if ($row['jenis_layanan'] == 'shopee') { ?>
                                            <option value="gojek" <?php echo set_select('jenis_layanan', 'gojek'); ?>>Go Food</option>
                                            <option value="grab" <?php echo set_select('jenis_layanan', 'grab'); ?>>Grab Food</option>
                                            <option value="shopee" selected <?php echo set_select('jenis_layanan', 'shopee'); ?>>Shopee Food</option> <?php } ?>
                                    </select>
                                    <div class="text-danger"><?= form_error('jenis_layanan'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control" name="link" id="link" placeholder="Masukkan link untuk jenis order layanan" value="<?= $row['link'] ?>">
                                    <div class="text-danger"><?= form_error('link'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Upload Gambar Layanan</label>
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
                                                    <img src="<?= base_url('assets/upload_layanan/') . $row['gambar'] ?>" width="100px" height="100px">
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