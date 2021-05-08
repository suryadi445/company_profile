<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function registrasi()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $gender = $this->input->post('gridRadios');

        $this->form_validation->set_rules('nama', 'Nama, required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('gridRadios', 'gender', 'required');

        $data = [
            'nama'     => $nama,
            'email'    => $email,
            'phone'    => $phone,
            'password' => $password,
            'gender'   => $gender
        ];

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Home';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('home/index');
            $this->load->view('templates/footer');
        } else {
            $this->Auth_model->insert($data);
            redirect('home');
        }
    }
}
