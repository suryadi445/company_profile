<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/index');
        $this->load->view('admin/templates/footer');
    }

    public function home_carousel()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/home/carousel');
        $this->load->view('admin/templates/footer');
    }

    public function home_menu()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/home/menu');
        $this->load->view('admin/templates/footer');
    }

    public function tentang_kami()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/tentang_kami/about-us');
        $this->load->view('admin/templates/footer');
    }

    public function ganti_password()
    {
        // data dari session
        $data['session']    = $this->session->userdata('email');

        $this->form_validation->set_rules('password_lama', 'Password', 'required|trim|min_length[6]');
        $this->form_validation->set_rules('password_baru', 'Password', 'required|trim|min_length[6]');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/administrator/ganti_password', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $this->reset_password();
        }
    }

    public function reset_password()
    {
        $id                 = $this->session->userdata('id');
        $data['session']    = $this->session->userdata('email');
        $data['row']        = $this->Admin_model->get_id($id);

        $password_lama      = $this->input->post('password_lama');
        $password_baru      = password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT);

        $password_DB        = $data['row']['password'];


        if (password_verify($password_lama, $password_DB)) {
            // berhasil;
            $this->Admin_model->update_password($password_baru, $id);
            $this->session->set_flashdata('sukses', 'Password anda berhasil diUbah');

            redirect('admin/jumlah_admin');
        } else {
            // gagal;
            $this->session->set_flashdata('gagal', 'Masukkan password lama anda dengan benar');

            redirect('admin/ganti_password');
        }
    }

    public function jumlah_admin()
    {
        $data['all_admin']      = $this->Admin_model->get_all();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/administrator/jumlah_admin', $data);
        $this->load->view('admin/templates/footer');
    }

    public function proses_edit($id = '')
    {
        $id              = htmlspecialchars($this->input->post('id', true));
        $nama            = htmlspecialchars($this->input->post('nama', true));
        $email           = htmlspecialchars($this->input->post('email', true));
        $phone           = htmlspecialchars($this->input->post('phone', true));
        $gender          = htmlspecialchars($this->input->post('gridRadios', true));

        $data = [
            'id'        => $id,
            'nama'      => $nama,
            'email'     => $email,
            'phone'     => $phone,
            'gender'    => $gender
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');
        $this->form_validation->set_rules('gridRadios', 'Jenis Kelamin', 'required');

        if ($this->form_validation->run() == false) {
            $data['all_admin']     = $this->Admin_model->get_id($id);

            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/administrator/edit_admin', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $query   = $this->Admin_model->edit_admin($data);
            $this->session->set_flashdata('sukses', 'Data berhasil diubah!!');
            redirect('admin/jumlah_admin');
        }
    }

    public function edit_admin($id)
    {
        $data['all_admin']     = $this->Admin_model->get_id($id);

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/administrator/edit_admin', $data);
        $this->load->view('admin/templates/footer');
    }


    public function hapus_admin($id)
    {
        $this->Admin_model->delete_admin($id);
        $this->session->set_flashdata('sukses', 'User berhasil dihapus!!');

        redirect('admin/jumlah_admin');
    }
}
