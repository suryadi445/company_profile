<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    // query tabel users
    public function get_all()
    {
        return $this->db->get('tbl_users')->result_array();
    }

    public function get_id($id)
    {
        return $this->db->get_where('tbl_users', ['id' => $id])->row_array();
    }

    public function edit_admin($data)
    {
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_users', $data);
    }

    public function delete_admin($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_users');
    }

    public function update_password($password_baru, $id)
    {
        $this->db->set('password', $password_baru);
        $this->db->where('id', $id);
        $this->db->update('tbl_users');
    }
    // akhir query table users


    // query tabel promo
    public function tambah_promo($data)
    {
        $this->db->insert('tbl_promo', $data);
    }

    public function get_all_promo()
    {
        return $this->db->get('tbl_promo')->result_array();
    }

    public function get_promo($start, $limit)
    {
        return $this->db->get('tbl_promo', $start, $limit)->result_array();
    }

    public function count_rows()
    {
        return $this->db->get('tbl_promo')->num_rows();
    }

    public function get_row($id)
    {
        return $this->db->get_where('tbl_promo', ['id' => $id])->row_array();
    }

    public function update_promo($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_promo', $data);
    }

    public function hapus_promo($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tbl_promo');
    }

    public function cari_promo()
    {
        $cari_barang = $this->input->post('cari_barang');

        $this->db->like('menu_promo', $cari_barang);
        return $this->db->get('tbl_promo')->result_array();
    }

    // akhir query tabel promo

}
