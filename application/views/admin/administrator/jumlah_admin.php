<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Jumlah Admin</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Admin</h3>
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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($all_admin as $result) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?php cetak($result['nama']); ?></td>
                                            <td><?php cetak($result['email']); ?></td>
                                            <td><?php cetak($result['phone']); ?></td>
                                            <td><?php cetak($result['gender']); ?></td>
                                            <td>
                                                <div class="row justify-content-around">
                                                    <a href="<?= base_url(); ?>admin/edit_admin/<?= $result['id']  ?>" class="badge badge-warning">Ubah</a>
                                                    <a href="<?= base_url(); ?>admin/hapus_admin/<?= $result['id']  ?>" class=" badge badge-danger hapus">Hapus</a>
                                                </div>
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