<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanan_masuk extends CI_Model 
{
    public function pesanan_masuk()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status_order = 0');
        //$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->order_by('id_transaksi', 'desc'); 
        return $this->db->get()->result();  
    }

    public function pesanan_proses()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status_order = 1');
        //$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->order_by('id_transaksi', 'desc'); 
        return $this->db->get()->result();  
    }

    public function pesanan_dikirim()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status_order = 2');
        //$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->order_by('id_transaksi', 'desc'); 
        return $this->db->get()->result();  
    }

    public function pesanan_diterima()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status_order = 3');
        //$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->order_by('id_transaksi', 'desc'); 
        return $this->db->get()->result();  
    }

    public function update_pesanan($data)
    {
        $this->db->where('id_transaksi', $data['id_transaksi']);
        $this->db->update('tbl_transaksi', $data);
    }

    

}