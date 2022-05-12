<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_gambarmenu extends CI_Model 
{

    public function get_all_data() 
    {
        $this->db->select('tbl_menu.* ,COUNT(tbl_gambar.id_menu) as total_gambar');
        $this->db->from('tbl_menu');
        $this->db->join('tbl_gambar', 'tbl_gambar.id_menu = tbl_menu.id_menu', 'left');
        $this->db->group_by('tbl_menu.id_menu');
        $this->db->order_by('tbl_menu.id_menu', 'desc');
        return $this->db->get()->result();
    }

    public function get_data($id_gambar)
    {
        $this->db->select('*');
        $this->db->from('tbl_gambar');
        //$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_menu.id_kategori', 'left');
        $this->db->where('id_gambar', $id_gambar);
        return $this->db->get()->row();
    }

    public function get_gambar($id_menu)
    {
        $this->db->select('*');
        $this->db->from('tbl_gambar');
        //$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_menu.id_kategori', 'left');
        $this->db->where('id_menu', $id_menu);
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tbl_gambar', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_gambar', $data['id_gambar']);
        $this->db->delete('tbl_gambar', $data);
    }
}


