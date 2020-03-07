<?php

class M_kategori extends CI_Model
{

    function insert($data)
    {
        $query = $this->db->get_where('kategori', array('kategori' => $data['kategori']), 1);
        if ($query->num_rows() == 0) {
            $this->db->insert('kategori', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    function display()
    {
        $query = $this->db->query("select * from kategori");
        return $query->result();
    }

    function update($id, $data)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->update('kategori', $data);
    }

    function delete($id)
    {
        return $this->db->delete('kategori', array('id_kategori' => $id));
    }

    function display_byID($id)
    {
        $query = $this->db->get_where('kategori', array('id_kategori' => $id));
        return $query->result();
    }
}
