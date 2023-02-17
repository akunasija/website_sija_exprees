<?php

class Menu_model extends CI_Model
{
    public function tampilmenu()
    {
        $query = $this->db->query('SELECT * FROM menu');
        return $query->result();
    }

    public function tampilmenutoko($id)
    {
        $query = $this->db->query('SELECT * FROM menu where id_toko=' . $id);
        return $query->result();
    }
}
