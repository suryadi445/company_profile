<?php

function belum_login()
{
    $ci           = &get_instance();
    $user_session = $ci->session->userdata('email');

    if (!$user_session) {
        redirect('auth/login');
    }
}

function sudah_login()
{
    $ci = get_instance();

    if ($ci->session->userdata('status') == 'admin') {
        redirect('admin');
    } elseif ($ci->session->userdata('status') == 'user') {
        redirect('admin');
    };
}
