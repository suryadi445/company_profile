<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hubungi_kami extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Hubungi Kami';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/hubungi_kami');
        $this->load->view('templates/footer');
    }
}
