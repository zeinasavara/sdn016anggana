<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurikulum_m extends CI_Model
{
    public function get($params = null, $value = null)
    {

        if ($params != null && $value != null) {
            $this->db->where($params, $value);
        }
        $this->db->where('id_kurikulum !=', 1);

        $this->db->order_by('ekskul', 'ASC');
        $this->db->select('*');
        $this->db->from('tb_kurikulum');
        return $this->db->get();
    }

    public function getKalemik()
    {
        $this->db->where('id_kurikulum', 1);
        $this->db->order_by('ekskul', 'ASC');
        $this->db->select('*');
        $this->db->from('tb_kurikulum');
        return $this->db->get();
    }

    public function add($post)
    {
        $params['kalemik']      = NULL;
        $params['ekskul']       = ucwords($post['ekskul']);
        $params['thumbnail']    = $post['thumbnail'];
        $params['status']       = $post['status'];
        $this->db->insert('tb_kurikulum', $params);
    }

    public function update($post)
    {
        $params['ekskul']           = ucwords($post['ekskul']);
        if (!empty($post['thumbnail'])) {
            $params['thumbnail']    = $post['thumbnail'];
        }
        $params['status']           = $post['status'];

        $this->db->set($params);
        $this->db->where('id_kurikulum', $post['id_kurikulum']);
        $this->db->update('tb_kurikulum');
    }

    public function changeKalemik($post)
    {
        $params['kalemik']     = $post['kalemik'];
        $this->db->set($params);
        $this->db->where('id_kurikulum', 1);
        $this->db->update('tb_kurikulum');
    }

    public function hapus($id)
    {
        $this->db->where('id_kurikulum', $id);
        $this->db->delete('tb_kurikulum');
    }
}
