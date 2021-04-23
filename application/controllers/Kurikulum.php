<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurikulum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->uri->segment(2) !== 'kalenderakademik' && $this->uri->segment(2) !== 'ekstrakurikuler') {
            belum_login();
        }

        $this->load->model('kurikulum_m');
        $this->load->library('form_validation');

        // Form Rules
        $this->form_validation->set_rules('ekskul', 'Ekstrakurikuler', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if (empty($_FILES['thumbnail']['name'])) {
            if ($this->uri->segment(2) == 'Tambah') {
                $this->form_validation->set_rules('thumbnail', 'Thumbnail', 'required');
            }
        }

        // Form Error Message
        $this->form_validation->set_message('required', '{field} tidak boleh kosong.');

        // Form_error() Delimiters
        $this->form_validation->set_error_delimiters('<span class="text-danger text-small">', '</span>');
    }

    public function kalenderakademik()
    {
        $data['kalemik'] = $this->kurikulum_m->getKalemik()->row();
        $this->template->load('template', 'kurikulum/kalenderakademik', $data);
    }

    public function ekstrakurikuler()
    {
        $data['ekskul'] = $this->kurikulum_m->get('status !=', 2);
        $this->template->load('template', 'kurikulum/ekstrakurikuler', $data);
    }

    public function index()
    {
        $data['kurikulum'] = $this->kurikulum_m->get();
        $data['kalemik'] = $this->kurikulum_m->getKalemik()->row();
        $this->template->load('admin/template', 'admin/kurikulum/data', $data);
    }

    public function tambah()
    {
        // Buat Data Kosong
        $kurikulum = new stdClass();
        $kurikulum->id_kurikulum  = NULL;
        $kurikulum->ekskul        = NULL;
        $kurikulum->thumbnail     = NULL;
        $kurikulum->status        = NULL;
        // Kirim Data
        $data['row'] = $kurikulum;

        $data['header']     = 'Tambah Ekstrakurikuler';
        $data['breadcrumb'] = 'Kurikulum';
        $data['btn']        = 'tambah';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/kurikulum/form', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    public function update($id)
    {
        // Kirim Data
        $data['row'] = $this->kurikulum_m->get('id_kurikulum', $id)->row();

        $data['header']     = 'Update Ekstrakurikuler';
        $data['breadcrumb'] = 'Kurikulum';
        $data['btn']        = 'update';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/kurikulum/form', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    public function process($post)
    {
        $config['upload_path']      = './assets/img/kurikulum';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 2048;
        $config['file_name']        = 'EKSKUL' . date('ymdHis');

        $this->load->library('upload', $config);

        if (isset($post['tambah'])) {
            if ($this->upload->do_upload('thumbnail')) {
                $post['thumbnail'] = $this->upload->data('file_name');
                $this->kurikulum_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                }
                redirect('kurikulum');
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('fail', $error);
                redirect('kurikulum/tambah');
            }
        } elseif (isset($post['update'])) {
            if (@$_FILES['thumbnail']['name'] != NULL) {
                if ($this->upload->do_upload('thumbnail')) {

                    // Hapus thumbnail Lama di direktori
                    $kurikulum = $this->kurikulum_m->get('id_kurikulum', $post['id_kurikulum'])->row();
                    if ($kurikulum->thumbnail != NULL) {
                        $target_file = './assets/img/kurikulum/' . $kurikulum->thumbnail;
                        unlink($target_file);
                    }

                    $post['thumbnail'] = $this->upload->data('file_name');
                    $this->kurikulum_m->update($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                    }
                    redirect('kurikulum');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('fail', $error);
                    redirect('kurikulum/update/' . $post['id_kurikulum']);
                }
            } else {
                $this->kurikulum_m->update($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                }
                redirect('kurikulum');
            }
        }
    }

    public function hapus($id)
    {
        // Hapus thumbnail di direktori
        $kurikulum = $this->kurikulum_m->get('id_kurikulum', $id)->row();
        $target_file = './assets/img/kurikulum/' . $kurikulum->thumbnail;
        unlink($target_file);

        $this->kurikulum_m->hapus($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        }
        redirect('kurikulum');
    }

    public function changeKalemik()
    {
        $config['upload_path']      = './assets/img/kurikulum';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 2048;
        $config['file_name']        = 'Kalender-Akademik';

        $this->load->library('upload', $config);

        // Gantik Kalemik Baru
        if ($this->upload->do_upload('kalemik')) {
            // Hapus kalemik lama di direktori
            $kurikulum = $this->kurikulum_m->getKalemik()->row();
            $target_file = './assets/img/kurikulum/' . $kurikulum->kalemik;
            unlink($target_file);

            $post['kalemik'] = $this->upload->data('file_name');
            $this->kurikulum_m->changeKalemik($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            }
            redirect('kurikulum');
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('fail', $error);
            redirect('kurikulum');
        }

        $this->kurikulum_m->changeKalemik($this->input->post('kalemik'));

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        } else {
            $this->session->set_flashdata('fail', 'Data gagal disimpan!');
        }
        redirect('kurikulum');
    }
}
