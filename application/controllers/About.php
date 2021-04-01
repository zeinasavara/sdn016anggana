<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function profile()
    {
        $this->template->load('template', 'about/profilesekolah');
    }

    public function visimisi()
    {
        $this->template->load('template', 'about/visimisi');
    }

    public function struktur()
    {
        $this->template->load('template', 'about/struktur');
    }
}
