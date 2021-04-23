<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inbox_m extends CI_Model
{
    public function get($params = null, $value = null)
    {

        if ($params != null && $value != null) {
            $this->db->where($params, $value);
        }

        $this->db->order_by('id_pesan', 'DESC');
        $this->db->select('*');
        $this->db->from('tb_pesan');
        return $this->db->get();
    }

    public function receive($post)
    {
        $params['nama_lengkap'] = ucwords($post['nama_lengkap']);
        $params['email']        = $post['email'];
        $params['pesan']        = $post['pesan'];
        $params['status']       = 1;
        $this->db->insert('tb_pesan', $params);
    }

    public function terima($id)
    {
        $this->db->set('status', 2);
        $this->db->where('id_pesan', $id);
        $this->db->update('tb_pesan');
    }

    public function tolak($id)
    {
        $this->db->where('id_pesan', $id);
        $this->db->delete('tb_pesan');
    }
}
