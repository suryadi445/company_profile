<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kebijakan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Privacy Police';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/kebijakan');
        $this->load->view('templates/footer');
    }
}
