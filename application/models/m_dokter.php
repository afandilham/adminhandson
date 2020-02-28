<?php 
 
class M_dokter extends CI_Model{	
    
	function insert($data){		
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
    
    function display(){
        $query=$this->db->query("select * from doctor");
        return $query->result();
    }

    function update(){

    }

    function delete(){

    }

    function display_byID(){
        
    }

}