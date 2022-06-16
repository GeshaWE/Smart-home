<?php

class Fungsi{

    protected $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

    function user_login()
    {
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        $this->ci->$user;
        $id_user = $this->ci->session->userdata('email');
        $user_data = $this->ci->get($email)->row();
        return $user_data;
    }
}