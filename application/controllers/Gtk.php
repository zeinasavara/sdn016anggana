<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gtk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belum_login();

        $this->load->model('gtk_m');
        $this->load->library('form_validation');

        // Form Rules
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('gtk', 'GTK', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');

        if ($this->uri->segment(2) == 'tambah') {
            $this->form_validation->set_rules('nip', 'NIP', 'trim|is_unique[tb_gtk.nip]');
        } elseif ($this->uri->segment(2) == 'update') {
            $this->form_validation->set_rules('nip', 'NIP', 'trim|callback_nip_check');
        }

        // Form Error Message
        $this->form_validation->set_message('required', '{field} tidak boleh kosong.');
        $this->form_validation->set_message('is_unique', '{field} <b>' . $this->input->post('username') . '</b> sudah digunakan.');

        // Form_error() Delimiters
        $this->form_validation->set_error_delimiters('<span class="text-danger text-small">', '</span>');
    }

    public function index()
    {
        $data['gtk'] = $this->gtk_m->get();
        $this->template->load('admin/template', 'admin/gtk/data', $data);
    }

    public function tambah()
    {
        // Buat Data Kosong
        $gtk = new stdClass();
        $gtk->id_gtk    = NULL;
        $gtk->nama      = NULL;
        $gtk->nip       = NULL;
        $gtk->jabatan   = NULL;
        $gtk->foto      = NULL;
        $gtk->gtk       = NULL;
        $gtk->status    = NULL;
        // Kirim Data
        $data['row'] = $gtk;

        $data['header'] = 'Tambah GTK';
        $data['breadcrumb'] = 'GTK';
        $data['btn'] = 'tambah';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/gtk/form', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    public function update($id)
    {
        // Kirim Data
        $data['row'] = $this->gtk_m->get('id_gtk', $id)->row();

        $data['header'] = 'Update GTK';
        $data['breadcrumb'] = 'GTK';
        $data['btn'] = 'update';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/gtk/form', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    public function process($post)
    {
        $config['upload_path']      = './assets/img/ptk';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 2048;
        $config['file_name']        = 'GTK' . date('ymdHis');

        $this->load->library('upload', $config);

        if (isset($post['tambah'])) {
            if (@$_FILES['foto']['name'] != NULL) {
                if ($this->upload->do_upload('foto')) {
                    $post['foto'] = $this->upload->data('file_name');
                    $this->gtk_m->add($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                    }
                    // redirect($_SERVER['HTTP_REFERER']);
                    redirect($post['kembali']);
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('fail', $error);
                    redirect('gtk');
                }
            } else {
                $this->gtk_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                }
                redirect('gtk');
            }
        } elseif (isset($post['update'])) {
            if (@$_FILES['foto']['name'] != NULL) {
                if ($this->upload->do_upload('foto')) {

                    // Hapus Foto Lama di direktori
                    $gtk = $this->gtk_m->get('id_gtk', $post['id_gtk'])->row();
                    if ($gtk->foto != NULL) {
                        if ($gtk->foto != 'ptk-default.png') {
                            $target_file = './assets/img/ptk/' . $gtk->foto;
                            unlink($target_file);
                        }
                    }

                    $post['foto'] = $this->upload->data('file_name');
                    $this->gtk_m->update($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                    }
                    redirect('gtk');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('fail', $error);
                    redirect('gtk/tambah');
                }
            } else {
                $this->gtk_m->update($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                }
                redirect('gtk');
            }
        }
    }

    public function rstFoto($id)
    {
        // Hapus Foto Lama di direktori
        $gtk = $this->gtk_m->get('id_gtk', $id)->row();
        if ($gtk->foto != NULL) {
            if ($gtk->foto != 'ptk-default.png') {
                $target_file = './assets/img/ptk/' . $gtk->foto;
                unlink($target_file);
            }
        }

        $this->gtk_m->rstFoto($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Foto berhasil direset!');
        }
        redirect('gtk/update/' . $id);
    }

    public function hapus($id)
    {
        // Hapus foto di direktori
        $gtk = $this->gtk_m->get('id_gtk', $id)->row();
        if ($gtk->foto != 'ptk-default.png') {
            $target_file = './assets/img/ptk/' . $gtk->foto;
            unlink($target_file);
        }

        $this->gtk_m->hapus($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        }
        redirect('gtk');
    }

    public function nip_check()
    {
        $post  = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM `tb_gtk` WHERE `nip` = '$post[nip]' AND `id_gtk` != '$post[id_gtk]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('nip_check', '{field} <b>' . $this->input->post('nip') . '</b> sudah digunakan.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
