<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gtk_m extends CI_Model
{
    public function get($params = null, $value = null, $params2 = null, $value2 = null)
    {

        if ($params != null && $value != null) {
            $this->db->where($params, $value);
        }
        if ($params2 != null && $value2 != null) {
            $this->db->where($params2, $value2);
        }

        $this->db->order_by('nama', 'ASC');
        $this->db->select('*');
        $this->db->from('tb_gtk');
        return $this->db->get();
    }

    public function getGTK($params, $value, $params2, $value2, $limit, $start)
    {
        $this->db->where($params, $value);
        return $this->db->get('tb_gtk', $limit, $start);
    }

    public function add($post)
    {
        $params['nama']     = $post['nama'];
        $params['nip']      = $post['nip'] ? $post['nip'] : NULL;
        $params['jabatan']  = ucwords($post['jabatan']);
        $params['gtk']      = $post['gtk'];
        $params['status']   = $post['status'];
        $params['foto']     = $post['foto'] ? $post['foto'] : 'ptk-default.png';
        $this->db->insert('tb_gtk', $params);
    }

    public function update($post)
    {
        $params['nama']     = $post['nama'];
        $params['nip']      = $post['nip'] ? $post['nip'] : NULL;
        $params['jabatan']  = $post['jabatan'];
        $params['gtk']      = $post['gtk'];
        $params['status']   = $post['status'];
        if (!empty($post['foto'])) {
            $params['foto']     = $post['foto'];
        }
        $params['updated'] = date('Y-m-d H:i:s', time());

        $this->db->set($params);
        $this->db->where('id_gtk', $post['id_gtk']);
        $this->db->update('tb_gtk');
    }

    public function rstFoto($id)
    {
        $params['foto']     = 'ptk-default.png';
        $this->db->set($params);
        $this->db->where('id_gtk', $id);
        $this->db->update('tb_gtk');
    }

    public function hapus($id)
    {
        $this->db->where('id_gtk', $id);
        $this->db->delete('tb_gtk');
    }
}
