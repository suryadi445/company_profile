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
        $data['random']                   = $this->Admin_model->random('menu_makanan', 6);
        $data['carousel']                 = $this->Admin_model->random('menu_makanan', 3);
        $data['gambar1']                  = $data['carousel'][0]['gambar'];
        $data['gambar2']                  = $data['carousel'][1]['gambar'];
        $data['gambar3']                  = $data['carousel'][2]['gambar'];

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

    public function date_time()
    {
        date_default_timezone_set('Asia/jakarta');

        $time = $this->input->post('time');

        // memisahkan jam dan tanggal
        $pisah_jam      = explode(' ', $time);
        // memisahkan ':' (titik dua) dalam jam
        $array_jam      = explode(':', $pisah_jam[1]);
        $jam_input      = $array_jam[0];
        $menit_input    = $array_jam[1];

        $date           = date('H:i');
        $date_int       = strtotime($date);

        $jam_sekarang   = date('Hi', $date_int);

        $jam_integer    = (int)$jam_input;

        $waktu_input = $jam_input . $menit_input;

        // memisahkan jam dan tanggal
        $pisah_array    = explode('-', $time);
        // pisah tahun dengan tanggal
        $array_thn_tgl  = $pisah_array[2];
        $pisah_tahun    = explode(' ', $array_thn_tgl);
        //! data fix
        $tanggal_input  = $pisah_array[0];
        $bulan_input    = $pisah_array[1];
        $tahun_input    = $pisah_tahun[0];

        // mendapatkan tanggal sekarang
        $tgl_sekarang   = date('d-m-Y');
        $pisah_tgl      = explode('-', $tgl_sekarang);

        $tanggal_skrg   = $pisah_tgl[0];
        $bulan_skrg     = $pisah_tgl[1];
        $tahun_skrg     = $pisah_tgl[2];

        if ($tanggal_input != $tanggal_skrg) {
            if ($jam_integer < 10) {
                echo 'Tutup. Kami mulai operasional pukul 10.00 pagi';
            } elseif ($jam_integer > 20) {
                echo 'Tutup. Kami selesai operasional pukul 21.00 malam ';
            } else {
                echo 'pesan';
            }
            die;
        } elseif ($tanggal_input == $tanggal_skrg) {
            if ($jam_integer < 10) {
                echo 'Tutup. Kami mulai operasional pukul 10.00 pagi';
            } elseif ($waktu_input <= $jam_sekarang) {
                echo 'Anda tidak bisa memesan diwaktu yang sudah lewat';
            } elseif ($jam_integer > 20) {
                echo 'Tutup. Kami selesai operasional pukul 21.00 malam ';
            } elseif ($waktu_input > $jam_sekarang + 15) {
                echo 'pesan';
            } elseif ($waktu_input != $jam_sekarang) {
                echo 'Anda harus memesan 15 menit dari waktu pemesanan';
            } else {
                echo 'pesan';
            }
        }
    }
}
