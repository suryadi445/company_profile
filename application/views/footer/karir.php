<section id="jumbotron_karir">
    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url('assets/image/makanan/mie_ayam.jpg') ?>" class="d-block w-100" height="600px">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url('assets/image/makanan/mie_ayam.jpg') ?>" class="d-block w-100" height="600px">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url('assets/image/makanan/mie_ayam.jpg') ?>" class="d-block w-100" height="600px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="karir_body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <h1 class="text-center font-weight-bold"></h1>
                        <p class="text-center" data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-out">Di Surya_Resto kami saling menghargai masing-masing. Sebagai komunitas yang ketat, kami beroperasional dengan mengikuti tiga nilai:
                        </p>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-deck">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded" data-aos="fade-up" data-aos-duration="2000">
                        <img src="<?= base_url('assets/image/family.jpg') ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="text-center font-weight-bold">Keluarga dan teman</h4>
                            <p class="card-text text-center">Tim kami saling memberi dukungan kepad satu sama lain. Sebagai komunitas, kami maju bersama dan saling menghormati.</p>
                        </div>
                    </div>
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                        <img src="<?= base_url('assets/image/flexible.jpg') ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="text-center font-weight-bold">Fleksibilitas</h4>
                            <p class="card-text text-center">Nikmati jadwal kerja yang fleksibel. Anda dapat mengatur jadwal kerja sesuai dengan keperluanmu sendiri-dengan tetap mengacu kepada peraturan perusahaan.</p>
                        </div>
                    </div>
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000">
                        <img src="<?= base_url('assets/image/future.png') ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="text-center font-weight-bold">Masa Depan</h4>
                            <p class="card-text text-center">Di Surya_Resto, Kami akan mendorong setiap langkah yang Anda ambil dan menyediakan peluang untuk mengembangkan potensi diri debagai profesional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="karir_footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1200">
                        <img src="<?= base_url('assets/image/teams.png') ?>" width="100%">
                    </div>
                    <div class="col-lg-6" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1200">
                        <h1 class="text-capitalize font-weight-bold text-center mt-3">bergabunglah dengan kami</h1>
                        <div class="row">
                            <div class="col-lg-12 text-center mt-3">
                                <h4 class="font-weight-normal">Kami ingin memperluas tim kami dengan orang-orang suportif dan positif. Kenali tim kami lebih baik.</h4>
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500">
                                <button class="btn btn-danger" data-toggle="modal" data-target="#daftar_karir">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="daftar_karir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DAFTAR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label font-weight-bold">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control shadow-sm p-3 bg-white rounded" placeholder="Masukkan nama Anda" id="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label font-weight-bold">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control shadow-sm p-3 bg-white rounded" placeholder="Masukkan email Anda" id="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label font-weight-bold">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control shadow-sm p-3 bg-white rounded" placeholder="Masukkan nomor telepon Anda" id="phone">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0 font-weight-bold">Gender</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input shadow-sm p-3 bg-white rounded" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input shadow-sm p-3 bg-white rounded" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Kirim</button>
            </div>
        </div>
    </div>
</div>