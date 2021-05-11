<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/index');
        $this->load->view('admin/templates/footer');
    }

    public function home_carousel()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/home/carousel');
        $this->load->view('admin/templates/footer');
    }

    public function home_menu()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/home/menu');
        $this->load->view('admin/templates/footer');
    }

    public function tentang_kami()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/tentang_kami/about-us');
        $this->load->view('admin/templates/footer');
    }

    public function ganti_password()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/administrator/ganti_password');
        $this->load->view('admin/templates/footer');
    }
    public function jumlah_admin()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/administrator/jumlah_admin');
        $this->load->view('admin/templates/footer');
    }
}
