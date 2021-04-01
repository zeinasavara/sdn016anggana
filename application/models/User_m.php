<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function get($params = null, $value = null)
    {
        $this->db->order_by('id_user', 'DESC');

        if ($params != null && $value != null) {
            $this->db->where($params, $value);
        } else {
            $this->db->where('id_user !=', $this->fungsi->user_login()->user_id);
        }

        $this->db->select('*');
        $this->db->from('tb_users');
        return $this->db->get();
    }
}
