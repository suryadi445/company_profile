<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Carousel</h1>
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
                            <h3 class="card-title">Text Carousel</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="<?= base_url('admin/home_carousel') ?>" method="POST">
                            <div class="card-body">
                                <!-- alert -->
                                <?php if ($this->session->flashdata('gagal')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $this->session->flashdata('gagal') ?>
                                    </div>
                                <?php endif ?>
                                <!-- akhir alert -->
                                <?php if ($text != '') { ?>
                                    <div class="form-group row">
                                        <label for="promo_awal" class="col-sm-2 col-form-label">Text Awal</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="text_carousel_awal" name="text_carousel_awal" rows="5" placeholder="<?= $text ?>" readonly></textarea>
                                        </div>
                                        <div class="text-danger mb-n4"><?= form_error('text_carousel_awal'); ?></div>
                                    </div>
                                <?php } else {
                                } ?>
                                <div class="form-group row">
                                    <label for="promo_akhir" class="col-sm-2 col-form-label">Text Carousel</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="text_carousel_akhir" name="text_carousel_akhir" rows="5" placeholder="Masukkan text untuk carousel yang baru"></textarea>
                                        <div class="text-danger mb-n4"><?= form_error('text_carousel_akhir'); ?></div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <?php if ($text != '') { ?>
                                    <button type="submit" class="btn btn-info">Update</button>
                                <?php } else { ?>
                                    <button type="submit" class="btn btn-info">Tambah</button>
                                <?php } ?>
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