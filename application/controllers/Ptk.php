<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ptk extends CI_Controller
{
    public function tendik()
    {
        $this->template->load('template', 'ptk/tendik');
    }

    public function gtk()
    {
        $this->template->load('template', 'ptk/gtk');
    }
}
