<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurikulum extends CI_Controller
{
    public function kalenderakademik()
    {
        $this->template->load('template', 'kurikulum/kalenderakademik');
    }

    public function ekstrakurikuler()
    {
        $this->template->load('template', 'kurikulum/ekstrakurikuler');
    }
}
