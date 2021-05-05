<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_kami extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Tentang Kami';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/tentang_kami');
        $this->load->view('templates/footer');
    }
}
