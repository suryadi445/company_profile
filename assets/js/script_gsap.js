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
const contactGambarContact= document.getElementById('#contact #gambar_contact .col-5')

if(contactGambarContact){
        gsap.from("#contact #gambar_contact .col-5", {
        y: -100,
        opacity: 0,
        ease: 'slow',
        duration: 2,
        delay: 0.5
    });
}

// akhir halaman hubung kami

// halaman promo
const promoH1 = document.getElementById('#promo h1')
    if(promoH1){
        gsap.to('#promo h1', {
        duration: 3,
        text: 'PROMO SAAT INI'
    })
}

// akhir halaman promo

// halaman karir
const jumbotron_karir = document.getElementById('#jumbotron_karir')
if(jumbotron_karir){
    gsap.from('#jumbotron_karir', {
        y: -100,
        opacity: 0,
        ease: 'slow',
        duration: 2,
        delay: 0.5
    })
}

const karir_body = document.getElementById('#karir_body')
if(karir_body){
    gsap.to('#karir_body h1', {
        duration: 3,
        delay: 2,
        text: 'Nilai-Nilai Perusahaan'
    })
}
// akhir halaman karir

// halaman csr
const jumbotron_csr = document.getElementById('#jumbotron_csr')
if(jumbotron_csr){
    gsap.from('#jumbotron_csr', {
        y: -100,
        opacity: 0,
        ease: 'slow',
        duration: 2,
        delay: 0.5
    })
}
const jumbotron_csr_h2 = document.getElementById('#jumbotron_csr h2')
if(jumbotron_csr_h2){
    gsap.to('#jumbotron_csr h2', {
        duration: 3,
        delay: 2,
        text: 'Gerakan kami untuk membuat perbedaan di komunitas'
    })
}
// akhir halaman csr

// halaman layanan
const jumbotron_layanan= document.getElementById('#jumbotron_layanan')
if(jumbotron_layanan){
    gsap.from('#jumbotron_layanan', {
        y: -100,
        opacity: 0,
        ease: 'slow',
        duration: 2,
        delay: 0.5
    })
}

const jumbotron_layanan_h2 = document.getElementById('#jumbotron_layanan h2')
if(jumbotron_layanan_h2){
    gsap.to('#jumbotron_layanan h2', {
        duration: 2,
        delay: 2,
        text: 'Layanan Kami'
    })
}
// akhir halaman layanan

//halaman tentang kami 
const jumbotron_aboutUs= document.getElementById('jumbotron_aboutUs')
if(jumbotron_aboutUs){
    gsap.from('#jumbotron_aboutUs', {
        y: -100,
        opacity: 0,
        ease: 'slow',
        duration: 2,
        delay: 0.5
    })
}

const jumbotron_aboutUs_h2 = document.getElementById('#jumbptrpn_aboutUs h2')
if(jumbotron_aboutUs_h2){
    gsap.to('#jumbotron_aboutUs h2', {
        duration: 2,
        delay: 2,
        text: 'Tentang Kami',
        fontSize: 50,
        color: 'gold'
    })
}
// akhir halaman kami

// halaman snk
const snk_h1 = document.getElementById('#snk h1') 
if(snk_h1){
    gsap.to('#snk h1', {
        duration: 2,
        delay: 0.5,
        text: 'SYARAT & KETENTUAN',
    })
}
// akhir halaman snk

AOS.init();

gsap.from("nav", {
    duration: 1,
    y: -100,
    opacity: 0,
    ease: 'bounce'
});

const carousel_caption = document.querySelector('.carousel-caption .display-4')
if(carousel_caption){
    gsap.from(".carousel-caption .display-4", {
        x: 700,
        opacity: 0,
        color: 'gold',
        ease: 'elastic',
        duration: 1,
        delay: 1.2
    });
}
gsap.registerPlugin(TextPlugin);

// halaman home
const lead = document.querySelector('.lead')
if(lead){
    gsap.to('.lead', {
        duration: 3,
        delay: 2,
        text: `Berdiri Sejak Tahun 2010 serta Memiliki Banyak Pengalaman di bidang kuliner yang akan memberikan citarasa khas lidah masyarakat Indonesia.
        `
    })
}

const carousel_inner = document.querySelector('.carousel-inner a')
if(carousel_inner){
    gsap.from(".carousel-inner a", {
        x: 700,
        opacity: 0,
        ease: 'elastic',
        duration: 1,
        delay: 1.5
    });
}
// akhir halaman home

// halaman menu
const text_jumbotron = document.getElementById('#text_jumbotron')
if(text_jumbotron){
    gsap.from("#text_jumbotron", {
        duration: 2,
        delay: 1,
        x: -100,
        opacity: 0,
        ease: "elastic"
    })
}

const jumbotron_menu_img = document.getElementById('#jumbotron_menu img')
if(jumbotron_menu_img){
    gsap.from("#jumbotron_menu img", {
        duration: 2,
        delay: 2,
        x: 100,
        opacity: 0,
    })
}
// akhir halaman menu
