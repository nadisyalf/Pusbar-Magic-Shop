<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Gambarmenu extends CI_Controller 
{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_gambarmenu');
        $this->load->model('m_menu');
        
        
    }
    
    public function index()
    {
        $data = array(
            'title' => '🖼️Gambar Menu',
            'gambarmenu' => $this->m_gambarmenu->get_all_data(),
            'isi' =>'gambarmenu/v_index',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    public function add($id_menu)
    {

        $this->form_validation->set_rules('keterangan', 'Keterangan Gambar', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/uploadsmenu/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']     = '5000';
            //$config['max_width'] = '1024';
            //$config['max_height'] = '768';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => '🖼️Add Gambar Menu',
                    'error_upload'=>$this->upload->display_errors(),
                    'menu' =>$this->m_menu->get_data($id_menu),
                    'gambar' => $this->m_gambarmenu->get_gambar($id_menu),
                    'isi' =>'gambarmenu/v_add',
                );
                $this->load->view('layout/v_wrapper_backend', $data, FALSE);
            } else {
                $upload_data = array('uploads'=>  $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/uploadsmenu/'. $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_menu' =>$id_menu,
                    'keterangan' =>$this->input->post('keterangan'),
                    'gambar' =>$upload_data['uploads']['file_name'],
                );
                $this->m_gambarmenu->add($data);
                $this->session->set_flashdata('pesan', 'Gambar Berhasil Ditambahkan!!!');
                redirect('gambarmenu/add/' . $id_menu);
            }
        }
        

        $data = array(
            'title' => '📷Add Gambar',
            'menu' =>$this->m_menu->get_data($id_menu),
            'gambar' => $this->m_gambarmenu->get_gambar($id_menu),
            'isi' =>'gambarmenu/v_add',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
        
    }

    public function delete( $id_menu, $id_gambar )
    {
        //hapus gambar
        $gambar = $this->m_gambarmenu->get_data($id_gambar);
        if ($gambar->gambar != "") {
            unlink('./assets/uploadsmenu/' . $gambar->gambar);
        }
        //end hapus gambar 
        $data = array('id_gambar' => $id_gambar);
        $this->m_gambarmenu->delete($data);
        $this->session->set_flashdata('pesan', 'Gambar Berhasil Dihapus !!!');
        redirect('gambarmenu/add/' . $id_menu);
    }

}

/* End of file Home.php */
