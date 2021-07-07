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

    public function index()
    {
        sudah_login();

        $data['judul'] = 'Registrasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('auth/index_registrasi');
        $this->load->view('templates/footer');
    }

    public function registrasi()
    {
        sudah_login();

        $nama                = htmlspecialchars($this->input->post('nama', true));
        $email               = htmlspecialchars($this->input->post('email', true));
        $phone               = htmlspecialchars($this->input->post('phone', true));
        $password            = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $password2           = password_hash($this->input->post('password2'), PASSWORD_DEFAULT);
        $gender              = $this->input->post('gridRadios', true);

        $terima_password     = $this->input->post('password');
        if ($terima_password === 'adminRestoranPusat') {
            $status          = 'admin';
        } else {
            $status          = 'user';
        };

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_users.email]');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric|is_unique[tbl_users.phone]');
        $this->form_validation->set_rules('gridRadios', 'Gender', 'required');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[6]|matches[password2]',
            [
                'matches'    => 'Password tidak sama',
                'min_length' => 'Password minimal 6 karakter'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Konfirmasi Password',
            'required|trim|min_length[6]|matches[password]',
            [
                'matches'    => 'Password tidak sama',
                'min_length' => 'Password minimal 6 karakter'
            ]
        );

        // data yg dikirim ke database untuk proses insert
        $data = [
            'nama'     => $nama,
            'email'    => $email,
            'phone'    => $phone,
            'password' => $password,
            'gender'   => $gender,
            'status'   => $status
        ];

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi';
            $this->session->set_flashdata('flash', 'Anda belum registrasi');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('auth/registrasi');
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('sukses', 'Terima kasih sudah registrasi. Silakan login');
            $this->Auth_model->insert($data);
            redirect('auth/login');
        }
    }

    // login
    public function login()
    {
        sudah_login();

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

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
        $email          = htmlspecialchars($this->input->post('email', true));
        $password       = htmlspecialchars($this->input->post('password', true));

        $user           = $this->Auth_model->getRow($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id'        => $user['id'],
                    'email'     => $user['email'],
                    'nama'      => $user['nama'],
                    'status'    => $user['status']
                ];

                if ($user['status'] == 'user') {
                    $user_login = $user['nama'];
                    $this->session->set_flashdata('sukses', 'Selamat datang ' . $data['nama']);
                    $this->session->set_userdata('nama', $user_login);
                    redirect('home');
                } else {
                    $this->session->set_flashdata('flash', 'Selamat datang ' . $data['nama']);
                    $this->session->set_userdata($data);
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('flash', 'Password yang anda masukkan salah');

                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('flash', 'Anda belum terdaftar, mohon registrasi terlebih dahulu..');
            redirect('auth/login');
        }
    }

    // logout
    public function logout()
    {
        $array  = [
            'id', 'email', 'nama', 'status'
        ];

        $this->session->unset_userdata($array);
        $this->session->sess_destroy();

        redirect('auth/login');
    }
}
