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
}
