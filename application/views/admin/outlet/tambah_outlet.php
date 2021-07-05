<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Outlet</h1>
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
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Outlet</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="<?= base_url('admin/tambah_outlet') ?>" method="POST" autocomplete="off">
                            <div class="card-body">
                                <!-- alert -->
                                <?php if ($this->session->flashdata('gagal')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $this->session->flashdata('gagal') ?>
                                    </div>
                                <?php endif ?>
                                <!-- akhir alert -->
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Outlet</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" value="<?= set_value('nama') ?>" placeholder="Masukan nama outlet yang baru">
                                        <div class="text-danger mb-n4"><?= form_error('nama'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-2 col-form-label">Phone Outlet</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone" value="<?= set_value('phone') ?>" placeholder="Masukan nomor telephone outlet yang baru">
                                        <div class="text-danger mb-n4"><?= form_error('phone'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat Outlet</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="alamat" rows="5" placeholder="Masukkan alamat outlet yang baru"><?= set_value('alamat') ?></textarea>
                                        <div class="text-danger mb-n4"><?= form_error('alamat'); ?></div>
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