<?php 
 
class M_admin extends CI_Model{	
    
	function insert_dokter($data){		
        $condition = "name_doctor =" . "'" . $data['name_doctor'] . "'";
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {

            // Query to insert data in database
            $this->db->insert('doctor', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
	}	
}