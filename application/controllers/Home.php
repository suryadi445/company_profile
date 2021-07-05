<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
        sudah_login();
    }

    public function index()
    {
        // mengambil baris terakhir dari database
        // untuk tampilan carousel
        $data['text_carousel_awal']       = $this->Admin_model->get_text('carousel');
        $data['text']                     = $data['text_carousel_awal']['keterangan'];
        $data['random']                   = $this->Admin_model->random('menu_makanan');

        $data['judul'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function pesan_menu()
    {
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $phone      = $this->input->post('phone');
        $gender     = $this->input->post('gender');
        $waktu      = $this->input->post('waktuPengambilan');
        $menu       = $this->input->post('menu');
        $jumlah     = $this->input->post('jumlah_menu');
        $harga      = $this->input->post('harga_total');

        $harga_DB   = str_replace(".", "", $harga);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('waktuPengambilan', 'Waktu Pengambilan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $error = [
                'nama'              => (form_error('nama', '<p>', '</p>')),
                'email'             => (form_error('email', '<p>', '</p>')),
                'phone'             => (form_error('phone', '<p>', '</p>')),
                'gender'            => (form_error('gender', '<p>', '</p>')),
                'waktuPengambilan'  => (form_error('waktuPengambilan', '<p>', '</p>')),
            ];
            echo json_encode($error);
        } else {

            $this->_sendEmail();
            $this->_sendEmailToMe();

            if ($this->_sendEmail() == false) {
                // pesan gagal terkirim
                $this->session->set_flashdata('gagal', 'Pesanan gagal proses, mohon ulangi kembali');
                $false = false;
                echo json_encode($false);
            } else {
                // pesan sukses terkirim
                $data   = [
                    'nama'          => $nama,
                    'email'         => $email,
                    'phone'         => $phone,
                    'gender'        => $gender,
                    'tgl_input'     => $waktu,
                    'menu'          => $menu,
                    'jumlah_menu'   => $jumlah,
                    'harga_total'   => $harga_DB
                ];
                $query  = $this->Admin_model->insert('tbl_pesanan', $data);
                echo json_encode($query);
            }
        }
    }

    private function _sendEmail()
    {
        // konfigurasi untuk library email CI
        $config = [
            'protocol'          => 'smtp',
            'smtp_host'         => 'ssl://smtp.googlemail.com',
            'smtp_user'         => 'suryadi.sender@gmail.com',
            'smtp_pass'         => 'mahasiwa',
            'smtp_port'         => 465,
            'mailtype'          => 'html',
            'charset'           => 'utf-8',
            'newline'           => "\r\n",
            'starttls'          => TRUE,
            '_smtp_auth'        => TRUE,
            'send_multipart'    => FALSE,
            'wordwrap'          => TRUE
        ];
        // load library email
        $this->load->library('email', $config);
        // email pengirimnya
        $this->email->from('suryadi.sender@gmail.com', 'Suryadi');
        // email penerima atau email yg digunakan untuk registrasi
        $this->email->to($this->input->post('email'));
        $this->email->subject('Thanks for your order');
        $this->email->message('Terima kasih telah memesan di restoran kami. Mohon datang sesuai jam yang sudah Anda tentukan' . '(' . $this->input->post('waktuPengambilan') . ')' . '<br>' . 'Menu :' . $this->input->post('menu') . '<br>' . 'Total Harga :' . $this->input->post('harga_total') . '<br>' . 'Jumlah Pesanan :' . $this->input->post('jumlah_menu') . '<br>' . 'Salam hangat' . '<br>' . 'Suryadi');


        // jika email terkirim
        if ($this->email->send()) {
            // mengembalikan jika nilainya benar / email terkirim
            return true;
        } else {
            // email tidak terkirim
            // menghentikan program dan menampilkan pesan kesalahan jika email tidak terkirim
            return false;
        }
    }

    private function _sendEmailToMe()
    {
        // konfigurasi untuk library email CI
        $config = [
            'protocol'      => 'smtp',
            'smtp_host'     => 'ssl://smtp.googlemail.com',
            'smtp_user'     => 'suryadi.sender@gmail.com',
            'smtp_pass'     => 'mahasiwa',
            'smtp_port'     => 465,
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'newline'       => "\r\n"
        ];
        // load library email
        $this->load->library('email', $config);
        // email pengirimnya
        $this->email->from('suryadi.sender@gmail.com', 'Suryadi');
        // email penerima atau email yg digunakan untuk registrasi
        $this->email->to('Suryadi_fb@yahoo.com');
        $this->email->subject('Pesanan Baru');
        $this->email->message('Nama : ' . $this->input->post('nama') . '<br>' . 'Email : ' . $this->input->post('email') . '<br>'  . 'Phone : ' . $this->input->post('phone') . '<br>'  . 'Gender : ' . $this->input->post('gender') . '<br>' . 'Waktu Pengambilan : ' . $this->input->post('waktuPengambilan') . '<br>' . 'Jumlah Pesanan : ' . $this->input->post('jumlah_menu') . '<br>' . 'Menu : ' . $this->input->post('menu') . '<br>' . 'Total Harga : ' . $this->input->post('harga_total'));

        // jika email terkirim
        if ($this->email->send()) {
            // mengembalikan jika nilainya benar
            return true;
        } else {
            // menghentikan program dan menampilkan pesan kesalahan jika email tidak terkirim
            $this->session->set_flashdata('gagal', 'Email gagal dikirim, mohon ulangi kembali');
        }
    }

    public function kurang_qty()
    {
        $qty_input = $this->input->post('qty_input');

        if ($qty_input == 1) {
            echo 1;
            die;
        }

        $qty_number = intval($qty_input);

        $result = $qty_number - 1;

        echo $result;
    }

    public function tambah_qty()
    {
        $qty_input = $this->input->post('qty_input');

        // merubah string menjadi angka
        $qty_number = intval($qty_input);

        $result = $qty_number + 1;

        echo $result;
    }

    public function harga_total()
    {
        $qty_input = $this->input->post('qty_input');
        $harga     = $this->input->post('harga');

        $qty_number     = intval($qty_input);
        $harga_number   = intval($harga);

        $result         = $qty_number * $harga_number;

        echo number_format($result, "0", ",", ".");
    }
}
