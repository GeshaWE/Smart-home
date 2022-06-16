<?php

Class Coba extends CI_Controller
{

    public function rfidread()
    {
        // $this->db->select('*');
        // $this->db->from ('tb_entry') ;
        // $this->db->where('uid') ;
        // $row = $this->db->get();
        // return $row;
        // echo "hasil" . $row;
        // print $row;

        $query = $this->db->get('tb_entry')->row_array();
        echo "Baca UID dari Website : " . $query['uid'];
    }
}