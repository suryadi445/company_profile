<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Edit Admin</h1>
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
                            <h3 class="card-title">Edit Data Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('admin/proses_edit'); ?>" method="POST">
                            <input type="hidden" value="<?= $all_admin['id']; ?>" name="id">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama_edit" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_edit" name="nama" value="<?= $all_admin['nama']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_edit" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email_edit" name="email" value="<?= $all_admin['email']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_edit" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="phone_edit" name="phone" value="<?= $all_admin['phone']; ?>">
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row font-weight-bold">
                                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Pria" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Male <small>(Pria)</small>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Wanita">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Female <small>(Wanita)</small>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="<?= base_url('admin/jumlah_admin'); ?>" type="button" class="btn btn-secondary">Batal</a>
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