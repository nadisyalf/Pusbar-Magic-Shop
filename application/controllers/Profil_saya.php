<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller 
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pelanggan');
        $this->load->model('m_auth');
        
        
    }

    public function index( )
    {
            $data = array(
                'title' => '👤 Customer',
                'pelanggan' => $this->m_pelanggan->get_all_data(),
                'isi' =>'v_pelanggan',
            );
            $this->load->view('layout/v_wrapper_backend', $data, FALSE);

            
    }
)