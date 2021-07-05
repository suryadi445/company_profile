<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="m-0 mb-1 text-dark">Daftar Outlet</h1>
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
                                        <th>Nama Outlet</th>
                                        <th>Phone Outlet</th>
                                        <th>Alamat Outlet</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($all_outlet as $result) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $result['nama_outlet'] ?></td>
                                            <td><?= $result['phone'] ?></td>
                                            <td><?= $result['alamat'] ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('admin/update_outlet/') . $result['id'] ?>" class="btn btn-warning">Ubah</a>
                                                <a href="<?= base_url('admin/delete_outlet/') . $result['id'] ?>" class="btn btn-danger hapus">Hapus</a>
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