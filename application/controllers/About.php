<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function profile()
    {
        $this->template->load('template', 'about/profilesekolah');
    }
}
