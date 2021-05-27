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
                    <div class="card card-primary">
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
                        <form role="form" action="<?= base_url('admin/insert_layanan') ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Layanan</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_layanan">
                                        <option disabled selected value <?php echo set_select('jenis_layanan', '', TRUE); ?>>Pilih Layanan</option>
                                        <option value="gojek" <?php echo set_select('jenis_layanan', 'gojek'); ?>>Go Food</option>
                                        <option value="grab" <?php echo set_select('jenis_layanan', 'grab'); ?>>Grab Food</option>
                                        <option value="shopee" <?php echo set_select('jenis_layanan', 'shopee'); ?>>Shopee Food</option>
                                    </select>
                                    <div class="text-danger"><?= form_error('jenis_layanan'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control" name="link" id="link" placeholder="Masukkan link untuk jenis order layanan" value="<?= set_value('link') ?>">
                                    <div class="text-danger"><?= form_error('link'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Upload Gambar Layanan</label>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="input-group">
                                                        <div class="row justify-content-end">
                                                            <div class="col-sm-12">
                                                                <img src="<?= base_url('assets/image/default.jpg') ?>" width="100px" height="100px" id="blah">
                                                            </div>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                                <div class="offset-sm-1 col-sm-8">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="gambar" name="gambar" autocomplete="off" value="<?= set_value('gambar') ?>">
                                                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                                        </div>
                                                    </div>
                                                    <div class="text-danger"><?= form_error('gambar'); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row"> -->
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
        <!-- /.content -->
    </div>
</div>