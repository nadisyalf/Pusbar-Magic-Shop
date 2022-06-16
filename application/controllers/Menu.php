<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
        $this->load->model('m_kategori');

    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => '🍪Daftar Barang',
            'menu' => $this->m_menu->get_all_data(),
            'isi' =>'menu/v_menu',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    // Add a new item
    public function add()
    {
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));

        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));
        
        $this->form_validation->set_rules('harga', 'Harga', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));

        $this->form_validation->set_rules('berat', 'Berat', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));

        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']     = '5000';
            //$config['max_width'] = '1024';
            //$config['max_height'] = '768';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => '🍪Add Menu',
                    'kategori' => $this->m_kategori->get_all_data(),
                    'error_upload'=>$this->upload->display_errors(),
                    'isi' =>'menu/v_add',
                );
                $this->load->view('layout/v_wrapper_backend', $data, FALSE);
            } else {
                $upload_data = array('uploads'=>  $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/uploads/'. $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'nama_menu' =>$this->input->post('nama_menu'),
                    'id_kategori' =>$this->input->post('id_kategori'),
                    'harga' =>$this->input->post('harga'),
                    'berat' =>$this->input->post('berat'),
                    'keterangan' =>$this->input->post('keterangan'),
                    'gambar' =>$upload_data['uploads']['file_name'],
                );
                $this->m_menu->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!!!');
                redirect('menu');
            }
        }
        
        $data = array(
            'title' => '🍪Add Menu',
            'kategori' => $this->m_kategori->get_all_data(),
            'isi' =>'menu/v_add',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    //Update one item
    public function edit($id_menu = NULL)
    {
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));

        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));
        
        $this->form_validation->set_rules('harga', 'Harga', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));

        $this->form_validation->set_rules('berat', 'Berat', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));

        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required',
        array('required' => '%s Harus Diisi !!!'
        ));

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']     = '5000';
            //$config['max_width'] = '1024';
            //$config['max_height'] = '768';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => '🍮Edit Menu',
                    'kategori' => $this->m_kategori->get_all_data(),
                    'menu' =>$this->m_menu->get_data($id_menu),
                    'error_upload'=>$this->upload->display_errors(),
                    'isi' =>'menu/v_edit',
                );
                $this->load->view('layout/v_wrapper_backend', $data, FALSE);
            } else {
                //hapus gambar
                $menu=$this->m_menu->get_data($id_menu);
                if ($menu->gambar != "") {
                    unlink('./assets/uploads/' . $menu->gambar);
                }
                //end hapus gambar
                $upload_data = array('uploads'=>  $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/uploads/'. $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_menu' => $id_menu,
                    'nama_menu' =>$this->input->post('nama_menu'),
                    'id_kategori' =>$this->input->post('id_kategori'),
                    'harga' =>$this->input->post('harga'),
                    'berat' =>$this->input->post('berat'),
                    'keterangan' =>$this->input->post('keterangan'),
                    'gambar' =>$upload_data['uploads']['file_name'],
                );
                $this->m_menu->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit!!!');
                redirect('menu');

                //Jika tanpa harus ganti barang
                $data = array(
                    'id_menu' => $id_menu,
                    'nama_menu' =>$this->input->post('nama_menu'),
                    'id_kategori' =>$this->input->post('id_kategori'),
                    'harga' =>$this->input->post('harga'),
                    'berat' =>$this->input->post('berat'),
                    'keterangan' =>$this->input->post('keterangan'),
                    'gambar' =>$upload_data['uploads']['file_name'],
                );
                $this->m_menu->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit!!!');
                redirect('menu');
            }
        }
        
        $data = array(
            'title' => '🍮Edit Menu',
            'kategori' => $this->m_kategori->get_all_data(),
            'menu' =>$this->m_menu->get_data($id_menu),
            'isi' =>'menu/v_edit',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);

    }
    



    //Delete one item
    public function delete( $id_menu= NULL )
    {
        //hapus gambar
        $menu=$this->m_menu->get_data($id_menu);
        if ($menu->gambar != "") {
            unlink('./assets/uploads/' . $menu->gambar);
        }
        //end hapus gambar 
        $data = array('id_menu' => $id_menu);
        $this->m_menu->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
        redirect('menu');
    }
}


/* End of file Barang.php */

