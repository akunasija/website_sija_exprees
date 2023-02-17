<?php

class Minuman_model extends CI_Model
{
    public function tampilminuman()
    {
        $query = $this->db->query('SELECT * FROM menu WHERE id_kategori=2');
        return $query->result();
    }
}