<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_m');
        $id_user = $this->ci->session->userdata('id_user');
        $user = $this->ci->user_m->get('id_user', $id_user)->row();
        return $user;
    }

    function setting()
    {
        $this->ci->load->model('setting_m');
        $setting = $this->ci->setting_m->get('id_setting', 1)->row();
        return $setting;
    }
}
