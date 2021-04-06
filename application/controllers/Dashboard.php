<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belum_login();

        $this->load->model('user_m');
    }

    public function index()
    {
        $this->template->load('admin/template', 'admin/dashboard');
    }
}
