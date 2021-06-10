<section class="pt-5" id="atas_footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class=" ml-3 mb-3" id="surya_resto">Surya_Resto</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="col-lg-12 mt-2">
                                    <a href="<?= base_url('hubungi_kami') ?>" class="text-capitalized list_about">Hubungi kami</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="col-lg-12 mt-2">
                                    <a href="<?= base_url('tentang_kami') ?>" class="text-capitalized list_about">Tentang Kami</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="col-lg-12 mt-2">
                                    <a href="<?= base_url('karir') ?>" class="text-capitalized list_about">Karier</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="col-lg-12 mt-2">
                                    <a href="<?= base_url('csr') ?>" class="text-capitalized list_about">CSR</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="col-lg-12 mt-2">
                                    <a href="<?= base_url('layanan') ?>" class="text-capitalized list_about">Layanan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="<?= base_url('assets/image/logo_resto.png') ?>" class="gambar_footer card-img-top" alt="gambar footer">
                    </div>
                    <div class="col-lg-4">
                        <div class="container">
                            <h3 class="text-center mb-3" id="ikuti_kami">Ikuti Kami</h3>
                            <div class="row d-flex justify-content-between" id="row_logo">
                                <div class="col-sm-12 text-center">
                                    <a href="https://facebook.com/suryadi.hobe/" class="mr-5">
                                        <i class="fab fa-facebook-f logo" id="facebook"></i>
                                    </a>
                                    <a href="https://www.instagram.com/suryadi_moksc/" class="mr-5">
                                        <i class="fab fa-instagram logo" id="instagram"></i>
                                    </a>
                                    <a href="https://www.twitter.com/" class="mr-5">
                                        <i class=" fab fa-twitter logo" id="twitter"></i>
                                    </a>
                                    <a href=" https://www.youtube.com/">
                                        <i class="fab fa-youtube logo" id="youtube"></i>
                                    </a>
                                </div>
                                <div class="col-lg-12 text-center mt-3" id="wrap_email">
                                    <a href="">
                                        <i class="fas fa-envelope text-center logo" id="email">
                                        </i>
                                    </a>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <p class="text_email">Suryadi.hhb@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<footer class="mt-auto">
    <div class="container-fluid">
        <div class="row ml-1 mt-1 pb-1">
            <div class="col-lg-12 text-left">
                <div class="row" id="pt_suryadi">
                    <div class="col-lg-6">
                        <i class="far fa-copyright"></i>
                        PT. SURYADI INDONESIA
                    </div>
                    <div class="col-lg-6">
                        <div class="container">
                            <div class="row float-right">
                                <a href="<?= base_url('kebijakan') ?>" class="mr-3" id="kebijakan">Kebijakan Privasi</a>
                                <a href="<?= base_url('snk') ?>" class="mr-3" id="syarat">Syarat & Ketentuan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="<?= base_url('assets/adminLTE/') ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/adminLTE/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url('assets/adminLTE/') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/adminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- datatable -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/adminLTE/') ?>plugins/toastr/toastr.min.js"></script>
<!-- aos library -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- gsap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
<!-- datetime -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="<?= base_url('assets/js/script.js') ?>"></script>
<script src="<?= base_url('assets/js/alert.js') ?>"></script>

<script>
    // halaman menu
    const gambar_menu = document.querySelectorAll('.gambar_menu');

    const nama_menu = document.querySelectorAll('.nama_menu');

    gambar_menu.forEach((img, i) => {
        img.dataset.aos = 'fade-down', img.dataset.aosDelay = i * 100, img.dataset.aosDuration = 900
    });

    nama_menu.forEach((text, i) => {
        text.dataset.aos = 'fade-down', text.dataset.aosDelay = i * 10, text.dataset.aosDuration = 900
    })
    // akhir halaman menu

    // halaman hubungi kami
    gsap.from("#contact #gambar_contact .col-5", {
        y: -100,
        opacity: 0,
        ease: 'slow',
        duration: 2,
        delay: 0.5
    });
    // akhir halaman hubung kami

    // halaman promo
    gsap.to('#promo h1', {
        duration: 3,
        text: 'PROMO SAAT INI'
    })
    // akhir halaman promo

    // halaman karir
    gsap.from('#jumbotron_karir', {
        y: -100,
        opacity: 0,
        ease: 'slow',
        duration: 2,
        delay: 0.5
    })

    gsap.to('#karir_body h1', {
        duration: 3,
        delay: 2,
        text: 'Nilai-Nilai Perusahaan'
    })
    // akhir halaman karir

    // halaman csr
    gsap.from('#jumbotron_csr', {
        y: -100,
        opacity: 0,
        ease: 'slow',
        duration: 2,
        delay: 0.5
    })

    gsap.to('#jumbotron_csr h2', {
        duration: 3,
        delay: 2,
        text: 'Gerakan kami untuk membuat perbedaan di komunitas'
    })
    // akhir halaman csr

    // halaman layanan
    gsap.from('#jumbotron_layanan', {
        y: -100,
        opacity: 0,
        ease: 'slow',
        duration: 2,
        delay: 0.5
    })

    gsap.to('#jumbotron_layanan h2', {
        duration: 2,
        delay: 2,
        text: 'Layanan Kami'
    })
    // akhir halaman layanan

    //halaman tentang kami 
    gsap.from('#jumbotron_aboutUs', {
        y: -100,
        opacity: 0,
        ease: 'slow',
        duration: 2,
        delay: 0.5
    })

    gsap.to('#jumbotron_aboutUs h2', {
        duration: 2,
        delay: 2,
        text: 'Tentang Kami',
        fontSize: 50,
        color: 'gold'
    })
    // akhir halaman kami

    // halaman snk
    gsap.to('#snk h1', {
        duration: 2,
        delay: 0.5,
        text: 'SYARAT & KETENTUAN',
    })
    // akhir halaman snk

    AOS.init();
</script>

<script>
    gsap.from("nav", {
        duration: 1,
        y: -100,
        opacity: 0,
        ease: 'bounce'
    });

    gsap.from(".carousel-caption .display-4", {
        x: 700,
        opacity: 0,
        color: 'gold',
        ease: 'elastic',
        duration: 1,
        delay: 1.2
    });
    gsap.registerPlugin(TextPlugin);

    // halaman home
    gsap.to('.lead', {
        duration: 3,
        delay: 2,
        text: `Berdiri Sejak Tahun 2010 serta Memiliki Banyak Pengalaman di bidang kuliner yang akan memberikan citarasa khas lidah masyarakat Indonesia.
        `
    })
    gsap.from(".carousel-inner a", {
        x: 700,
        opacity: 0,
        ease: 'elastic',
        duration: 1,
        delay: 1.5
    });
    // akhir halaman home

    // halaman menu
    gsap.from("#text_jumbotron", {
        duration: 2,
        delay: 1,
        x: -100,
        opacity: 0,
        ease: "elastic"
    });
    gsap.from("#jumbotron_menu img", {
        duration: 2,
        delay: 2,
        x: 100,
        opacity: 0,
    });
    // akhir halaman menu
</script>


</body>

</html>