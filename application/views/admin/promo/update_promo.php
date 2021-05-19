<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update Promo</h1>
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
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Update Promo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="<?= base_url('admin/proses_update_promo') ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <!-- alert -->
                                <?php if ($this->session->flashdata('gagal')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $this->session->flashdata('gagal') ?>
                                    </div>
                                <?php endif ?>
                                <!-- akhir alert -->
                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                <div class="form-group row">
                                    <label for="promo_awal" class="col-sm-4 col-form-label">Promo Awal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control datepicker" name="promo_awal" autocomplete="off" value="<?= $row['promo_awal']; ?>">
                                        <div class="text-danger mb-n4"><?= form_error('promo_awal'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="promo_akhir" class="col-sm-4 col-form-label">Promo Akhir</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control datepicker" name="promo_akhir" autocomplete="off" value="<?= $row['promo_akhir']; ?>">
                                        <div class=" text-danger mb-n4"><?= form_error('promo_akhir'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="menu_promo" class="col-sm-4 col-form-label">Menu Promo</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="menu_promo" name="menu_promo" autocomplete="off" value="<?= $row['menu_promo']; ?>">
                                        <div class=" text-danger mb-n4"><?= form_error('menu_promo'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_awal" class="col-sm-4 col-form-label">Harga Awal</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="harga_awal" name="harga_awal" autocomplete="off" value="<?= $row['harga_awal']; ?>">
                                        <div class=" text-danger mb-n4"><?= form_error('harga_awal'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_promo" class="col-sm-4 col-form-label">Harga Promo</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="harga_promo" name="harga_promo" autocomplete="off" value="<?= $row['harga_promo']; ?>">
                                        <div class=" text-danger mb-n4"><?= form_error('harga_promo'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gambar_promo" class="col-sm-4 col-form-label">Upload Gambar</label>
                                    <div class="input-group col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" accept="image/*" class="custom-file-input" id="gambar_promo" name="gambar_promo" autocomplete="off">
                                            <label class="custom-file-label" for="gambar_promo"><?= $row['gambar_promo']; ?></label>
                                        </div>
                                    </div>
                                    <div class="text-danger mb-n4 offset-sm-4 col-sm-8"><?= form_error('gambar_promo'); ?></div>
                                </div>
                                <div class="mt-n3 mb-3 offset-sm-4 col-sm-8"><small>* Pilih gambar baru jika ingin mengganti gambar</small></div>
                                <div class="form-group row">
                                    <div class="input-group offset-sm-4 col-sm-8">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <img src="<?= base_url('assets/upload_image/') . $row['gambar_promo'] ?>" width="100px" height="100px">
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
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Update</button>
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