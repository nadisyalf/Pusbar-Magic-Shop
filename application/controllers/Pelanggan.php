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
    public function delete($id_pelanggan= NULL)
    {
        $data = array('id_pelanggan' => $id_pelanggan);
        $this->m_pelanggan->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
        redirect('pelanggan');
    }

    public function register()
    {
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[tbl_pelanggan.email]',
        array(
            'required' => '%s Harus Diisi !!!',
            'is_unique'=> '%s Sudah terdaftar, silahkan login kembali !'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('ulangi_password', 'Retype Password', 'required|matches[password]',
        array(
            'required' => '%s Harus Diisi !!!',
            'matches'=> '%s Password tidak sama!'
        ));
        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Register Pelanggan',
                'isi' =>'v_register',
            );
            $this->load->view('layout/v_wrapper_frontend', $data, FALSE);

        }else{
            $data = array(
                'nama_pelanggan'=> $this->input->post('nama_pelanggan'),
                'alamat'=> $this->input->post('alamat'),
                'no_telp'=> $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),

        );
            $this->m_pelanggan->register($data);
            $this->session->set_flashdata('pesan', 'Akun Anda Berhasil Dibuat!!!');
            redirect('pelanggan/register');

        }  
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        
        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->pelanggan_login->login($email, $password);
        }
        
        $data = array(
                'title' => '👤Login Pelanggan',
                'isi' =>'v_login_pelanggan',
            );
            $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }

    public function logout()
    {
        $this->pelanggan_login->logout();
    }

    public function profilsaya()
    {
        //proteksi halaman
        $this->pelanggan_login->proteksi_halaman();
        $data = array(
            'title' => '👤Profil Saya',
            'pelanggan'=>$this->m_pelanggan->tampil_data(),
            'isi' =>'v_profil_saya',
        );

        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }

    
}