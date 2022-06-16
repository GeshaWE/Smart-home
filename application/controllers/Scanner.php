<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scanner extends CI_Controller {

    public function __construct(){
        
        parent::__construct();
    }

    public function proses_ambil_rfid() {

        $rfid_data = $this->input->get('data1');

        // hapus semua riwayat rfid sebelumnya
        $this->db->truncate('tb_entry');

        // insertkan rfid baru
        $data = array('uid' => $rfid_data);
        $this->db->insert('tb_entry', $data);
    }

}