<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belum_login();
        check_admin();

        $this->load->model('user_m');
        $this->load->library('form_validation');

        // Form Rules
        $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');

        if ($this->uri->segment(2) == 'tambah') {
            $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_users.username]');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
        } elseif ($this->uri->segment(2) == 'update') {
            if (!empty($this->input->post('password'))) {
                $this->form_validation->set_rules('password', 'Password', 'required|trim');
            }
            $this->form_validation->set_rules('username', 'Username', 'required|trim|callback_username_check');
        }

        $this->form_validation->set_rules('role', 'Role', 'required', ['required' => 'Mohon pilih {field} terlebih dahulu.']);

        // Form Error Message
        $this->form_validation->set_message('required', '{field} tidak boleh kosong.');
        $this->form_validation->set_message('is_unique', '{field} <b>' . $this->input->post('username') . '</b> sudah terdaftar.');

        // Form_error() Delimiters
        $this->form_validation->set_error_delimiters('<span class="text-danger text-small">', '</span>');
    }

    public function index()
    {
        $data['user'] = $this->user_m->get();
        $this->template->load('admin/template', 'admin/pengguna/data', $data);
    }

    public function tambah()
    {
        // Buat Data Kosong
        $user = new stdClass();
        $user->id_user = NULL;
        $user->full_name = NULL;
        $user->jabatan   = NULL;
        $user->username  = NULL;
        $user->password  = NULL;
        $user->role      = NULL;
        // Kirim Data
        $data['row'] = $user;

        $data['header'] = 'Tambah Akun';
        $data['btn'] = 'tambah';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/pengguna/form', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    public function update($id)
    {
        // Kirim Data
        $data['row'] = $this->user_m->get('id_user', $id)->row();

        $data['header'] = 'Update Akun';
        $data['btn'] = 'update';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/pengguna/form', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    function process($post)
    {
        if (isset($post['tambah'])) {
            $this->user_m->add($post);
        } elseif (isset($post['update'])) {
            $this->user_m->update($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
            redirect('pengguna');
        } else {
            $this->session->set_flashdata('fail', 'Data gagal disimpan!');
            redirect('pengguna');
        }
    }

    public function hapus($id)
    {
        $this->user_m->hapus($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('pengguna');
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
