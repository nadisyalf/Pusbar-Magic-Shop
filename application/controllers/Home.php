<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        
    }
    
    public function index()
    {
        $data = array(
            'title' => '🏡Home',
            'menu'=>$this->m_home->get_all_data(),
            'isi' =>'v_home',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }

    //menampilkan halaman kategori
    public function kategori($id_kategori)
    {
        $kategori = $this->m_home->kategori($id_kategori);
        $data = array(
            'title' => '🎡Kategori Barang : ' . $kategori->nama_kategori,
            'menu'=>$this->m_home-> get_all_data_menu($id_kategori),
            'isi' =>'v_kategori_menu',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }

    public function detail_menu($id_menu)
    {
        //$kategori = $this->m_home->kategori($id_kategori);
        $data = array(
            'title' => '🎈Detail Barang',
            'gambar' =>$this->m_home-> gambar_menu($id_menu),
            'menu'=>$this->m_home-> detail_menu($id_menu),
            'isi' =>'v_detail_menu',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
}

/* End of file Home.php */
