<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inbox extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belum_login();

        $this->load->model('inbox_m');
    }

    public function index()
    {
        $data['pesan'] = $this->inbox_m->get('status', 2);
        $data['drafts'] = $this->inbox_m->get('status', 1);
        $this->template->load('admin/template', 'admin/inbox', $data);
    }

    public function hapus($id)
    {
        $this->inbox_m->tolak($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        }
        redirect('inbox');
    }

    public function terima($id)
    {
        $this->inbox_m->terima($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil diperbaharui!');
        }
        redirect('inbox');
    }

    public function tolak($id)
    {
        $this->inbox_m->tolak($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil diperbaharui!');
        }
        redirect('inbox');
    }
}
