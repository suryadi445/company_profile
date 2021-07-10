<?php
$data['row']   = $this->db->get('company')->row_array();
$nama_company  = $data['row']['nama_company'];
$gambar        = $data['row']['gambar'];
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link pr-0">
        <img src="<?= base_url('assets/upload_company/') ?><?= $gambar; ?>" class="brand-image img-fluid" style="width:50px">
        <span class="brand-text font-weight-light ml-n2 text-white"><?= $nama_company; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <p class="user-panel mt-3 pb-3 mb-3 d-flex mr-3 ml-2">
            <span class="brand-text text-uppercase font-weight-light text-white"><?= $this->session->userdata('nama') ?></span>
        </p>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Halaman Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/home_carousel') ?>" class="nav-link font-weight-bold text-primary">
                                <i class=" fas fa-angle-right nav-icon"></i>
                                <p>Carousel</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Halaman Menu
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/semua_menu') ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Semua Menu</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            Halaman Outlet
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/tambah_outlet'); ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Tambah Outlet</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/daftar_outlet'); ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Daftar Outlet</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-search-dollar"></i>
                        <p>
                            Halaman Promo
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/semua_promo') ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Semua Promo</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-shoe-prints"></i>
                        <p>
                            Footer
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/hubungi_kami') ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Hubungi Kami</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/karir') ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Karir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/layanan') ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/tentang_kami') ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Tentang Kami</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/csr') ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>CSR</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Admin</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Admin Control
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/ganti_password') ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Ganti Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/jumlah_admin') ?>" class="nav-link font-weight-bold text-primary">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Jumlah Admin</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Restoran</li>
                <li class="nav-item has-treeview">
                    <a href="<?= base_url('admin/daftar_company'); ?>" class="nav-link text-white">
                        <i class="nav-icon fas fa-hotel"></i>
                        <p>
                            Perusahaan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>