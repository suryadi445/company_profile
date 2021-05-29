<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
    }


    public function index()
    {
        $data['judul'] = 'Menu';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }
}
