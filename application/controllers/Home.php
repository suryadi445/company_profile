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
        // untuk tampilan carousel
        $data['text_carousel_awal']       = $this->Admin_model->get_text('carousel');
        $data['text']                     = $data['text_carousel_awal']['keterangan'];

        $data['judul'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function pesan_menu()
    {
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $phone      = $this->input->post('phone');
        $gender     = $this->input->post('gender');
        $waktu      = $this->input->post('waktuPengambilan');

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('waktuPengambilan', 'Waktu Pengambilan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $error = [
                'nama'              => (form_error('nama', '<p>', '</p>')),
                'email'             => (form_error('email', '<p>', '</p>')),
                'phone'             => (form_error('phone', '<p>', '</p>')),
                'gender'            => (form_error('gender', '<p>', '</p>')),
                'waktuPengambilan'  => (form_error('waktuPengambilan', '<p>', '</p>')),
            ];
            echo json_encode($error);
        } else {
            $data   = [
                'nama'          => $nama,
                'email'         => $email,
                'phone'         => $phone,
                'gender'        => $gender,
                'tgl_input'     => $waktu
            ];
            $query  = $this->Admin_model->insert('tbl_pesanan', $data);
            echo json_encode($query);
        }
    }
}
