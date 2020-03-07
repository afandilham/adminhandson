<?php

class M_kursus extends CI_Model
{

    function insert($data)
    {
        $query = $this->db->get_where('kursus', array('kursus' => $data['kursus']), 1);
        if ($query->num_rows() == 0) {
            $this->db->insert('kursus', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    function display()
    {
        $query = $this->db->query("select * from kursus");
        return $query->result();
    }

    function update($id, $data)
    {
        $this->db->where('id_kursus', $id);
        return $this->db->update('kursus', $data);
    }

    function delete($id)
    {
        return $this->db->delete('kursus', array('id_kursus' => $id));
    }

    function display_byID($id)
    {
        $query = $this->db->get_where('kursus', array('id_kursus' => $id));
        return $query->result();
    }
}
