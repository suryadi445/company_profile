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
        return $this->db->delete('tbl_users');
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

    // query table carousel
    public function insert_carousel($data)
    {
        return $this->db->insert('carousel', $data);
    }

    public function get_text($tabel)
    {
        return $this->db->select("*")->limit(1)->order_by('id', "DESC")->get($tabel)->row_array();
    }
    // akhir table carousel

    // query tabel menu
    public function all_menu()
    {
        return $this->db->get('menu_makanan')->result_array();
    }

    // dinamis

    public function get($tabel)
    {
        return $this->db->get($tabel)->result_array();
    }

    public function insert($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function row($tabel, $id)
    {
        return $this->db->get_where($tabel, ['id' => $id])->row_array();
    }

    public function update_menu($id, $tabel, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($tabel, $data);
    }

    public function delete($id, $tabel)
    {
        $this->db->where('id', $id);
        return $this->db->delete($tabel);
    }

    public function last_field($field, $where)
    {
        // SELECT id, visi from tentang_kami WHERE visi!='' order by id DESC limit 1
        // SELECT id, misi from tentang_kami WHERE misi !='' order by id DESC LIMIT 1
        // SELECT id, sejarah from tentang_kami WHERE sejarah !='' order by id DESC LIMIT 1

        return $this->db
            ->select('id')
            ->select($field)
            ->from('tentang_kami')
            ->where($where, '')
            ->order_by('id', 'desc')
            ->limit(1)
            ->get()->row_array();
    }
}
