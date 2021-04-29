<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function hubungi_kami()
    {
        $data['judul'] = 'Hubungi Kami';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/hubungi_kami');
        $this->load->view('templates/footer');
    }
}
