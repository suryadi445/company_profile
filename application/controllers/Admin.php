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

    public function semua_promo()
    {
        // $data['all_promo']      = $this->Admin_model->get_all_promo();

        // load library
        $this->load->library('pagination');

        // config
        $config['base_url'] = 'http://localhost/company_profile/admin/semua_promo/';
        $config['total_rows'] = $this->Admin_model->count_rows();
        $config['per_page'] = 2;

        // style pagination
        $config['full_tag_open']    = '<nav"><ul class="pagination justify-content-center"';
        $config['full_tag_close']   = '</ul></nav>';
        // first pagination
        $config['first_link']       = 'First';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close']   = '</li>';

        // last pagination
        $config['last_link'] = 'Last';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']   = '</li>';

        // next pagination
        $config['next_link'] = '>>';
        $config['next_tag_open']   = '<li class="page-item">';
        $config['next_tag_close']   = '</li>';

        // prev pagination
        $config['prev_link'] = '<<';
        $config['prev_tag_open']   = '<li class="page-item">';
        $config['prev_tag_close']   = '</li>';

        // link yang aktif
        $config['cur_tag_open']   = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close']   = '</a></li>';

        $config['num_tag_open']   = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        // inisisalisasi
        $this->pagination->initialize($config);

        $data['pagination']     = $this->pagination->create_links();

        $data['start']        = $this->uri->segment('3');
        $data['all_promo']    = $this->Admin_model->get_promo($config['per_page'], $data['start']);

        $this->load->view('admin/templates/header');
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

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
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
