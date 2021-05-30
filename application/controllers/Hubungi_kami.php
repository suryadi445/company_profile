<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hubungi_kami extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required|max_length[1000]');

        $nama           = $this->input->post('nama');
        $email          = $this->input->post('email');
        $phone          = $this->input->post('phone');
        $kategori       = $this->input->post('kategori');
        $pesan          = $this->input->post('pesan');

        $data               = [
            'nama'          => $nama,
            'email'         => $email,
            'phone'         => $phone,
            'kategori'      => $kategori,
            'pesan'         => $pesan,
            'tanggal_pesan' => date('yyyy-mm-dd')
        ];

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Hubungi Kami';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('footer/hubungi_kami', $data);
            $this->load->view('templates/footer');
        } else {
            // $this->Admin_model->insert('email', $data);
            $this->session->set_flashdata('sukses', 'Terima kasih, pesan Anda sudah terkirim');

            redirect('hubungi_kami');
        }
    }
}
