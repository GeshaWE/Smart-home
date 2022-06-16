<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_data extends CI_Controller {

    public function __construct(){
        
        parent::__construct();
        
        if (!$this->session->userdata('email'))
        {
            redirect('login');
        }
        $this->load->library('form_validation');
    
    }

    function index()
    {   
        
            $this->load->view('tambah_data/view_tambahdata');
    }


    // entry data 
    function entry_data(){

        $uid = "";

        $ambil_data = $this->db->get('tb_entry');

        // cek apakah ada UID ? 
        if ( $ambil_data->num_rows() > 0 ) {

            // ada 
            $uid = $ambil_data->row()->uid;
        }


        echo json_encode( $uid );
    }

    // insert data
    public function insert() {

        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        //$this->form_validation->set_rules('camera', 'Camera', 'required');
        $this->form_validation->set_message('required', '%s Masih Kosong');
        if($this->form_validation->run()==FALSE){

            $this->load->view('tambah_data/view_tambahdata');
        }
        else
        {
            echo "Salah";

            $nama = $this->input->post('nama');
            $ektp = $this->input->post('uid');
            $password = $this->input->post('pass');
            $tgl = $this->input->post('tgl');

            $data = array(

                'nama'  => $nama,
                'uid'   => $ektp,
                'password' => $password,
                'Tanggal'  => $tgl
            );

            $this->db->insert('tb_user', $data);

            $html = '<div class="alert alert-success">Pemberitahuan<br><small>Akun berhasil didaftarkan pada '.date('d F Y H.i A').'</small></div>';
            $this->session->set_flashdata('msg', $html);

        
        redirect('tambah_data/index');
        }
    }

    public function form()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_data/view_registercam');
        $this->load->view('template/footer');
    }

    public function display()
    {
        echo 1;
    }

}