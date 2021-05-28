<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Tentang Kami</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-success" style="width: 100px;" id="btn-visi">
                        <i class="fas fa-edit"></i>
                        Visi
                    </button>
                    <button type="button" class="btn btn-primary" style="width: 100px;" id="btn-misi">
                        <i class="fas fa-edit"></i>
                        Misi
                    </button>
                    <button type="button" class="btn btn-danger" style="width: 100px;" id="btn-sejarah">
                        <i class="fas fa-edit"></i>
                        Sejarah
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php if ($this->session->flashdata()) : ?>
        <div class="flash" data-id="<?= $this->session->flashdata('sukses') ?>"></div>
    <?php endif ?>

    <section class="content">
        <div class="container-fluid">
            <section id="tab-visi">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Visi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="<?= base_url('admin/insert_visi') ?>" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="visi_lama" class="col-sm-2 col-form-label">Visi Lama</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" id="visi_lama" readonly><?= $visi['visi'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="visi_baru" class="col-sm-2 col-form-label">Visi Baru</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" name="visi" id="visi_baru"><?= set_value('visi') ?></textarea>
                                            <div class="text-danger"><?= form_error('visi') ?></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <?php if ($visi['visi'] == '') { ?>
                                        <button type="submit" class="btn btn-success" style="width: 130px;">Tambah Visi</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-success" style="width: 130px;">Ubah Visi</button>
                                    <?php } ?>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
            </section>

            <br id="br">

            <section id="tab-misi">
                <!-- misi -->
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Misi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="<?= base_url('admin/insert_misi') ?>" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="misi" class="col-sm-2 col-form-label">Misi Lama</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" id="misi" readonly><?= $misi['misi'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="misi_baru" class="col-sm-2 col-form-label">Misi Baru</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" name="misi" id="misi_baru"><?= set_value('misi') ?></textarea>
                                            <div class="text-danger"><?= form_error('misi') ?></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <?php if ($misi['misi'] == '') { ?>
                                        <button type="submit" class="btn btn-primary" style="width: 130px;">Tambah Misi</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-primary" style="width: 130px;">Ubah Misi</button>
                                    <?php } ?>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
            </section>

            <section id="tab-sejarah">
                <!-- sejarah -->
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Sejarah</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="<?= base_url('admin/insert_sejarah') ?>" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="sejarah_lama" class="col-sm-2 col-form-label">Sejarah Lama</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" id="sejarah_lama" readonly><?= $sejarah['sejarah'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sejarah_baru" class="col-sm-2 col-form-label">Sejarah Baru</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" name="sejarah" id="sejarah_baru"><?= set_value('sejarah') ?></textarea>
                                            <div class="text-danger"><?= form_error('sejarah') ?></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <?php if ($sejarah['sejarah'] == '') { ?>
                                        <button type="submit" class="btn btn-danger" style="width: 150px;">Tambah Sejarah</button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-danger" style="width: 130px;">Ubah sejarah</button>
                                    <?php } ?>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
            </section>
        </div>
    </section>
</div>