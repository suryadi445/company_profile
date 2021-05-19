<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Semua Promo</h1>
                </div><!-- /.col -->
                <!-- </div>/.row -->
                <!-- <div class="row"> -->
                <div class="col-sm-6">
                    <a href="<?= base_url('admin/tambah_promo') ?>" class="btn btn-primary float-right">
                        <i class="fas fa-plus mr-1"></i>
                        Tambah Promo
                    </a>
                </div>
            </div>
        </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Promo</h3>
                            <?php if ($this->session->flashdata()) : ?>
                                <div class="flash" data-id="<?= $this->session->flashdata('sukses') ?>"></div>
                            <?php endif ?>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap text-center text-capitalize">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Menu Promo</th>
                                        <th>Harga Awal</th>
                                        <th>Harga Promo</th>
                                        <th>Mulai Promo</th>
                                        <th>Akhir Promo</th>
                                        <th>Gambar Promo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($all_promo as $result) :
                                    ?>
                                        <tr>
                                            <td><?= ++$start; ?></td>
                                            <td><?= $result['menu_promo']; ?></td>
                                            <td>Rp. <?= $result['harga_awal']; ?></td>
                                            <td class="text-danger font-weight-bold">Rp. <?= $result['harga_promo']; ?></td>
                                            <td><?= $result['promo_awal']; ?></td>
                                            <td><?= $result['promo_akhir']; ?></td>
                                            <td>
                                                <img src="<?= base_url('assets/upload_image/') . $result['gambar_promo']; ?>" width="50px" height="50px">
                                            </td>
                                            <td>
                                                <div class="row justify-content-around">
                                                    <a href="<?= base_url('admin/update_promo/')  . $result['id']; ?>" class="badge badge-warning">Ubah</a>
                                                    <a href="<?= base_url('admin/hapus_promo/') . $result['id'] ?>" class=" badge badge-danger hapus">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <?= $pagination ?>

                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>