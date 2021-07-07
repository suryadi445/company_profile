<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    // CRUD
    // GET SEMUA DATA
    public function get($tabel)
    {
        return $this->db->get($tabel)->result_array();
    }

    // INSERT DATA
    public function insert($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    // GET 1 ROW
    public function row($tabel, $id, $field)
    {
        return $this->db->get_where($tabel, [$field => $id])->row_array();
    }

    // UPDATE DATA
    public function update($id, $tabel, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($tabel, $data);
    }

    // DELETE DATA
    public function delete($id, $tabel)
    {
        $this->db->where('id', $id);
        return $this->db->delete($tabel);
    }

    // MENCARI ROW TERAKHIR DI TABEL TENTANG KAMI
    public function last_field($field, $where)
    {
        return $this->db
            ->select('id')
            ->select($field)
            ->from('tentang_kami')
            ->where($where, '')
            ->order_by('id', 'desc')
            ->limit(1)
            ->get()->row_array();
    }

    // SET UNTUK UPDATE
    public function update_password($password_baru, $id)
    {
        $this->db->set('password', $password_baru);
        $this->db->where('id', $id);
        $this->db->update('tbl_users');
    }

    // MEGHITUNG ROWS
    public function count_rows()
    {
        return $this->db->get('tbl_promo')->num_rows();
    }

    // HALAMAN CAROUSEL
    // MENGAMBIL FIELD TERAKHIR BERDASARKAN DR DATA YG MASUK TERAKHIR
    public function get_text($tabel)
    {
        return $this->db->select("*")->limit(1)->order_by('id', "DESC")->get($tabel)->row_array();
    }
    // akhir table carousel

    // HALAMAN HOME UNTUK MENCARI RANDOM ROW
    public function random($tabel, $limit)
    {
        return $this->db
            ->select('*')
            ->from($tabel)
            ->order_by('id', 'random')
            ->limit($limit)
            ->get()->result_array();
    }

    // halaman menu
    // mengambil semua data menggunakan where
    public function get_where($tabel, $field, $where)
    {
        return $this->db->get_where($tabel, [$field => $where])->result_array();
    }

    // MENGAMBIL SEMUA DATA UNTUK PAGINATION
    public function get_promo($start, $limit)
    {
        return $this->db->get('tbl_promo', $start, $limit)->result_array();
    }
}
