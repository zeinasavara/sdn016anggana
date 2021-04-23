<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('galeri_m');
        $this->load->library('form_validation');

        // Form Rules
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        if (empty($_FILES['thumbnail']['name'])) {
            if ($this->uri->segment(2) == 'tambah') {
                $this->form_validation->set_rules('thumbnail', 'Thumbnail', 'required');
            }
        }

        // Form Error Message
        $this->form_validation->set_message('required', '{field} tidak boleh kosong.');

        // Form_error() Delimiters
        $this->form_validation->set_error_delimiters('<span class="text-danger text-small">', '</span>');

        // PAGINATION
        $this->load->library('pagination');
    }

    // Front-End
    public function index()
    {

        // CONFIG
        $config['base_url'] = base_url('galeri/index/');
        $config['total_rows'] = $this->galeri_m->get()->num_rows();
        $config['per_page'] = 8;
        $data['start'] = $this->uri->segment(3);
        // STYLING
        $config['full_tag_open'] = '<ul class="pagination pagination-circle">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;

        $config['prev_link'] = '<i class="fa fa-arrow-left"></i>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['next_link'] = '<i class="fa fa-arrow-right"></i>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link bg-success">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        // INITIALIZE
        $this->pagination->initialize($config);

        $data = [
            'row' => $this->galeri_m->getGaleri($config['per_page'], $data['start'])
        ];
        $this->template->load('template', 'galeri', $data);
    }

    // Back-End
    public function data()
    {
        belum_login();
        $data = [
            'row' => $this->galeri_m->get()
        ];
        $this->template->load('admin/template', 'admin/galeri/data', $data);
    }

    public function tambah()
    {
        belum_login();
        // Buat Data Kosong
        $galeri = new stdClass();
        $galeri->id_galeri  = NULL;
        $galeri->thumbnail  = NULL;
        $galeri->judul      = NULL;
        $galeri->deskripsi  = NULL;
        $galeri->tgl        = NULL;
        // Kirim Data
        $data['row'] = $galeri;

        $data['header']     = 'Tambah Galeri';
        $data['breadcrumb'] = 'galeri';
        $data['btn']        = 'tambah';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/galeri/form', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    public function update($id)
    {
        belum_login();
        // Kirim Data
        $data['row'] = $this->galeri_m->get('id_galeri', $id)->row();

        $data['header']     = 'Update Galeri';
        $data['breadcrumb'] = 'galeri';
        $data['btn']        = 'update';

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('admin/template', 'admin/galeri/form', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->process($post);
        }
    }

    public function process($post)
    {
        $config['upload_path']      = './assets/img/galeri';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 2048;
        $config['file_name']        = 'G' . date('ymdHis');

        $this->load->library('upload', $config);

        if (isset($post['tambah'])) {
            if ($this->upload->do_upload('thumbnail')) {
                $post['thumbnail'] = $this->upload->data('file_name');
                $this->galeri_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                }
                redirect('galeri/data');
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('fail', $error);
                redirect('galeri/tambah');
            }
        } elseif (isset($post['update'])) {
            if (@$_FILES['thumbnail']['name'] != NULL) {
                if ($this->upload->do_upload('thumbnail')) {

                    // Hapus thumbnail Lama di direktori
                    $galeri = $this->galeri_m->get('id_galeri', $post['id_galeri'])->row();
                    if ($galeri->thumbnail != NULL) {
                        $target_file = './assets/img/galeri/' . $galeri->thumbnail;
                        unlink($target_file);
                    }

                    $post['thumbnail'] = $this->upload->data('file_name');
                    $this->galeri_m->update($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                    }
                    redirect('galeri/data');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('fail', $error);
                    redirect('galeri/update/' . $post['id_galeri']);
                }
            } else {
                $this->galeri_m->update($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                }
                redirect('galeri/data');
            }
        }
    }

    public function hapus($id)
    {
        belum_login();
        // Hapus thumbnail di direktori
        $galeri = $this->galeri_m->get('id_galeri', $id)->row();
        $target_file = './assets/img/galeri/' . $galeri->thumbnail;
        unlink($target_file);

        $this->galeri_m->hapus($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        }
        redirect('galeri/data');
    }
}
