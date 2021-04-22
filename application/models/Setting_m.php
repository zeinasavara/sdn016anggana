<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting_m extends CI_Model
{
    public function get($params = null, $value = null)
    {

        if ($params != null && $value != null) {
            $this->db->where($params, $value);
        }

        $this->db->select('*');
        $this->db->from('tb_setting');
        return $this->db->get();
    }

    public function update($post)
    {
        $params['nama_website']     = $post['nama_website'];
        $params['meta_title']       = $post['meta_title'];
        // $params['icon_title']       = $post['icon_title'];
        $params['meta_desc']        = $post['meta_desc'];
        $params['meta_keyword']     = $post['meta_keyword'];
        // $params['jumbotron']        = $post['jumbotron'];
        $params['jumbotron_title']  = $post['jumbotron_title'];
        // $params['foto_kepsek']      = $post['foto_kepsek'];
        $params['sambutan']         = $post['sambutan'];
        $params['alamat']           = $post['alamat'];
        $params['email']            = $post['email'];
        $params['telepon']          = $post['telepon'];
        // $params['head_img']         = $post['head_img'];

        $this->db->set($params);
        $this->db->where('id_setting', 1);
        $this->db->update('tb_setting');
    }

    public function changeJumbotron($post)
    {
        $params['jumbotron']     = $post['jumbotron'];
        $this->db->set($params);
        $this->db->where('id_setting', 1);
        $this->db->update('tb_setting');
    }

    public function changeHeader($post)
    {
        $params['head_img']     = $post['head_img'];
        $this->db->set($params);
        $this->db->where('id_setting', 1);
        $this->db->update('tb_setting');
    }

    public function changeIcon($post)
    {
        $params['icon_title']     = $post['icon_title'];
        $this->db->set($params);
        $this->db->where('id_setting', 1);
        $this->db->update('tb_setting');
    }

    public function changeFotoKepsek($post)
    {
        $params['foto_kepsek']     = $post['foto_kepsek'];
        $this->db->set($params);
        $this->db->where('id_setting', 1);
        $this->db->update('tb_setting');
    }
}
