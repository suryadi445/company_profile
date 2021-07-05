<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Update Outlet</h1>
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
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Update Outlet</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- alert -->
                        <?php if ($this->session->flashdata()) : ?>
                            <div class="flash" data-id="<?= $this->session->flashdata('sukses') ?>"></div>
                            <div class="flash2" data-id="<?= $this->session->flashdata('gagal') ?>"></div>
                        <?php endif ?>
                        <!-- akhir alert -->
                        <!-- form start -->
                        <form class="form-horizontal" action="<?= base_url('admin/prosesUpdate_outlet') ?>" method="POST" autocomplete="off">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama_outlet" class="col-sm-4 col-form-label">Nama Outlet</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nama_outlet" name="nama" value="<?= $row['nama_outlet'] ?>">
                                        <div class="text-danger mb-n4"><?= form_error('nama'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone_outlet" class="col-sm-4 col-form-label">Phone Outlet</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="phone" id="phone_outlet" value="<?= $row['phone'] ?>">
                                        <div class=" text-danger mb-n4"><?= form_error('phone'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_outlet" class="col-sm-4 col-form-label">Alamat Outlet</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="5" id="alamat_outlet" name="alamat"><?= $row['alamat'] ?></textarea>
                                        <div class=" text-danger "><?= form_error('alamat'); ?></div>
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
</div>