<body id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <!-- <div class="container"> -->
        <a class="navbar-brand text-light ml-3" href="#">PT. SURYA_RESTO</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-2">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="<?= base_url('home') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <span class="garis_vertikal"> | </span>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= base_url('menu') ?>">Menu</a>
                </li>
                <span class="garis_vertikal"> | </span>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= base_url('outlet') ?>">Outlet</a>
                </li>
                <span class="garis_vertikal"> | </span>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= base_url('promo') ?>">Promo</a>
                </li>
            </ul>
        </div>
    </nav>