<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hubungi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('inbox_m');
        $this->load->library('form_validation');

        // Form Rules
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('pesan', 'pesan', 'required|trim');

        // Form Error Message
        $this->form_validation->set_message('required', '{field} tidak boleh kosong.');

        // Form_error() Delimiters
        $this->form_validation->set_error_delimiters('<span class="text-danger text-small">', '</span>');
    }

    public function index()
    {
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'hubungi');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    function process($post)
    {
        $this->inbox_m->receive($post);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Terima kasih! Pesan anda sudah kami terima.');
        }
        redirect('hubungi');
    }
}
