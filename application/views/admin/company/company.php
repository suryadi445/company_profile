<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Company</h1>
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
                            <h3 class="card-title">Nama Perusahaan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="<?= base_url('admin/company') ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <!-- alert -->
                                <?php if ($this->session->flashdata('gagal')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $this->session->flashdata('gagal') ?>
                                    </div>
                                <?php endif ?>
                                <!-- akhir alert -->
                                <div class="form-group row">
                                    <label for="company_baru" class="col-sm-4 col-form-label">Company</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="company_baru" autocomplete="off" value="<?= set_value('company_baru') ?>">
                                        <div class="text-danger mb-n4"><?= form_error('company_baru'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="email" autocomplete="off" value="<?= set_value('email') ?>">
                                        <div class="text-danger mb-n4"><?= form_error('email'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gambar" class="col-sm-4 col-form-label">Logo Perusahaan</label>
                                    <div class="input-group col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar" autocomplete="off" value="<?= set_value('gambar') ?>">
                                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                        </div>
                                    </div>
                                    <div class="text-danger mb-n4 offset-sm-4 col-sm-8"><?= form_error('gambar'); ?></div>
                                </div>
                                <div class="form-group row">
                                    <div class="input-group offset-sm-3 col-sm-9">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
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