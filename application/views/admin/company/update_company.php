<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update Company</h1>
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
                            <h3 class="card-title">Update Company</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="<?= base_url('admin/proses_update_company') ?>" method="POST" enctype="multipart/form-data">
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
                                    <label for="company_baru" class="col-sm-4 col-form-label">Company</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="company_baru" autocomplete="off" value="<?= $row['nama_company']; ?>">
                                        <div class="text-danger mb-n4"><?= form_error('company_baru'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gambar" class="col-sm-4 col-form-label">Logo Perusahaan</label>
                                    <div class="input-group col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar" autocomplete="off" value="<?= $row['gambar']; ?>">
                                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                        </div>
                                    </div>
                                    <div class="text-danger mb-n4 offset-sm-4 col-sm-8"><?= form_error('gambar'); ?></div>
                                </div>
                                <div class="mt-n3 mb-3 offset-sm-4 col-sm-8"><small>* Pilih gambar baru jika ingin mengganti gambar</small></div>
                                <div class="form-group row">
                                    <div class="input-group offset-sm-4 col-sm-8">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <img src="<?= base_url('assets/upload_company/') . $row['gambar'] ?>" width="100px" height="100px">
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