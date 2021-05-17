<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Ganti Password</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ganti Password</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('admin/ganti_password'); ?>" method="post">
                            <div class="card-body">
                                <!-- alert -->
                                <?php if ($this->session->flashdata('gagal')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $this->session->flashdata('gagal') ?>
                                    </div>
                                <?php endif ?>
                                <!-- akhir alert -->

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" value="<?= $session ?>" readonly>
                                    <div class="text-danger"><?= form_error('email') ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="password_lama">Password Lama</label>
                                    <input type="password" name="password_lama" class="form-control" id="password_lama" placeholder="Masukkan Password Lama Anda">
                                    <div class="text-danger"><?= form_error('password_lama') ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="password_baru">Password baru</label>
                                    <input type="password" name="password_baru" class="form-control" id="password_baru" placeholder="Masukkan Password Baru Anda">
                                    <div class="text-danger"><?= form_error('password_baru') ?></div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Ganti Password</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>