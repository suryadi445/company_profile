<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Csr extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'CSR';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/csr');
        $this->load->view('templates/footer');
    }
}
