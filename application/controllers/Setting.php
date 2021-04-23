<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belum_login();

        $this->load->model('setting_m');
        $this->load->library('form_validation');

        // Form Rules
        $this->form_validation->set_rules('jumbotron_title', 'Teks Jumbotron', 'required');
        $this->form_validation->set_rules('sambutan', 'Sambutan', 'required');
        $this->form_validation->set_rules('nama_website', 'Nama Sekolah', 'required');
        $this->form_validation->set_rules('meta_title', 'Meta Title', 'required');
        $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
        $this->form_validation->set_rules('meta_keyword', 'Meta Keyword', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');

        // Form Error Message
        $this->form_validation->set_message('required', '{field} tidak boleh kosong.');

        // Form_error() Delimiters
        $this->form_validation->set_error_delimiters('<span class="text-danger text-small">', '</span>');
    }

    public function index()
    {
        $data['row'] = $this->setting_m->get('id_setting', 1)->row();
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/setting', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    function process($post)
    {
        $this->setting_m->update($post);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        }
        redirect('setting');
    }

    public function changeJumbotron()
    {
        $config['upload_path']      = './assets/img/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 2048;
        $config['file_name']        = 'jumbotron';

        $this->load->library('upload', $config);

        // Gantik Struktur Baru
        if ($this->upload->do_upload('jumbotron')) {
            // Hapus Struktur lama di direktori
            $jumbotron = $this->fungsi->setting()->jumbotron;
            $target_file = './assets/img/' . $jumbotron;
            unlink($target_file);

            $post['jumbotron'] = $this->upload->data('file_name');
            $this->setting_m->changeJumbotron($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            }
            redirect('setting');
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('fail', $error);
            redirect('setting');
        }
    }

    public function changeHeader()
    {
        $config['upload_path']      = './assets/img/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 2048;
        $config['file_name']        = 'bg_header';

        $this->load->library('upload', $config);

        // Gantik Struktur Baru
        if ($this->upload->do_upload('head_img')) {
            // Hapus Struktur lama di direktori
            $head_img = $this->fungsi->setting()->head_img;
            $target_file = './assets/img/' . $head_img;
            unlink($target_file);

            $post['head_img'] = $this->upload->data('file_name');
            $this->setting_m->changeHeader($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            }
            redirect('setting');
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('fail', $error);
            redirect('setting');
        }
    }

    public function changeIcon()
    {
        $config['upload_path']      = './assets/img/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 2048;
        $config['file_name']        = 'icon_title';

        $this->load->library('upload', $config);

        // Gantik Struktur Baru
        if ($this->upload->do_upload('icon_title')) {
            // Hapus Icon lama jika ada di direktori
            $icon_title = $this->fungsi->setting()->icon_title;
            $target_file = './assets/img/' . $icon_title;
            unlink($target_file);

            $post['icon_title'] = $this->upload->data('file_name');
            $this->setting_m->changeIcon($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            }
            redirect('setting');
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('fail', $error);
            redirect('setting');
        }
    }

    public function changeFotoKepsek()
    {
        $config['upload_path']      = './assets/img/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 2048;
        $config['file_name']        = 'kepsek';

        $this->load->library('upload', $config);

        // Gantik Struktur Baru
        if ($this->upload->do_upload('foto_kepsek')) {
            // Hapus Struktur lama di direktori
            $foto_kepsek = $this->fungsi->setting()->foto_kepsek;
            // var_dump($foto_kepsek);
            // die;
            $target_file = './assets/img/' . $foto_kepsek;
            unlink($target_file);

            $post['foto_kepsek'] = $this->upload->data('file_name');
            $this->setting_m->changeFotoKepsek($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            }
            redirect('setting');
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('fail', $error);
            redirect('setting');
        }
    }
}
