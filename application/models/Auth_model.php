<?php

class Auth_model extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('tbl_users', $data);
    }

    public function getRow($email)
    {
        return  $this->db->get_where('tbl_users', ['email' => $email])->row_array();
    }
}
