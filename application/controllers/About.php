<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('setting_m');
    }

    public function profile()
    {
        $data = [
            'row' => $this->setting_m->getProfile('status', 1)
        ];
        $this->template->load('template', 'about/profilesekolah', $data);
    }

    public function visimisi()
    {
        $data = [
            'row' => $this->setting_m->getSVM()->row()
        ];
        $this->template->load('template', 'about/visimisi', $data);
    }

    public function struktur()
    {
        $data = [
            'row' => $this->setting_m->getSVM()->row()
        ];
        $this->template->load('template', 'about/struktur', $data);
    }
}
