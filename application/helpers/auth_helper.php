<?php
function check_logged_in()
{
    $CI = &get_instance();
    if (!$CI->session->userdata('logged_in')) {
        redirect('auth/blocked');
    }
}
