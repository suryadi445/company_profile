<body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand text-light" href="#">PT. WEBSOLUTION</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#hubungi_kami">Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/image/laptop.jpg') ?>" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4"><b>WEBSOLUTION</b></h1>
                    <p class="lead">Berdiri Sejak Tahun 2010 serta Memiliki Banyak Pengalaman di Proyek Implementasi dan Konsultasi Teknologi Informasi</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/image/teknologi.jpg') ?>" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4"><b>WEBSOLUTION</b></h1>
                    <p class="lead">Berdiri Sejak Tahun 2010 serta Memiliki Banyak Pengalaman di Proyek Implementasi dan Konsultasi Teknologi Informasi</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/image/computer.jpg') ?>" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4"><b>WEBSOLUTION</b></h1>
                    <p class="lead">Berdiri Sejak Tahun 2010 serta Memiliki Banyak Pengalaman di Proyek Implementasi dan Konsultasi Teknologi Informasi</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Kunjungi</a>
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

    <section id="about" class="mb-3">
        <h2 class="text-center">About US</h2>
        <div class="container">
            <div class="row" id="vimi">
                <div class="col-6">
                    <h3 class="text-center">Visi</h3>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sit labore facere quos dolor at impedit, veritatis architecto mollitia rerum commodi voluptatum omnis ab alias, maiores officia sed excepturi vel! Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt deserunt quam veniam, quidem fugiat aliquid accusantium et dicta vel atque expedita qui illo libero quos earum dolorem laudantium laborum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, eos odit voluptatum culpa quis asperiores quisquam eveniet itaque omnis porro adipisci tenetur ea tempore quod? Vel sed facilis voluptate quo?</p>
                    <h3 class="text-center">Misi</h3>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sit labore facere quos dolor at impedit, veritatis architecto mollitia rerum commodi voluptatum omnis ab alias, maiores officia sed excepturi vel! Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt deserunt quam veniam, quidem fugiat aliquid accusantium et dicta vel atque expedita qui illo libero quos earum dolorem laudantium laborum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, eos odit voluptatum culpa quis asperiores quisquam eveniet itaque omnis porro adipisci tenetur ea tempore quod? Vel sed facilis voluptate quo?</p>
                </div>
                <div class="col-6 mt-5" id="gambar">
                    <img src="<?= base_url('assets/image/technology.jpg') ?>" height="480px" width="550px">
                </div>
            </div>
        </div>
    </section>

    <section id="hubungi_kami" class="bg-secondary pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mb-3">SEGERA HUBUNGI KAMI</h3>
                        </div>
                        <div class="row" id="hubungi">
                            <div class="col-12">
                                <div class="col-6 d-inline">
                                    <a href="tel:+6289678468651" class="btn btn-dark">
                                        <i class="fas fa-phone text-light"></i>
                                        Hubungi Kami
                                    </a>
                                </div>
                                <div class="col-6 d-inline">
                                    <a href="https://api.whatsapp.com/send?phone=6289678468651" class="btn btn-success">
                                        <i class="fab fa-whatsapp text-light"></i>
                                        Hubungi Kami
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="mt-3">Untuk Layanan Konsultasi Sistem Integrasi & Data Center</h4>
        </div>
    </section>
    <section id="sejarah" class="pt-3">
        <h2 class="text-center">SEJARAH WEBSOLUTION</h2>
        <div class="container pt-3">
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quod minima illo iste cumque eveniet quaerat exercitationem doloremque delectus repudiandae nam necessitatibus obcaecati quo quam odit, rerum nisi illum vitae unde esse, odio id molestias, aut nulla. Ex error dignissimos vel! Ducimus at corrupti architecto vitae quaerat dolorum omnis, dicta assumenda iste eius mollitia. Cum maxime corporis fuga? At numquam accusantium enim recusandae aut incidunt pariatur fugiat, iure beatae sit! Quae omnis consequatur nesciunt beatae quas rerum dolores quisquam dignissimos nostrum? Omnis vitae id nostrum perspiciatis sint, repellendus ipsum iure aliquid possimus excepturi tempore cupiditate, nemo tenetur veniam maxime non vero doloribus laudantium vel, saepe officiis quaerat? Voluptate itaque iusto dolorum sapiente harum cumque minima nulla veritatis quisquam porro aliquam, earum tempora neque nisi laboriosam ratione excepturi possimus. Doloremque libero, possimus provident consequatur nihil, dolores, sed numquam dignissimos vero est minus totam sunt deserunt. Laboriosam, voluptatem? Odit, cupiditate maxime? Nulla suscipit perferendis placeat dolor nostrum eligendi quod dolores fugit deleniti? Reiciendis voluptates ratione odio voluptatem tenetur fugit quos dolores corrupti minima, debitis quod maiores repudiandae blanditiis rerum consequuntur numquam molestiae saepe nesciunt sit consequatur dicta libero? In facere laudantium nam ullam molestiae error exercitationem voluptate delectus placeat ex? Qui explicabo, porro illo, autem voluptate aut velit nam deserunt veniam nostrum, similique quod incidunt saepe atque? Nam ratione repudiandae, corporis dolores nobis sunt nesciunt quidem explicabo veritatis quo ut iusto, odio fugiat exercitationem vitae dolorum nihil praesentium fuga temporibus vero earum nisi quis qui amet. Quia impedit saepe fugiat quod laboriosam possimus voluptas corrupti molestiae assumenda, velit debitis minima? Possimus maiores aliquid, laboriosam cupiditate numquam, totam ipsam consectetur, ea animi similique at autem ipsum? Sunt nemo ex voluptatem doloribus aliquam quia earum laborum atque modi tempora nulla nam similique cumque dolorem non voluptatum minima libero corporis dignissimos, repellendus explicabo nisi necessitatibus?</p>
        </div>
    </section>

    <section id="contact" class="bg-light pb-3">
        <h2 class="text-center pt-3">Contact</h2>
        <div class="container mt-4">
            <div class="row text-justify">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <p>Untuk informasi lebih lanjut mengenai layanan kami, silahkan hubungi contact person kami : <b>Suryadi</b>
                            </p>

                            <p>Kontak Kami :</p>

                            <p>Telp : (021)-7777777 atau 0896-7846-8651 (WA).</p>
                            <p> Email: suryadi.hhb@gmail.com</p>
                            <p>Alamat Kantor & Training Center : Jl. H. Gadung Rt.02/15 no.20 Pondok Ranji, Ciputat Timur, Tangerang Selatan, Banten.</p>

                            <p class="text-danger">JAM OPERASIONAL : SENIN S/D JUMAT 09.00 - 16.00 WIB</p>

                            <p class="text-danger"> Permintaan informasi mengenai layanan, hanya kami layani saat jam operasional kantor. Begitu juga hal-hal yang terkait dengan kegiatan administrasi di layani hanya saat jam kerja perusahaan.</p>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <form>
                                    <div class="container mt-3">
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="pesan" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary float-right mb-3">Kirim Pesan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col d-flex">
                        <div class="ml-5 mr-5">
                            <a href="https://web.facebook.com/suryadi.hobe/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="ml-5 mr-5">
                            <a href="https://github.com/suryadi445/" target="_blank">
                                <i class="fab fa-github text-dark"></i>
                            </a>
                        </div>
                        <div class="ml-5 mr-5">
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="fab fa-youtube text-danger"></i>
                            </a>
                        </div>
                        <div class="ml-5 mr-5">
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="fab fa-twitter text-info"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white pt-1">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>Copyright <i class="far fa-copyright"></i><?= date(' Y') ?> PT. WEBSOLUTION</p>
                </div>
            </div>
        </div>
    </footer>