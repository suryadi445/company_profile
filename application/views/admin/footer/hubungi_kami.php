<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Hubungi Kami</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row card shadow-sm p-3 mb-5 bg-white rounded mb-5">
                <div class="col-md-12 ">
                    <table class="table text-center table-striped table-responsive-md" id="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Tanggal Pesan</th>
                                <th scope="col">Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($result as $hasil) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $hasil['nama'] ?></td>
                                    <td><?= $hasil['email'] ?></td>
                                    <td><?= $hasil['phone'] ?></td>
                                    <td><?= $hasil['kategori'] ?></td>
                                    <td><?= $hasil['tanggal_pesan'] ?></td>
                                    <td>
                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal_hubungi_kami<?= $hasil['id'] ?>">Lihat Pesan</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<!-- Modal -->
<?php foreach ($result as $hasil) : ?>
    <div class="modal fade" id="modal_hubungi_kami<?= $hasil['id'] ?>" tabindex="-1" aria-labelledby="modal_label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_label">Pesan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" value="<?= $hasil['email'] ?>" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $hasil['pesan'] ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>