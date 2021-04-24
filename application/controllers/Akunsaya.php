<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akunsaya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belum_login();

        $this->load->model('user_m');
        $this->load->library('form_validation');

        // Form Rules
        $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');

        if (!empty($this->input->post('password'))) {
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim|callback_username_check');


        // Form Error Message
        $this->form_validation->set_message('required', '{field} tidak boleh kosong.');
        $this->form_validation->set_message('is_unique', '{field} <b>' . $this->input->post('username') . '</b> sudah terdaftar.');

        // Form_error() Delimiters
        $this->form_validation->set_error_delimiters('<span class="text-danger text-small">', '</span>');
    }

    public function index()
    {
        // Kirim Data
        $data['row'] = $this->user_m->get('id_user', $this->fungsi->user_login()->id_user)->row();

        $data['header'] = 'Akun Saya';
        $data['btn'] = 'update';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/akunsaya', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    function process($post)
    {
        $this->user_m->update($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
            redirect('akunsaya');
        } else {
            $this->session->set_flashdata('fail', 'Data gagal disimpan!');
            redirect('akunsaya');
        }
    }

    public function username_check()
    {
        $post  = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM `tb_users` WHERE `username` = '$post[username]' AND `id_user` != '$post[id_user]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} <b>' . $this->input->post('username') . '</b> sudah terdaftar.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
