<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belum_login();

        $this->load->model(['gtk_m']);
    }

    public function index()
    {
        $data = [
            'guru' => $this->gtk_m->get('gtk', 1)->result(),
            'tendik' => $this->gtk_m->get('gtk', 2)->result(),
        ];
        $this->template->load('admin/template', 'admin/dashboard', $data);
    }
}
