<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Semua Menu</h1>
                </div><!-- /.col -->
                <!-- </div>/.row -->
                <!-- <div class="row"> -->
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
                            <h3 class="card-title">Daftar Menu</h3>
                            <!-- alert -->
                            <?php if ($this->session->flashdata()) : ?>
                                <div class="flash" data-id="<?= $this->session->flashdata('sukses') ?>"></div>
                            <?php endif ?>
                            <!-- akhir alert -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap text-center text-capitalize" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Menu</th>
                                        <th>Harga Menu</th>
                                        <th>Keterangan</th>
                                        <th>Jenis Makanan</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($all_menu as $result) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $result['nama_menu'] ?></td>
                                            <td><?= $result['harga_menu'] ?></td>
                                            <td>
                                                <button class="btn btn-primary user_dialog" data-toggle="modal" data-target="#keterangan_menu<?= $result['id'] ?>">Lihat</button>
                                            </td>
                                            <td><?= $result['jenis_makanan'] ?></td>
                                            <td><img src="<?= base_url('assets/upload_menu/') . $result['gambar'] ?>" alt="No Image" width="30px"></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('menu/update_menu/') . $result['id'] ?>" class="btn btn-warning">Ubah</a>
                                                <a href="<?= base_url('menu/delete_menu/') . $result['id'] ?>" class="btn btn-danger hapus">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal -->
<?php foreach ($all_menu as $result) : ?>
    <div class="modal fade" id="keterangan_menu<?= $result['id'] ?>" tabindex=" -1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <textarea cols="60" rows="10" name="user_name" id="user_name"><?= $result['keterangan'] ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>