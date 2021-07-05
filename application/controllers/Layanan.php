<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        sudah_login();
    }

    public function index()
    {
        $data['judul'] = 'Layanan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/layanan');
        $this->load->view('templates/footer');
    }
}
