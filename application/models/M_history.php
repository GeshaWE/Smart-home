<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_history extends CI_Model {
    public function ambil_data_history() 
    {
        $query = $this->db->get('tb_history');
        return $query;
    }
    
}