<?php

    function check_alredy_login()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('email');
        if($user_session)
        {
            redirect('dashboard');
        }
    }

    function check_not_login()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('email');
        if($user_session)
        {
            redirect('login');
        }
    }