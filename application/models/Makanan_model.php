<?php

class Makanan_model extends CI_Model
{
    public function tampilmakanan()
    {
        $query = $this->db->query('SELECT * FROM menu WHERE id_kategori=1');
        return $query->result();
    }
}