<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentangkami_m extends CI_Model
{
    public function getProfile($params = null, $value = null)
    {

        if ($params != null && $value != null) {
            $this->db->where($params, $value);
        }

        $this->db->order_by('id_profilesekolah', 'DESC');
        $this->db->select('*');
        $this->db->from('tb_profilesekolah');
        return $this->db->get();
    }

    public function getSVM($params = null, $value = null)
    {

        if ($params != null && $value != null) {
            $this->db->where($params, $value);
        }

        $this->db->select('*');
        $this->db->from('tb_strukturvisimisi');
        return $this->db->get();
    }

    public function addprf($post)
    {
        $params['title']        = $post['title'];
        $params['description']  = $post['description'];
        $params['status']       = $post['status'];
        $this->db->insert('tb_profilesekolah', $params);
    }

    public function updateprf($post)
    {
        $params['title']        = $post['title'];
        $params['description']  = $post['description'];
        $params['status']       = $post['status'];

        $this->db->set($params);
        $this->db->where('id_profilesekolah', $post['id_profilesekolah']);
        $this->db->update('tb_profilesekolah');
    }

    public function upSVM($post)
    {
        $params['visi'] = $post['visi'];
        $params['misi'] = $post['misi'];

        $this->db->set($params);
        $this->db->where('id_strukturvisimisi', 1);
        $this->db->update('tb_strukturvisimisi');
    }

    public function changeStruktur($post)
    {
        $params['struktur_organisasi']     = $post['struktur_organisasi'];
        $this->db->set($params);
        $this->db->where('id_strukturvisimisi', 1);
        $this->db->update('tb_strukturvisimisi');
    }

    public function hapusPrf($id)
    {
        $this->db->where('id_profilesekolah', $id);
        $this->db->delete('tb_profilesekolah');
    }
}
