<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentangkami extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belum_login();

        $this->load->model('tentangkami_m');
        $this->load->library('form_validation');

        // Form Rules
        $this->form_validation->set_rules('title', 'Judul', 'required|trim');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');

        // Form Error Message
        $this->form_validation->set_message('required', '{field} tidak boleh kosong.');

        // Form_error() Delimiters
        $this->form_validation->set_error_delimiters('<span class="text-danger text-small">', '</span>');
    }

    public function index()
    {
        $data = [
            'profile' => $this->tentangkami_m->getProfile(),
            'svm' => $this->tentangkami_m->getSVM()->row()
        ];

        $this->template->load('admin/template', 'admin/tentangkami/index', $data);
    }

    public function tambahprf()
    {
        // Buat Data Kosong
        $profile = new stdClass();
        $profile->id_profilesekolah = NULL;
        $profile->title             = NULL;
        $profile->description       = NULL;
        $profile->status            = NULL;
        // Kirim Data
        $data['row'] = $profile;

        $data['header']     = 'Tambah Profile';
        $data['breadcrumb'] = 'profile sekolah';
        $data['btn']        = 'tambah';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/tentangkami/form_prf', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    public function updateprf($id)
    {
        // Kirim Data
        $data['row'] = $this->tentangkami_m->getProfile('id_profilesekolah', $id)->row();

        $data['header']     = 'Update Profile';
        $data['breadcrumb'] = 'profile sekolah';
        $data['btn']        = 'update';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/tentangkami/form_prf', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    function process($post)
    {
        if (isset($post['tambah'])) {
            $this->tentangkami_m->addprf($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            }
            redirect('tentangkami');
        } elseif (isset($post['update'])) {
            $this->tentangkami_m->updateprf($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            }
            redirect('tentangkami');
        }
    }

    public function processvm($id)
    {
        $post = $this->input->post(null, TRUE);
        $this->tentangkami_m->upSVM($post);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        }
        redirect('tentangkami');
    }

    public function changeStruktur()
    {
        $config['upload_path']      = './assets/img/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 2048;
        $config['file_name']        = 'Struktur_Organisasi';

        $this->load->library('upload', $config);

        // Gantik Struktur Baru
        if ($this->upload->do_upload('struktur_organisasi')) {
            // Hapus Struktur lama di direktori
            $svm = $this->tentangkami_m->getSVM()->row();
            $target_file = './assets/img/' . $svm->struktur_organisasi;
            unlink($target_file);

            $post['struktur_organisasi'] = $this->upload->data('file_name');
            $this->tentangkami_m->changeStruktur($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            }
            redirect('tentangkami');
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('fail', $error);
            redirect('tentangkami');
        }
    }

    public function hapusPrf($id)
    {
        $this->tentangkami_m->hapusPrf($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        }
        redirect('tentangkami');
    }
}
