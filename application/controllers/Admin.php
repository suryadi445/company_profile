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
        $data['judul']      = 'Administrator';

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

    public function semua_promo()
    {
        // awal pagination

        // load library
        $this->load->library('pagination');
        // config
        $config['total_rows'] = $this->Admin_model->count_rows();
        $config['per_page'] = 2;
        // inisisalisasi
        $this->pagination->initialize($config);

        $data['pagination']     = $this->pagination->create_links();
        $data['start']        = $this->uri->segment('3');
        $data['all_promo']    = $this->Admin_model->get_promo($config['per_page'], $data['start']);
        // akhir pagination

        $data['judul']      = 'Semua Promo';

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/promo/semua_promo', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah_promo()
    {
        $this->form_validation->set_rules('promo_awal', 'Promo Awal', 'required|trim');
        $this->form_validation->set_rules('promo_akhir', 'Promo Akhir', 'required|trim');
        $this->form_validation->set_rules('menu_promo', 'Menu Promo', 'required|trim');
        $this->form_validation->set_rules('harga_awal', 'Harga Awal', 'required|trim|numeric');
        $this->form_validation->set_rules('harga_promo', 'Harga Promo', 'required|trim|numeric');

        if (empty($_FILES['gambar_promo']['name'])) {
            $this->form_validation->set_rules('gambar_promo', 'Gambar Promo', 'required');
        }

        $data['judul']      = 'Tambah Promo';

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/promo/tambah_promo');
            $this->load->view('admin/templates/footer');
        } else {
            // upload file
            $config['upload_path']      = './assets/upload_image';
            $config['allowed_types']    = 'jpg|png|jpeg|png';
            $config['max_size']        = 2000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $promo_awal         = $this->input->post('promo_awal');
            $promo_akhir        = $this->input->post('promo_akhir');
            $menu_promo         = $this->input->post('menu_promo');
            $harga_awal         = $this->input->post('harga_awal');
            $harga_promo        = $this->input->post('harga_promo');
            $gambar_promo       = $_FILES['gambar_promo']['name'];

            $data               =   [
                'menu_promo'    => $menu_promo,
                'harga_promo'   => $harga_promo,
                'harga_awal'    => $harga_awal,
                'promo_awal'    => $promo_awal,
                'promo_akhir'   => $promo_akhir,
                'gambar_promo'  => $gambar_promo
            ];

            if (!$this->upload->do_upload('gambar_promo')) {
                $this->session->set_flashdata('gagal', 'Gambar gagal diupload');
                // redirect('admin/tambah_barang');
            } else {
                $this->upload->data('file_name');
                $this->session->set_flashdata('sukses', 'Promo berhasil ditambahkan');
                $this->Admin_model->tambah_promo($data);
                redirect('admin/semua_promo');
            }
        }
    }

    public function update_promo($id)
    {
        $data['judul']      = 'Update Promo';
        $data['row']        = $this->Admin_model->get_row($id);

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/promo/update_promo', $data);
        $this->load->view('admin/templates/footer');
    }

    public function proses_update_promo()
    {
        $id                 = $this->input->post('id');
        $promo_awal         = $this->input->post('promo_awal');
        $promo_akhir        = $this->input->post('promo_akhir');
        $menu_promo         = $this->input->post('menu_promo');
        $harga_awal         = $this->input->post('harga_awal');
        $harga_promo        = $this->input->post('harga_promo');
        $gambar_promo       = $_FILES['gambar_promo']['name'];

        $this->form_validation->set_rules('promo_awal', 'Promo Awal', 'required|trim');
        $this->form_validation->set_rules('promo_akhir', 'Promo Akhir', 'required|trim');
        $this->form_validation->set_rules('menu_promo', 'Menu Promo', 'required|trim');
        $this->form_validation->set_rules('harga_awal', 'Harga Awal', 'required|trim|numeric');
        $this->form_validation->set_rules('harga_promo', 'Harga Promo', 'required|trim|numeric');

        $data['judul']      = 'Update Promo';
        $data['row']        = $this->Admin_model->get_row($id);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/promo/update_promo', $data);
            $this->load->view('admin/templates/footer');
        } else {

            if ($gambar_promo) {
                // upload file
                $config['upload_path']      = './assets/upload_image';
                $config['allowed_types']    = 'jpg|png|jpeg|png';
                $config['max_size']        = 2000;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar_promo')) {
                    // berhasil diupload
                    $foto_lama      = $data['row']['gambar_promo'];
                    $gambar_baru      = $this->upload->data('file_name');

                    $data               =   [
                        'id'            => $id,
                        'menu_promo'    => $menu_promo,
                        'harga_promo'   => $harga_promo,
                        'harga_awal'    => $harga_awal,
                        'promo_awal'    => $promo_awal,
                        'promo_akhir'   => $promo_akhir,
                        'gambar_promo'  => $gambar_baru
                    ];

                    unlink(FCPATH . 'assets/upload_image/' . $foto_lama);

                    $this->session->set_flashdata('sukses', 'Promo berhasil diupdate');
                    $this->Admin_model->update_promo($id, $data);
                    redirect('admin/semua_promo');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                // tidak ada gambar
                $data               =   [
                    'id'            => $id,
                    'menu_promo'    => $menu_promo,
                    'harga_promo'   => $harga_promo,
                    'harga_awal'    => $harga_awal,
                    'promo_awal'    => $promo_awal,
                    'promo_akhir'   => $promo_akhir,
                ];

                $this->Admin_model->update_promo($id, $data);
                $this->session->set_flashdata('sukses', 'Promo berhasil diupdate');
                redirect('admin/semua_promo');
            }
        }
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
        $data['judul']      = 'Ganti Password';
        $data['session']    = $this->session->userdata('email');

        $this->form_validation->set_rules('password_lama', 'Password', 'required|trim|min_length[6]');
        $this->form_validation->set_rules('password_baru', 'Password', 'required|trim|min_length[6]');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
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
        $data['judul']      = 'Daftar Admin';
        $data['all_admin']      = $this->Admin_model->get_all();

        $this->load->view('admin/templates/header', $data);
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
            $data['judul']      = 'Update Admin';

            $this->load->view('admin/templates/header', $data);
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
        $data['judul']      = 'Update Admin';
        $data['all_admin']     = $this->Admin_model->get_id($id);

        $this->load->view('admin/templates/header', $data);
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
