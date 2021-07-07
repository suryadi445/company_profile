<body id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <!-- <div class="container"> -->
        <a class="navbar-brand text-light ml-3" href="#"><?= $perusahaan; ?></a>
        <div class="btn-group">
            <button type="button" class="btn gold dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user mr-2"></i>
                <?php if ($this->session->userdata('nama')) { ?>
                    <span class="text-capitalize"><?= $this->session->userdata('nama'); ?></span>
                <?php } else { ?>
                    Login
                <?php } ?>
            </button>
            <div class="dropdown-menu">
                <?php if ($this->session->userdata('nama')) { ?>
                    <a class="dropdown-item gold logout" href="<?= base_url('auth/logout'); ?>">Logout</a>
                <?php } else { ?>
                    <a class="dropdown-item gold" href="<?= base_url('auth/login'); ?>">Masuk</a>
                <?php } ?>
            </div>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-2">
                <li class="nav-item">
                    <?php if ($this->uri->segment(1) == 'home') { ?>
                        <a class="nav-link text-warning" href="<?= base_url('home') ?>">Home<span class="sr-only">(current)</span></a>
                    <?php } else { ?>
                        <a class="nav-link text-light" href="<?= base_url('home') ?>">Home<span class="sr-only">(current)</span></a>
                    <?php } ?>
                </li>
                <span class="garis_vertikal"> | </span>
                <li class="nav-item">
                    <?php if ($this->uri->segment(1) == 'menu') { ?>
                        <a class="nav-link text-warning" href="<?= base_url('menu') ?>">Menu<span class="sr-only">(current)</span></a>
                    <?php } else { ?>
                        <a class="nav-link text-light" href="<?= base_url('menu') ?>">Menu<span class="sr-only">(current)</span></a>
                    <?php } ?>
                </li>
                <span class="garis_vertikal"> | </span>
                <li class="nav-item">
                    <?php if ($this->uri->segment(1) == 'outlet') { ?>
                        <a class="nav-link text-warning" href="<?= base_url('outlet') ?>">Outlet<span class="sr-only">(current)</span></a>
                    <?php } else { ?>
                        <a class="nav-link text-light" href="<?= base_url('outlet') ?>">Outlet<span class="sr-only">(current)</span></a>
                    <?php } ?>
                </li>
                <span class="garis_vertikal"> | </span>
                <li class="nav-item">
                    <?php if ($this->uri->segment(1) == 'promo') { ?>
                        <a class="nav-link text-warning" href="<?= base_url('promo') ?>">Promo<span class="sr-only">(current)</span></a>
                    <?php } else { ?>
                        <a class="nav-link text-light" href="<?= base_url('promo') ?>">Promo<span class="sr-only">(current)</span></a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </nav>