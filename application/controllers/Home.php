<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        // mengambil baris terakhir dari database
        $data['text_carousel_awal']       = $this->Admin_model->get_text();
        $data['text']                     = $data['text_carousel_awal']['keterangan'];

        $data['judul'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
