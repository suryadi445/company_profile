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
        $nama = htmlspecialchars($this->input->post('nama', true));
        $email = htmlspecialchars($this->input->post('email', true));
        $phone = htmlspecialchars($this->input->post('phone', true));
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $gender = $this->input->post('gridRadios', true);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[6]',
            [
                'min_length' => 'Password minimal 6 karakter'
            ]
        );
        $this->form_validation->set_rules('gridRadios', 'Gender', 'required');

        $data = [
            'nama'     => $nama,
            'email'    => $email,
            'phone'    => $phone,
            'password' => $password,
            'gender'   => $gender
        ];

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/footer');
        } else {
            $this->Auth_model->insert($data);
            redirect('auth/login');
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->Auth_model->getRow($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'nama' => $user['nama']
                ];

                $this->session->set_flashdata('flash', 'Selamat datang ' . $data['nama']);
                redirect('admin');
            } else {
                $this->session->set_flashdata('flash', 'Password yang anda masukkan salah');

                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('flash', 'Anda belum terdaftar, mohon registrasi terlebih dahulu..');
            redirect('auth/login');
        }
    }
}
