<?php
class Provinsi_model extends CI_MODEL {
    public function fetch_all()
    {                
        $this->db->select("*");                        
        $this->db->from('provinsi');              
        $this->db->order_by("nama", "asc");  

        $query = $this->db->get();                
        return $query->result();
    }    
}