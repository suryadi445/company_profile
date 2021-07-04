<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/image/makanan/bakso.jpg') ?>" class="d-block w-100 img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4"><b>Surya_Resto</b></h1>
                <p class="lead"><?= $text ?></p>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a class="btn btn_carousel_daftar btn-lg" href="<?= base_url('auth/index') ?>">Daftar</a>
                        </div>
                        <div class="col-4">
                            <a class="btn btn_carousel_masuk btn-lg" href="<?= base_url('auth/login') ?>" role="button">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/image/makanan/sate_ayam.jpg') ?>" class="d-block w-100 img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4"><b>Surya_Resto</b></h1>
                <p class="lead"><?= $text ?></p>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a class="btn btn_carousel_daftar btn-lg" href="<?= base_url('auth/index') ?>">Daftar</a>
                        </div>
                        <div class="col-4">
                            <a class="btn btn_carousel_masuk btn-lg" href="<?= base_url('auth/login') ?>" role="button">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/image/makanan/martabak_manis.jpg') ?>" class="d-block w-100 img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4"><b>Surya_Resto</b></h1>
                <p class="lead"><?= $text ?></p>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a class="btn btn_carousel_daftar btn-lg" href="<?= base_url('auth/index') ?>">Daftar</a>
                        </div>
                        <div class="col-4">
                            <a class="btn btn_carousel_masuk btn-lg" href="<?= base_url('auth/login') ?>" role="button">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- alert -->
<?php if ($this->session->flashdata()) : ?>
    <div class="flash2" data-id="<?= $this->session->flashdata('gagal') ?>"></div>
<?php endif ?>

<section id="rekomendasi" class="mb-3">
    <h2 class="text-center mt-2">MENU REKOMENDASI</h2>
    <div class="row row-cols-1 row-cols-md-3 pt-2">
        <?php foreach ($random as $rand) : ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="container mt-3">
                        <img src="<?= base_url('assets/upload_menu/') ?><?= $rand['gambar']; ?>" class="gambar_rekomendasi card-img-top img-fluid" alt="gambar rekomendasi" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="card-body" data-aos="fade-up" data-aos-duration="1000">
                            <h5 class="card-title text-center text-capitalize"><?= $rand['nama_menu']; ?></h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-around">
                                <div class="col-6">
                                    <a href="#" class="btn btn_rekomendasi mb-3 modal_detail" data-toggle="modal" data-target="#modal_detail" data-id="<?= $rand['id']; ?>" data-menu="<?= $rand['nama_menu']; ?>" data-harga="<?= $rand['harga_menu']; ?>" data-gambar="<?= $rand['gambar']; ?>" data-keterangan="<?= $rand['keterangan']; ?>">Detail</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn_rekomendasi mb-3 buka_modal" data-toggle="modal" data-target="#modalpesan_makanan" data-id="<?= $rand['id']; ?>" data-menu="<?= $rand['nama_menu']; ?>" data-harga="<?= $rand['harga_menu']; ?>" data-gambar="<?= $rand['gambar']; ?>" data-keterangan="<?= $rand['keterangan']; ?>">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

<section id="loker">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?= base_url('assets/image/join.jpg') ?>" class="gambar_loker card-img-top img-fluid" alt="gambar loker" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    </div>
                    <div class="col-lg-6" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="500">
                        <h1>JADILAH BAGIAN DARI KELUARGA KAMI</h1>
                        <p>Di PT. Surya_Resto, kami lebih dari sekadar bisnis. Kami adalah komunitas tempat Anda berlatih keterampilan hidup dan sebagai wadah untuk mengejar serta mewujudkan impianmu.</p>
                        <div class="text-center mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="700">
                            <a href="<?= base_url('karir') ?>" class="btn btn_merah">Gabung Bersama Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- modal detail -->
<div class="modal fade" id="modal_detail" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <img data-src="assets/upload_menu/" id="gambar" class="gambar_menu card-img-top img-fluid">
                            </div>
                            <div class="col-lg-6 ml-auto">
                                <h3 id="harga_modal"></h3>
                                <p id="keterangan_modal" class="mr-2 text-justify"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times"></i>
                    Kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- modal pesan -->
<div class="modal fade" id="modalpesan_makanan" data-backdrop="static" tabindex="-1" aria-labelledby="modalPesanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPesanLabel">Pesan Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <form>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama" name="nama">
                                        </div>
                                        <div class=" text-danger mb-n4 error offset-sm-3 col-sm-9 error_nama"><?= form_error('nama'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="phone" name="phone" value="<?= set_value('phone') ?>">
                                        </div>
                                        <div class="text-danger mb-n4 error offset-sm-3 col-sm-9 error_phone"><?= form_error('phone'); ?></div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Masukkan Email yang aktif">
                                        </div>
                                        <div class="text-danger mb-n4 error offset-sm-3 col-sm-9 error_email"><?= form_error('email'); ?></div>
                                    </div>
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="pria" checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Pria
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="wanita">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Wanita
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group row">
                                        <label for="waktuPengambilan" class="col-sm-3 col-form-label">Waktu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control datetimepicker" name="waktuPengambilan" autocomplete="off" value="<?= set_value('waktuPengambilan') ?>">
                                            <small class="text-dark">*Waktu pengambilan pesanan</small>
                                            <div class="text-danger mb-n4 error error_waktu"><?= form_error('waktuPengambilan'); ?></div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="container">
                                <div class="form-group row">
                                    <label for="menu" class="col-sm-4 col-form-label">Menu</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control text-center text-capitalize font-weight-bold menu" id="menu" name="menu" autocomplete="off" readonly>
                                        <div class="text-danger mb-n4 error" id="error_menu"><?= form_error('menu'); ?></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="qty-input" class="col-sm-4 col-form-label">Jumlah Menu</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button type="button" class="input-group-text btn-kurang">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                            <input type="text" class="form-control font-weight-bold text-center qty_input" id="qty_input" value="1" readonly>
                                            <div class="input-group-prepend">
                                                <button type="button" class="input-group-text btn-tambah">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="waktuPengambilan" class="col-sm-4 col-form-label">Harga Satuan</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">RP</span>
                                            </div>
                                            <input type="text" class="form-control font-weight-bold text-center harga" id="harga" name="harga" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="waktuPengambilan" class="col-sm-4 col-form-label">Harga Total</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">RP</span>
                                            </div>
                                            <input type="text" class="form-control font-weight-bold text-center text-danger harga_total" name="harga_total" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mt-3">
                                        <button type="button" class="btn btn-success text-center col-sm-12 btn-hitung">
                                            Hitung Harga
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-cancel" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary d-none pesan_menu">Pesan</button>
                        <!-- button loading -->
                        <button class="btn btn-primary d-none" id="btn-loading" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>