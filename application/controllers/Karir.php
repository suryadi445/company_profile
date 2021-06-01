<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['judul'] = 'Karir';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('footer/karir');
        $this->load->view('templates/footer');
    }

    public function insert_karir()
    {
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $phone      = $this->input->post('phone');
        $gender     = $this->input->post('gender');

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');

        if ($this->form_validation->run() == false) {
            // gagal validasi
            $data = array('error_message' => validation_errors());
        } else {
            // validasi berhasil
            $data   = [
                'nama'          => $nama,
                'email'         => $email,
                'phone'         => $phone,
                'gender'        => $gender,
                'tanggal_input' => date('yyyy-mm-dd')
            ];

            $query = $this->Admin_model->insert('karir', $data);
            echo json_encode($query);
        }
    }
}
