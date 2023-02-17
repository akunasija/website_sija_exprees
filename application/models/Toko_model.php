<?php

class Toko_model extends CI_Model
{
    public function tampiltoko()
    {
        $query = $this->db->query('SELECT * FROM toko');
        return $query->result();
    }
}
