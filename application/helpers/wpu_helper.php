<?php

function is_logged_in_admin()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        

        if ($ci->session->userdata('role_id') == 1) {
            redirect('auth/blocked');
        }
    }
}

function is_logged_in_user()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {


        if ($ci->session->userdata('role_id') == 2) {
            redirect('auth/blocked2');
        }
    }
}
