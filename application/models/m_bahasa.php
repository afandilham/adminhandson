<?php

class M_bahasa extends CI_Model
{

    function insert($data)
    {
        $query = $this->db->get_where('bahasa', array('bahasa' => $data['bahasa']), 1);
        if ($query->num_rows() == 0) {
            $this->db->insert('bahasa', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    function display()
    {
        $query = $this->db->query("select * from bahasa");
        return $query->result();
    }

    function update($id, $data)
    {
        $this->db->where('id_bahasa', $id);
        return $this->db->update('bahasa', $data);
    }

    function delete($id)
    {
        return $this->db->delete('bahasa', array('id_bahasa' => $id));
    }

    function display_byID($id)
    {
        $query = $this->db->get_where('bahasa', array('id_bahasa' => $id));
        return $query->result();
    }
}
