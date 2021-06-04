<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Karir</h1>
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
                                <th scope="col">Gender</th>
                                <th scope="col">Tanggal Mendaftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($result as $hasil) : ?>
                                <tr>
                                    <th scope="row"><?php cetak($no++) ?></th>
                                    <td><?php cetak($hasil['nama']) ?></td>
                                    <td><?php cetak($hasil['email']) ?></td>
                                    <td><?php cetak($hasil['phone']) ?></td>
                                    <td><?php cetak($hasil['gender']) ?></td>
                                    <td><?php cetak($hasil['tanggal_input']) ?></td>
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