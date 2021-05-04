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

    public function tentang_kami()
    {
        $data['judul'] = 'Tentang Kami';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/tentang_kami');
        $this->load->view('templates/footer');
    }

    public function karir()
    {
        $data['judul'] = 'Karir';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/karir');
        $this->load->view('templates/footer');
    }

    public function csr()
    {
        $data['judul'] = 'CSR';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/csr');
        $this->load->view('templates/footer');
    }

    public function layanan()
    {
        $data['judul'] = 'Layanan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/layanan');
        $this->load->view('templates/footer');
    }

    public function kebijakan()
    {
        $data['judul'] = 'Privacy Police';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/kebijakan');
        $this->load->view('templates/footer');
    }

    public function snk()
    {
        $data['judul'] = 'Terms Conditions';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/snk');
        $this->load->view('templates/footer');
    }
}
