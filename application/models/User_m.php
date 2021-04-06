<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function get($params = null, $value = null)
    {

        if ($params != null && $value != null) {
            $this->db->where($params, $value);
        } else {
            $this->db->where('id_user !=', $this->fungsi->user_login()->id_user);
        }

        $this->db->order_by('id_user', 'DESC');
        $this->db->select('*');
        $this->db->from('tb_users');
        return $this->db->get();
    }

    public function add($post)
    {
        $params['username']  = $post['username'];
        $params['password']  = md5($post['password']);
        $params['full_name'] = $post['full_name'];
        $params['jabatan'] = $post['jabatan'];
        $params['role']      = $post['role'];
        $this->db->insert('tb_users', $params);
    }

    public function update($post)
    {
        $params['username'] = $post['username'];
        if ($post['password']) {
            $params['password'] = md5($post['password']);
        }
        $params['full_name'] = $post['full_name'];
        $params['jabatan'] = $post['jabatan'];
        $params['role'] = $post['role'];
        $params['updated'] = date('Y-m-d H:i:s', time());

        $this->db->set($params);
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('tb_users');
    }

    public function hapus($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tb_users');
    }
}
