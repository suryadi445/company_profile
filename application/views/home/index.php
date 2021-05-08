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
                <p class="lead"></p>
                <a class="btn btn_carousel_daftar btn-lg" href="#" role="button" data-toggle="modal" data-target="#modal_daftar">Daftar</a>
                <a class="btn btn_carousel_masuk btn-lg" href="#" role="button">Masuk</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/image/makanan/sate_ayam.jpg') ?>" class="d-block w-100 img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4"><b>Surya_Resto</b></h1>
                <p class="lead">Berdiri Sejak Tahun 2010 serta Memiliki Banyak Pengalaman di bidang kuliner yang akan memberikan citarasa khas lidah masyarakat Indonesia.</p>
                <a class="btn btn_carousel_daftar btn-lg" href="#" role="button" data-toggle="modal" data-target="#modal_daftar">Daftar</a>
                <a class="btn btn_carousel_masuk btn-lg" href="#" role="button">Masuk</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/image/makanan/martabak_manis.jpg') ?>" class="d-block w-100 img-fluid">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4"><b>Surya_Resto</b></h1>
                <p class="lead">Berdiri Sejak Tahun 2010 serta Memiliki Banyak Pengalaman di bidang kuliner yang akan memberikan citarasa khas lidah masyarakat Indonesia.</p>
                <a class="btn btn_carousel_daftar btn-lg" href="#" role="button" data-toggle="modal" data-target="#modal_daftar">Daftar</a>
                <a class="btn btn_carousel_masuk btn-lg" href="#" role="button">Masuk</a>
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

<!-- <div><?= $this->session->flashdata() ?></div> -->

<section id="rekomendasi" class="mb-3">
    <h2 class="text-center">Rekomendasi</h2>
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card h-100">
                <div class="container mt-3">
                    <img src="<?= base_url('assets/image/makanan/martabak_telor.jpg') ?>" class="gambar_rekomendasi card-img-top img-fluid" alt="gambar rekomendasi" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1000">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn_rekomendasi mb-3 float-left" data-toggle="modal" data-target="#exampleModal">Detail Menu</a>
                        <a href="#" class="btn btn_rekomendasi mb-3 float-right">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="container mt-3">
                    <img src="<?= base_url('assets/image/makanan/soto_ayam.jpg') ?>" class="gambar_rekomendasi card-img-top img-fluid" alt="gambar rekomendasi" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="500">
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn_rekomendasi mb-3 float-left" data-toggle="modal" data-target="#exampleModal">Detail Menu</a>
                        <a href="#" class="btn btn_rekomendasi mb-3 float-right">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="container mt-3">
                    <img src="<?= base_url('assets/image/makanan/mie_ayam.jpg') ?>" class="gambar_rekomendasi card-img-top img-fluid" alt="gambar rekomendasi" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="1000">
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn_rekomendasi mb-3 float-left" data-toggle="modal" data-target="#exampleModal">Detail Menu</a>
                        <a href="#" class="btn btn_rekomendasi mb-3 float-right">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="container mt-3">
                    <img src="<?= base_url('assets/image/makanan/somay.jpg') ?>" class="gambar_rekomendasi card-img-top img-fluid" alt="gambar rekomendasi" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1000">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn_rekomendasi mb-3 float-left" data-toggle="modal" data-target="#exampleModal">Detail Menu</a>
                        <a href="#" class="btn btn_rekomendasi mb-3 float-right">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="container mt-3">
                    <img src="<?= base_url('assets/image/makanan/jus_alpukat.jpg') ?>" class="gambar_rekomendasi card-img-top img-fluid" alt="gambar rekomendasi" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="500">
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn_rekomendasi mb-3 float-left" data-toggle="modal" data-target="#exampleModal">Detail Menu</a>
                        <a href="#" class="btn btn_rekomendasi mb-3 float-right">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100">
                <div class="container mt-3">
                    <img src="<?= base_url('assets/image/makanan/pempek.jpg') ?>" class="gambar_rekomendasi card-img-top img-fluid" alt="gambar rekomendasi" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-delay="1000">
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn_rekomendasi mb-3 float-left" data-toggle="modal" data-target="#exampleModal">Detail Menu</a>
                        <a href="#" class="btn btn_rekomendasi mb-3 float-right">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
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
                            <a href="" class="btn btn_merah">LIHAT LOWONGAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PAKET ABC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?= base_url('assets/image/hello.jpg') ?>" class="gambar_rekomendasi card-img-top img-fluid" alt="gambar rekomendasi">
                            </div>
                            <div class="col-lg-6 ml-auto">
                                <h3 id="harga_modal">Rp. 30.000,-</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sapiente libero at est commodi voluptates hic fugit omnis? Voluptatum dolorem saepe placeat tempora eveniet repellendus rem cumque voluptatibus dignissimos temporibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times"></i>
                    Kembali</button>
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i>
                    Pesan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal daftar-->
<div class="modal fade" id="modal_daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg font-weight-bold">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?= base_url('assets/image/registrasi.jpg') ?>" width="100%" class=" gambar_daftar">
                            </div>
                            <div class="col-lg-8">
                                <div class="card shadow-sm p-3 bg-white rounded">
                                    <form action="<?= base_url('auth/registrasi') ?>" method="POST">
                                        <div class="form-group row">
                                            <label for="nama_daftar" class="col-sm-3 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control font-weight-bold" placeholder="Masukkan Nama Anda" name="nama" id="nama_daftar">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_daftar" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control font-weight-bold" placeholder="Masukkan email Anda" name="email" id="email_daftar">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone_daftar" class="col-sm-3 col-form-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control font-weight-bold" placeholder="Masukkan No Handphone Anda" name="phone" id="phone_daftar">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password_daftar" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control font-weight-bold" placeholder="Masukkan Password Anda" name="password" id="password_daftar">
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="text-left">
                                                    <input type="checkbox" class="form-checkbox" id="checkbox">
                                                    Show Password
                                                </p>
                                            </div>
                                        </div>
                                        <fieldset class="form-group mt-n4">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="pria" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="wanita">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>