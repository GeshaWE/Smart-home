<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class dashboard extends CI_Controller {

//     function index()
//     {
//         $this->load->view('dashoard/view_dashboard');
//     }

//     // function tambah_data()
//     // {
//     //     $this->load->view('tambah_data/view_tambahdata');
//     // }

// }

class Dashboard extends CI_Controller {


    // konstruktor
    public function __construct(){
        
        parent::__construct();
        $this->load->model('M_history');
        
        if (!$this->session->userdata('email'))
        {
            redirect('login');
        }
    
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $dt_model_history = $this->M_history->ambil_data_history();

        $data['hasil_history'] =  $dt_model_history;

        $this->load->view('template/header');
        $this->load->view('history/view_history', $data);
        $this->load->view('template/footer');
    }

}