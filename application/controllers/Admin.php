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

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/index');
        $this->load->view('admin/templates/footer');
    }

    // halaman carousel
    public function home_carousel()
    {
        $this->form_validation->set_rules('text_carousel_akhir', 'Text Carousel', 'required|trim|max_length[1000]');

        // mengambil baris terakhir dari database
        $data['text_carousel_awal']       = $this->Admin_model->get_text('carousel');
        $data['text']                     = $data['text_carousel_awal']['keterangan'];

        $data['judul']                    = 'Carousel';

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/home/carousel', $data);
            $this->load->view('admin/templates/footer');
        } else {

            $text_carousel_akhir    = htmlspecialchars($this->input->post('text_carousel_akhir', true));
            $data = [
                'keterangan'        => $text_carousel_akhir
            ];

            $this->session->set_flashdata('sukses', 'Text carousel berhasil diperbaharui');
            $this->Admin_model->insert_carousel($data);
            redirect('admin/home_carousel');
        }
    }

    // halaman menu
    public function home_menu()
    {
        $data['judul']      = 'Menu';

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/home/menu');
        $this->load->view('admin/templates/footer');
    }

    // halaman promo
    public function semua_promo()
    {
        // awal pagination

        // load library
        $this->load->library('pagination');


        // search
        // $keyword = $this->input->post('keyword');
        if ($this->input->post('submit')) {
            echo $this->input->post('keyword');
        }

        // config
        $config['total_rows']   = $this->Admin_model->count_rows();
        $config['per_page']     = 2;
        // inisisalisasi
        $this->pagination->initialize($config);

        $data['pagination']     = $this->pagination->create_links();
        $data['start']          = $this->uri->segment('3');
        $data['all_promo']      = $this->Admin_model->get_promo($config['per_page'], $data['start']);
        // akhir pagination

        $data['judul']          = 'Semua Promo';

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

        if (empty($_FILES['gambar']['name'])) {
            $this->form_validation->set_rules('gambar', 'Gambar Promo', 'required');
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
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = 2000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $promo_awal         = htmlspecialchars($this->input->post('promo_awal', true));
            $promo_akhir        = htmlspecialchars($this->input->post('promo_akhir', true));
            $menu_promo         = htmlspecialchars($this->input->post('menu_promo', true));
            $harga_awal         = htmlspecialchars($this->input->post('harga_awal', true));
            $harga_promo        = htmlspecialchars($this->input->post('harga_promo', true));

            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('gagal', 'Gambar gagal diupload');
                // redirect('admin/tambah_barang');
            } else {
                $gambar_promo = $this->upload->data('file_name');

                $data               =   [
                    'menu_promo'    => $menu_promo,
                    'harga_promo'   => $harga_promo,
                    'harga_awal'    => $harga_awal,
                    'promo_awal'    => $promo_awal,
                    'promo_akhir'   => $promo_akhir,
                    'gambar_promo'  => $gambar_promo
                ];
                $this->Admin_model->tambah_promo($data);

                $this->session->set_flashdata('sukses', 'Promo berhasil ditambahkan');
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
        $id                 = htmlspecialchars($this->input->post('id', true));
        $promo_awal         = htmlspecialchars($this->input->post('promo_awal', true));
        $promo_akhir        = htmlspecialchars($this->input->post('promo_akhir', true));
        $menu_promo         = htmlspecialchars($this->input->post('menu_promo', true));
        $harga_awal         = htmlspecialchars($this->input->post('harga_awal', true));
        $harga_promo        = htmlspecialchars($this->input->post('harga_promo', true));
        $gambar_promo       = $_FILES['gambar']['name'];

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
                $config['max_size']         = 2000;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {
                    // berhasil diupload
                    $foto_lama          = $data['row']['gambar'];
                    $gambar_baru        = $this->upload->data('file_name'); //membuat nama gambar baru

                    $data               =   [
                        'id'            => $id,
                        'menu_promo'    => $menu_promo,
                        'harga_promo'   => $harga_promo,
                        'harga_awal'    => $harga_awal,
                        'promo_awal'    => $promo_awal,
                        'promo_akhir'   => $promo_akhir,
                        'gambar_promo'  => $gambar_baru
                    ];

                    unlink(FCPATH . 'assets/upload_image/' . $foto_lama); // untuk menghapus file yg sudah ada

                    $this->session->set_flashdata('sukses', 'Promo berhasil diupdate');
                    $this->Admin_model->update_promo($id, $data);
                    redirect('admin/semua_promo');
                } else {
                    echo $this->upload->display_errors(); //menampilkan error pada gambar
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

    public function hapus_promo($id)
    {
        $data['row']        = $this->Admin_model->get_row($id);
        $foto_lama          = $data['row']['gambar'];

        $query = $this->Admin_model->hapus_promo($id);

        if ($query) {
            unlink(FCPATH . 'assets/upload_image/' . $foto_lama); // untuk menghapus file yg sudah ada
        }

        $this->session->set_flashdata('sukses', 'Promo berhasil dihapus');
        redirect('admin/semua_promo');
    }

    // halaman footer
    public function tentang_kami()
    {
        $data['judul']      = 'About Us';
        $data['visi']       = $this->Admin_model->last_field('visi', 'visi !=');
        $data['misi']       = $this->Admin_model->last_field('misi', 'misi !=');
        $data['sejarah']    = $this->Admin_model->last_field('sejarah', 'sejarah !=');

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/footer/about-us', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_visi()
    {
        $visi                   = htmlspecialchars($this->input->post('visi', true));

        $this->form_validation->set_rules('visi', 'Visi', 'required|trim|max_length[1000]');

        if ($this->form_validation->run() == false) {
            $data['judul']      = 'About Us';
            $data['visi']       = $this->Admin_model->last_field('visi', 'visi !=');
            $data['misi']       = $this->Admin_model->last_field('misi', 'misi !=');
            $data['sejarah']    = $this->Admin_model->last_field('sejarah', 'sejarah !=');

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/footer/about-us', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data   = [
                'visi' => $visi
            ];

            $this->Admin_model->insert('tentang_kami', $data);
            $this->session->set_flashdata('sukses', 'Visi berhasil ditambahkan');
            redirect('admin/tentang_kami');
        }
    }

    public function insert_misi()
    {
        $misi                   = htmlspecialchars($this->input->post('misi', true));

        $this->form_validation->set_rules('misi', 'misi', 'required|trim|max_length[1000]');

        if ($this->form_validation->run() == false) {
            $data['judul']      = 'About Us';
            $data['visi']       = $this->Admin_model->last_field('visi', 'visi !=');
            $data['misi']       = $this->Admin_model->last_field('misi', 'misi !=');
            $data['sejarah']    = $this->Admin_model->last_field('sejarah', 'sejarah !=');

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/footer/about-us', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data   = [
                'misi' => $misi
            ];

            $this->Admin_model->insert('tentang_kami', $data);
            $this->session->set_flashdata('sukses', 'Misi berhasil ditambahkan');
            redirect('admin/tentang_kami');
        }
    }

    public function insert_sejarah()
    {
        $sejarah                = htmlspecialchars($this->input->post('sejarah', true));

        $this->form_validation->set_rules('sejarah', 'Sejarah', 'required|trim|max_length[1000]');

        if ($this->form_validation->run() == false) {
            $data['judul']      = 'About Us';
            $data['visi']       = $this->Admin_model->last_field('visi', 'visi !=');
            $data['misi']       = $this->Admin_model->last_field('misi', 'misi !=');
            $data['sejarah']    = $this->Admin_model->last_field('sejarah', 'sejarah !=');

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/footer/about-us', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data   = [
                'sejarah' => $sejarah
            ];

            $this->Admin_model->insert('tentang_kami', $data);
            $this->session->set_flashdata('sukses', 'Sejarah berhasil ditambahkan');
            redirect('admin/tentang_kami');
        }
    }

    public function hubungi_kami()
    {
        $data['result'] = $this->Admin_model->get('email');

        $data['judul'] = 'Hubungi Kami';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/footer/hubungi_kami', $data);
        $this->load->view('admin/templates/footer');
    }

    public function karir()
    {
        $data['result'] = $this->Admin_model->get('karir');

        $data['judul'] = 'Karir';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/footer/karir', $data);
        $this->load->view('admin/templates/footer');
    }

    public function layanan()
    {
        $data['result'] = $this->Admin_model->get('layanan');

        $data['judul']  = 'Layanan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/footer/layanan', $data);
        $this->load->view('admin/templates/footer');
    }

    public function insert_layanan()
    {
        $this->form_validation->set_rules('jenis_layanan', 'Jenis LAyanan', 'required|trim');
        $this->form_validation->set_rules('link', 'Link', 'required|trim');

        if (empty($_FILES['gambar']['name'])) {
            $this->form_validation->set_rules('gambar', 'Gambar Promo', 'required');
        }

        $jenis_layanan          = htmlspecialchars($this->input->post('jenis_layanan', true));
        $link                   = htmlspecialchars($this->input->post('link', true));

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Layanan';
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/footer/tambah_layanan', $data);
            $this->load->view('admin/templates/footer');
        } else {
            // upload file
            $config['upload_path']      = './assets/upload_layanan';
            $config['allowed_types']    = 'jpg|png|jpeg|png';
            $config['max_size']         = 2000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                // gagal upload
                $this->session->set_flashdata('gagal', 'Gambar gagal diupload' . $this->upload->display_errors());
                $data['judul'] = 'Layanan';
                $this->load->view('admin/templates/header', $data);
                $this->load->view('admin/templates/navbar');
                $this->load->view('admin/templates/sidebar');
                $this->load->view('admin/footer/tambah_layanan', $data);
                $this->load->view('admin/templates/footer');
            } else {
                // berhasil upload
                $gambar = $this->upload->data('file_name');

                $data   = [
                    'jenis_layanan'     => $jenis_layanan,
                    'link'              => $link,
                    'gambar'            => $gambar
                ];

                $this->session->set_flashdata('sukses', 'Jenis layanan berhasil ditambahkan');
                $this->Admin_model->insert('layanan', $data);
                redirect('admin/layanan');
            }
        }
    }

    public function update_layanan($id)
    {
        $data['judul']  = 'Update Layanan';
        $data['row']    = $this->Admin_model->row('layanan', $id);

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/footer/update_layanan', $data);
        $this->load->view('admin/templates/footer');
    }

    public function proses_update_layanan()
    {
        $this->form_validation->set_rules('jenis_layanan', 'Jenis Layanan', 'required|trim');
        $this->form_validation->set_rules('link', 'Link', 'required|trim');

        $id                 = htmlspecialchars($this->input->post('id', true));
        $jenis_layanan      = htmlspecialchars($this->input->post('jenis_layanan', true));
        $link               = htmlspecialchars($this->input->post('link', true));
        $gambar             = $_FILES['gambar']['name'];
        $data['row']        = $this->Admin_model->row('layanan', $id);
        $gambar_lama        = $data['row']['gambar'];

        if ($this->form_validation->run() == false) {
            $data['judul']  = 'Menu';

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/footer/update_layanan', $data);
            $this->load->view('admin/templates/footer');
        } else {

            if ($gambar) {
                $config['upload_path']      = './assets/upload_layanan/';
                $config['allowed_types']    = 'jpeg|jpg|png|png';
                $config['max_size']         = '2000';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('gambar')) {
                    // gagal upload
                    $this->session->set_flashdata('gagal',);
                    $this->session->set_flashdata('gagal', 'Foto gagal diupload' . $this->upload->display_errors());
                    $this->load->view('admin/templates/header', $data);
                    $this->load->view('admin/templates/navbar');
                    $this->load->view('admin/templates/sidebar');
                    $this->load->view('admin/footer/update_layanan', $data);
                    $this->load->view('admin/templates/footer');
                } else {
                    // berhasil upload
                    $gambar_baru       = $this->upload->data('file_name');

                    unlink(FCPATH . 'assets/upload_layanan/' . $gambar_lama); // untuk menghapus file yg sudah ada

                    $data = [
                        'jenis_layanan'     => $jenis_layanan,
                        'link'              => $link,
                        'gambar'            => $gambar_baru
                    ];

                    $this->Admin_model->update_menu($id, 'layanan', $data);
                    $this->session->set_flashdata('sukses', 'Layanan berhasil diubah');
                    redirect('admin/layanan');
                }
            } else {
                // tidakada gambarnya
                $data = [
                    'jenis_layanan'     => $jenis_layanan,
                    'link'              => $link,
                    'gambar'            => $gambar_lama
                ];

                $this->Admin_model->update_menu($id, 'layanan', $data);
                $this->session->set_flashdata('sukses', 'Layanan berhasil diubah');
                redirect('admin/layanan');
            }
        }
    }

    public function delete_layanan($id)
    {
        $data['row']        = $this->Admin_model->row('layanan', $id);
        $gambar_lama        = $data['row']['gambar'];

        unlink(FCPATH . 'assets/upload_layanan/' . $gambar_lama); // untuk menghapus file/gambar yg sudah ada

        $this->Admin_model->delete($id, 'layanan');
        $this->session->set_flashdata('sukses', 'data berhasil dihapus');
        redirect('admin/layanan');
    }

    public function csr()
    {
        $data['judul'] = 'CSR';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/footer/csr');
        $this->load->view('admin/templates/footer');
    }

    // admin control
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

        $password_lama      = htmlspecialchars($this->input->post('password_lama', true));
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
        $data['judul']          = 'Daftar Admin';
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
            $data['judul']         = 'Update Admin';

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
        $data['judul']         = 'Update Admin';
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
    // akhir admin control

    // halaman menu
    public function insert_makanan()
    {
        $this->form_validation->set_rules('jenis_makanan', 'Jenis Makanan', 'required|trim');
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('harga_menu', 'Harga Menu', 'required|trim|numeric');
        $this->form_validation->set_rules('keterangan_menu', 'Keterangan', 'required|trim');

        if (empty($_FILES['gambar']['name'])) {
            $this->form_validation->set_rules('gambar', 'Gambar Promo', 'required');
        }

        $nama_menu          = htmlspecialchars($this->input->post('nama_menu', true));
        $harga_menu         = htmlspecialchars($this->input->post('harga_menu', true));
        $keterangan_menu    = htmlspecialchars($this->input->post('keterangan_menu', true));
        $jenis_makanan      = htmlspecialchars($this->input->post('jenis_makanan', true));

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Menu';
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/menu/tambah_menu', $data);
            $this->load->view('admin/templates/footer');
        } else {
            // upload file
            $config['upload_path']      = './assets/upload_menu';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = 2000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                // gagal upload
                $this->session->set_flashdata('gagal', 'Gambar gagal diupload' . $this->upload->display_errors());
                $data['judul'] = 'Menu';
                $this->load->view('admin/templates/header', $data);
                $this->load->view('admin/templates/navbar');
                $this->load->view('admin/templates/sidebar');
                $this->load->view('admin/menu/tambah_menu', $data);
                $this->load->view('admin/templates/footer');
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
                $this->Admin_model->insert('menu_makanan', $data);
                redirect('admin/semua_menu');
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
        $data['row']    = $this->Admin_model->row('menu_makanan', $id);

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

        $id                 = htmlspecialchars($this->input->post('id', true));
        $jenis_makanan      = htmlspecialchars($this->input->post('jenis_makanan', true));
        $nama_menu          = htmlspecialchars($this->input->post('nama_menu', true));
        $harga_menu         = htmlspecialchars($this->input->post('harga_menu', true));
        $keterangan         = htmlspecialchars($this->input->post('keterangan_menu', true));
        $gambar             = $_FILES['gambar']['name'];
        $data['row']        = $this->Admin_model->row('menu_makanan', $id);
        $gambar_lama        = $data['row']['gambar'];

        // echo 'oke';
        // die;

        if ($this->form_validation->run() == false) {
            $data['judul']  = 'Menu';

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/navbar');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/menu/update_menu', $data);
            $this->load->view('admin/templates/footer');
        } else {

            if ($gambar) {
                $config['upload_path']      = './assets/upload_menu/';
                $config['allowed_types']    = 'jpeg|jpg|png';
                $config['max_size']         = '2000';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('gambar')) {
                    // gagal upload
                    $this->session->set_flashdata('gagal',);
                    $this->session->set_flashdata('gagal', 'Foto gagal diupload' . $this->upload->display_errors());
                    // redirect('menu/update_menu/' . $id);
                    $this->load->view('admin/templates/header', $data);
                    $this->load->view('admin/templates/navbar');
                    $this->load->view('admin/templates/sidebar');
                    $this->load->view('admin/menu/update_menu', $data);
                    $this->load->view('admin/templates/footer');
                } else {
                    // berhasil upload
                    $gambar_baru       = $this->upload->data('file_name');

                    unlink(FCPATH . 'assets/upload_menu/' . $gambar_lama); // untuk menghapus file yg sudah ada

                    $data = [
                        'nama_menu'     => $nama_menu,
                        'jenis_makanan' => $jenis_makanan,
                        'harga_menu'    => $harga_menu,
                        'keterangan'    => $keterangan,
                        'gambar'        => $gambar_baru
                    ];

                    $this->Admin_model->update_menu($id, 'menu_makanan', $data);
                    $this->session->set_flashdata('sukses', 'Menu berhasil diubah');
                    redirect('admin/semua_menu');
                }
            } else {
                // tidakada gambarnya
                $data = [
                    'nama_menu'     => $nama_menu,
                    'jenis_makanan' => $jenis_makanan,
                    'harga_menu'    => $harga_menu,
                    'keterangan'    => $keterangan,
                    'gambar'        => $gambar_lama
                ];

                $this->Admin_model->update_menu($id, 'menu_makanan', $data);
                $this->session->set_flashdata('sukses', 'Menu berhasil diubah');
                redirect('admin/semua_menu');
            }
        }
    }

    public function delete_menu($id)
    {
        $data['row']        = $this->Admin_model->row('menu_makanan', $id);
        $gambar_lama        = $data['row']['gambar'];

        unlink(FCPATH . 'assets/upload_menu/' . $gambar_lama); // untuk menghapus file/gambar yg sudah ada

        $this->Admin_model->delete($id, 'menu_makanan');
        $this->session->set_flashdata('sukses', 'data berhasil dihapus');
        redirect('admin/semua_menu');
    }
    // akhir halaman menu
}
