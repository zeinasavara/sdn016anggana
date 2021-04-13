<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ptk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gtk_m');
    }

    public function guru()
    {
        $data['guru'] = $this->gtk_m->get('gtk', 1, 'status', 1);
        $this->template->load('template', 'gtk/guru', $data);
    }

    public function tendik()
    {
        $data['tendik'] = $this->gtk_m->get('gtk', 2, 'status', 1);
        $this->template->load('template', 'gtk/tendik', $data);
    }
}
