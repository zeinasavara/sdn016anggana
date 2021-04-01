<?php

function sudah_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');
    if ($user_session) {
        redirect('admin');
    }
}

function belum_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');
    if ($user_session == FALSE) {
        redirect('auth');
    }
}
