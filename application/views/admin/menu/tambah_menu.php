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
                            <h3 class="card-title">Tambah Menu</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- alert -->
                        <?php if ($this->session->flashdata()) : ?>
                            <div class="flash" data-id="<?= $this->session->flashdata('sukses') ?>"></div>
                            <div class="flash2" data-id="<?= $this->session->flashdata('gagal') ?>"></div>
                        <?php endif ?>
                        <!-- akhir alert -->
                        <!-- form start -->
                        <form class="form-horizontal" action="<?= base_url('menu/insert_makanan') ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Jenis Makanan</label>
                                    <div class="col-sm-8">
                                        <select class="custom-select" name="jenis_makanan" value="<?= set_value('jenis_makanan') ?>">
                                            <option disabled selected value <?php echo set_select('jenis_makanan', '', TRUE); ?>>Pilih jenis makanan</option>
                                            <option value=" makanan" <?php echo set_select('jenis_makanan', 'makanan'); ?>>Makanan</option>
                                            <option value="minuman" <?php echo set_select('jenis_makanan', 'minuman'); ?>>Minuman</option>
                                        </select>
                                        <div class="text-danger mb-n4"><?= form_error('jenis_makanan'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input_menu_makanan" class="col-sm-4 col-form-label">Nama Menu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama_menu" id="input_menu_makanan" value="<?= set_value('nama_menu') ?>">
                                        <div class="text-danger mb-n4"><?= form_error('nama_menu'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input_harga_makanan" class="col-sm-4 col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="harga_menu" id="input_harga_makanan" value="<?= set_value('harga_menu') ?>">
                                        <div class=" text-danger mb-n4"><?= form_error('harga_menu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input_keterangan_makanan" class="col-sm-4 col-form-label">Keterangan</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="5" id="input_keterangan_makanan" name="keterangan_menu"><?= set_value('keterangan_menu') ?></textarea>
                                        <div class=" text-danger "><?= form_error('keterangan_menu'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gambar" class="col-sm-4 col-form-label">Upload Gambar</label>
                                    <div class="input-group col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                        </div>
                                    </div>
                                    <div class="text-danger mb-n4 offset-sm-4 col-sm-8"><?= form_error('gambar'); ?></div>
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
</div>