<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
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

    public function tambah_promo($data)
    {
        $this->db->insert('tbl_promo', $data);
    }
}
