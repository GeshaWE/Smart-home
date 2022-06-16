<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class informasi extends CI_Controller {

    public function __construct(){
        
        parent::__construct();
        
        if (!$this->session->userdata('email'))
        {
            redirect('login');
        }
    
    }

    public function index()
    {
        $this->load->model('M_smarthome');
        $data['row'] = $this->M_smarthome->get();
        $this->load->view('informasi/view_informasi', $data);
        
    }

    public function detail($id)
    {
        $this->load->model('M_smarthome');
        $query = $this->M_smarthome->get($id);
        if($query->num_rows()>0)
        {
            $data['row']= $query->row();
            $this->load->view('informasi/detail', $data);
        }
        else
        {
            // echo "<script> alert('Data Tidak Ditemukan);";
            // echo "window.location= '" .site_url('informasi'). "';</script>";
            echo "data tidak ditemukan";
        }
    }

    public function edit($id)
    {
        $this->load->model('M_smarthome');
        $query = $this->M_smarthome->get($id);
        if($query->num_rows()>0)
        {
            $data['row']= $query->row();
            $this->load->view('informasi/edit', $data);
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->M_smarthome->edit($post);
            // echo "<script> alert('Data Tidak Ditemukan);";
            // echo "window.location= '" .site_url('informasi'). "';</script>";
            // echo "data tidak ditemukan";
        }
    }

    public function del()
    {
        $this->load->model('M_smarthome');
        $id = $this->input->post('id');
        

        $this->M_smarthome->m_hapus_data_smarthome($id);
    }
    public function m_hapus_data_smarthome( $id ) {

            $this->db->where('id', $id)->delete('tb_user');
            redirect('informasi/index');
    }

}