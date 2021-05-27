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
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/menu/tambah_menu', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_makanan()
    {
        $this->form_validation->set_rules('jenis_makanan', 'Jenis Makanan', 'required|trim');
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('harga_menu', 'Harga Menu', 'required|trim|numeric');
        $this->form_validation->set_rules('keterangan_menu', 'Keterangan', 'required|trim');

        if (empty($_FILES['gambar']['name'])) {
            $this->form_validation->set_rules('gambar', 'Gambar Promo', 'required');
        }

        $nama_menu          = $this->input->post('nama_menu');
        $harga_menu         = $this->input->post('harga_menu');
        $keterangan_menu    = $this->input->post('keterangan_menu');
        $jenis_makanan      = $this->input->post('jenis_makanan');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Menu';
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/menu/menu', $data);
            $this->load->view('admin/templates/footer');
        } else {
            // upload file
            $config['upload_path']      = './assets/upload_menu';
            $config['allowed_types']    = 'jpg|png|jpeg|png';
            $config['max_size']         = 2000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                // gagal upload
                $this->session->set_flashdata('gagal', 'Gambar gagal diupload');
                redirect('tambah_menu');
            } else {
                // berhasil upload
                $gambar = $this->upload->data('file_name');

                $data   = [
                    'nama_menu'     => $nama_menu,
                    'harga_menu'    => $harga_menu,
                    'keterangan'    => $keterangan_menu,
                    'jenis_makanan' => $jenis_makanan,
                    'gambar'        => $gambar
                ];

                $this->session->set_flashdata('sukses', 'Menu makanan berhasil ditambahkan');
                $this->Admin_model->insert_menu($data);
                redirect('menu/semua_menu');
            }
        }
    }

    public function semua_menu()
    {

        $data['all_menu'] = $this->Admin_model->all_menu();

        $data['judul'] = 'Semua Menu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/menu/semua_menu', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update_menu($id)
    {
        $data['judul']  = 'Menu';
        $data['row']    = $this->Admin_model->row_menu($id);

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/menu/update_menu', $data);
        $this->load->view('admin/templates/footer');
    }

    public function proses_update()
    {
        $this->form_validation->set_rules('jenis_makanan', 'Jenis Makanan', 'required|trim');
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('harga_menu', 'Harga Menu', 'required|trim');
        $this->form_validation->set_rules('keterangan_menu', 'Keterangan', 'required|trim');


        $id             = $this->input->post('id');
        $jenis_makanan  = $this->input->post('jenis_makanan');
        $nama_menu      = $this->input->post('nama_menu');
        $harga_menu     = $this->input->post('harga_menu');
        $keterangan     = $this->input->post('keterangan_menu');
        $gambar         = $_FILES['gambar']['name'];
        $data['row']    = $this->Admin_model->row_menu($id);
        $gambar_lama    = $data['row']['gambar'];


        if ($this->form_validation->run() == false) {
            $data['judul']  = 'Menu';

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/menu/update_menu', $data);
            $this->load->view('admin/templates/footer');
        } else {

            if ($gambar) {
                $config['upload_path'] = './assets/upload_menu/';
                $config['allowed_types'] = 'jpeg|jpg|png|png';
                $config['max_size']     = '2000';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('gambar')) {
                    // gagal upload
                    $this->session->set_flashdata('gagal',);
                    $this->session->set_flashdata('gagal', 'Foto gagal diupload' . $this->upload->display_errors());
                    redirect('menu/update_menu/' . $id);
                } else {
                    // berhasil upload
                    $data       = array('gambar' => $this->upload->data('file_name'));
                    unlink(FCPATH . 'assets/upload_menu/' . $gambar_lama); // untuk menghapus file yg sudah ada


                    $this->session->set_flashdata('sukses', 'Menu berhasil diubah');
                    $this->Admin_model->update_menu($id, $data);
                }
            } else {
                // tidakada gambarnya

                $data           = array('gambar' => $gambar_lama);

                $this->session->set_flashdata('sukses', 'Menu berhasil diubah');
                $this->Admin_model->update_menu($id, $data);
            }

            $data = [
                'nama_menu'     => $nama_menu,
                'jenis_makanan' => $jenis_makanan,
                'harga_menu'    => $harga_menu,
                'keterangan'    => $keterangan,
            ];

            $this->session->set_flashdata('sukses', 'Menu berhasil diubah');
            $this->Admin_model->update_menu($id, $data);
            redirect('menu/semua_menu');
        }
    }
}
