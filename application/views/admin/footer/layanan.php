<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="m-0 mb-1 text-dark">Semua Layanan</h1>
                    <!-- </div> -->
                    <!-- <div class="col-md-9"> -->
                    <a href="<?= base_url('admin/insert_layanan') ?>" class="btn btn-primary mb-n1">
                        <i class="fas fa-plus mr-1"></i>
                        Tambah Layanan
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
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded mb-5">
                        <!-- alert -->
                        <?php if ($this->session->flashdata()) : ?>
                            <div class="flash" data-id="<?= $this->session->flashdata('sukses') ?>"></div>
                        <?php endif ?>
                        <!-- akhir alert -->
                        <div class="card-body table-responsive-sm p-0">
                            <table class="table table-hover text-nowrap text-center text-capitalize" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Layanan</th>
                                        <th>Link</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($result as $hasil) : ?>
                                        <tr>
                                            <td><?php cetak($no++) ?></td>
                                            <td><?php cetak($hasil['jenis_layanan']) ?></td>
                                            <td><?php cetak($hasil['link']) ?></td>
                                            <td><img src="<?= base_url('assets/upload_layanan/') . $hasil['gambar'] ?>" alt="No Image" width="30px" height="30px"></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('admin/update_layanan/') . $hasil['id'] ?>" class="btn btn-warning">Ubah</a>
                                                <a href="<?= base_url('admin/delete_layanan/') . $hasil['id'] ?>" class="btn btn-danger hapus">Hapus</a>
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