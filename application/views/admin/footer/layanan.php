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
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Layanan</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Go Food</option>
                                        <option>Grab Food</option>
                                        <option>Shopee Food</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control" id="link" placeholder="Masukkan link untuk jenis order layanan">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#modal_layanan">Tambah Layanan</button>
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


<!-- Modal -->
<div class="modal fade" id="modal_layanan" tabindex="-1" aria-labelledby="modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_label">Tambah Layanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="nama_layanan" class="col-sm-4 col-form-label">Nama Layanan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_layanan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link_layanan" class="col-sm-4 col-form-label">Link</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="link_layanan"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar_promo" class="col-sm-4 col-form-label">Upload Gambar</label>
                    <div class="input-group col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar_promo" name="gambar_promo" autocomplete="off" value="<?= set_value('gambar_promo') ?>">
                            <label class="custom-file-label" for="gambar_promo">Pilih Gambar</label>
                        </div>
                    </div>
                    <div class="text-danger mb-n4 offset-sm-4 col-sm-8"><?= form_error('gambar_promo'); ?></div>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>