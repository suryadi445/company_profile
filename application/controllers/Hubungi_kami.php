<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hubungi_kami extends CI_Controller
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
        $data['judul']   = 'Hubungi Kami';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('footer/hubungi_kami', $data);
        $this->load->view('templates/footer');
    }

    public function kirim_hubKami()
    {
        // echo 'oke';
        // die;

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required|max_length[1000]');

        $nama           = htmlspecialchars($this->input->post('nama', true));
        $email          = htmlspecialchars($this->input->post('email', true));
        $phone          = htmlspecialchars($this->input->post('phone', true));
        $kategori       = htmlspecialchars($this->input->post('kategori', true));
        $pesan          = htmlspecialchars($this->input->post('pesan', true));

        if ($this->form_validation->run() == false) {
            $error = [
                'nama'              => (form_error('nama', '<p>', '</p>')),
                'email'             => (form_error('email', '<p>', '</p>')),
                'phone'             => (form_error('phone', '<p>', '</p>')),
                'kategori'          => (form_error('kategori', '<p>', '</p>')),
                'pesan'             => (form_error('pesan', '<p>', '</p>')),
            ];
            echo json_encode($error);
        } else {

            $this->_sendEmail();
            $this->_sendEmailToMe();

            if ($this->_sendEmail() == false) {
                // $this->session->set_flashdata('gagal', 'Email gagal dikirim, mohon ulangi kembali');
                $false = false;
                echo json_encode($false);
            } else {
                $data               = [
                    'nama'          => $nama,
                    'email'         => $email,
                    'phone'         => $phone,
                    'kategori'      => $kategori,
                    'pesan'         => $pesan,
                    'tanggal_pesan' => date('yyyy-mm-dd')
                ];
                $query = $this->Admin_model->insert('email', $data);
                echo json_encode($query);

                // $this->session->set_flashdata('sukses', 'Terima kasih, pesan Anda sudah terkirim');
            }
        }
    }

    // kirim email ke user
    private function _sendEmail()
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
            'newline'       => "\r\n",
            'starttls'      => TRUE,
            '_smtp_auth'    => TRUE,
            'send_multipart' => FALSE,
            'wordwrap'      => TRUE
        ];
        // load library email
        $this->load->library('email', $config);
        // email pengirimnya
        $this->email->from('suryadi.sender@gmail.com', 'Suryadi');
        // email penerima atau email yg digunakan untuk registrasi
        $this->email->to($this->input->post('email'));
        $this->email->subject('Thanks for contacting Us');
        $this->email->message('Terima kasih telah menghubungi kami. Semoga ini menjadi masukkan yang baik untuk perkembangan kami.' . '<br>' . 'Salam hangat' . '<br>' . 'Suryadi');

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

    // kirim email ke admin
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
        $this->email->subject('Kritik dan Saran');
        $this->email->message('Nama : ' . $this->input->post('nama') . '<br>' . 'Email : ' . $this->input->post('email') . '<br>'  . 'Phone : ' . $this->input->post('phone') . '<br>' . 'Kategori :' . $this->input->post('kategori')  . 'Pesan : ' . $this->input->post('pesan'));

        // jika email terkirim
        if ($this->email->send()) {
            // mengembalikan jika nilainya benar
            return true;
        } else {
            // menghentikan program dan menampilkan pesan kesalahan jika email tidak terkirim
            // $this->session->set_flashdata('gagal', 'Email gagal dikirim, mohon ulangi kembali');
        }
    }
}
