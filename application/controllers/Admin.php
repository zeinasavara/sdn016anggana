<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        belum_login();
        $this->load->view('admin/dashboard');
    }
}
