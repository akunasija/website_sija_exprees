<?php

class Pesanan_model extends CI_Model
{
    public function tampilpesanan()
    {
        $query = $this->db->query('SELECT * FROM transaksi');
        return $query->result();
    }
}