<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Promo</h1>
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
                        <form class="form-horizontal" action="<?= base_url('admin/tambah_promo') ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <!-- alert -->
                                <?php if ($this->session->flashdata('gagal')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $this->session->flashdata('gagal') ?>
                                    </div>
                                <?php endif ?>
                                <!-- akhir alert -->
                                <div class="form-group row">
                                    <label for="promo_awal" class="col-sm-4 col-form-label">Promo Awal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control datepicker" name="promo_awal" autocomplete="off" value="<?= set_value('promo_awal') ?>">
                                        <div class="text-danger mb-n4"><?= form_error('promo_awal'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="promo_akhir" class="col-sm-4 col-form-label">Promo Akhir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control datepicker" name="promo_akhir" autocomplete="off" value="<?= set_value('promo_akhir') ?>">
                                        <div class="text-danger mb-n4"><?= form_error('promo_akhir'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="menu_promo" class="col-sm-4 col-form-label">Menu Promo</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="menu_promo" name="menu_promo" autocomplete="off" value="<?= set_value('menu_promo') ?>">
                                        <div class="text-danger mb-n4"><?= form_error('menu_promo'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_awal" class="col-sm-4 col-form-label">Harga Awal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="harga_awal" name="harga_awal" autocomplete="off" value="<?= set_value('harga_awal') ?>">
                                        <div class="text-danger mb-n4"><?= form_error('harga_awal'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_promo" class="col-sm-4 col-form-label">Harga Promo</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="harga_promo" name="harga_promo" autocomplete="off" value="<?= set_value('harga_promo') ?>">
                                        <div class="text-danger mb-n4"><?= form_error('harga_promo'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gambar" class="col-sm-4 col-form-label">Upload Gambar</label>
                                    <div class="input-group col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar" autocomplete="off" value="<?= set_value('gambar') ?>">
                                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                        </div>
                                    </div>
                                    <div class="text-danger mb-n4 offset-sm-4 col-sm-8"><?= form_error('gambar'); ?></div>
                                </div>
                                <div class="form-group row mb-n2">
                                    <div class="input-group offset-sm-4 col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <img src="<?= base_url('assets/image/default.jpg') ?>" width="100px" height="100px" id="blah">
                                            </div>
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