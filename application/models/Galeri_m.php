<?php
defined('BASEPATH') or exit('No direct script access allowed');

class galeri_m extends CI_Model
{
    public function get($params = null, $value = null)
    {

        if ($params != null && $value != null) {
            $this->db->where($params, $value);
        }

        $this->db->order_by('id_galeri', 'DESC');
        $this->db->select('tb_galeri.*, tb_users.jabatan');
        $this->db->join('tb_users', 'tb_users.id_user = tb_galeri.id_user');
        $this->db->from('tb_galeri');
        return $this->db->get();
    }

    public function getLimit()
    {
        $this->db->order_by('id_galeri', 'DESC');
        $this->db->select('tb_galeri.*, tb_users.jabatan');
        $this->db->join('tb_users', 'tb_users.id_user = tb_galeri.id_user');
        $this->db->from('tb_galeri');
        $this->db->limit(8);
        return $this->db->get();
    }

    public function add($post)
    {
        $params['thumbnail']    = $post['thumbnail'];
        $params['judul']        = ucwords($post['judul']);
        $params['deskripsi']    = $post['deskripsi'];
        $params['tgl']          = $post['tgl'];
        $params['id_user']      = $this->fungsi->user_login()->id_user;
        $this->db->insert('tb_galeri', $params);
    }

    public function update($post)
    {
        if (!empty($post['thumbnail'])) {
            $params['thumbnail'] = $post['thumbnail'];
        }
        $params['judul']         = ucwords($post['judul']);
        $params['deskripsi']     = $post['deskripsi'];
        $params['updated']       = date('Y-m-d H:i:s', time());

        $this->db->set($params);
        $this->db->where('id_galeri', $post['id_galeri']);
        $this->db->update('tb_galeri');
    }

    public function hapus($id)
    {
        $this->db->where('id_galeri', $id);
        $this->db->delete('tb_galeri');
    }
}
