<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ptk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gtk_m');

        // PAGINATION
        $this->load->library('pagination');
    }

    public function guru()
    {
        // CONFIG
        $config['base_url'] = base_url('ptk/guru/');
        $config['total_rows'] = $this->gtk_m->get('gtk', 1)->num_rows();
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

        $data['guru'] = $this->gtk_m->getGTK('gtk', 1, 'status', 1, $config['per_page'], $data['start']);
        $this->template->load('template', 'gtk/guru', $data);
    }

    public function tendik()
    {
        // CONFIG
        $config['base_url'] = base_url('ptk/tendik/');
        $config['total_rows'] = $this->gtk_m->get('gtk', 2)->num_rows();
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

        $data['tendik'] = $this->gtk_m->getGTK('gtk', 2, 'status', 1, $config['per_page'], $data['start']);
        $this->template->load('template', 'gtk/tendik', $data);
    }
}
