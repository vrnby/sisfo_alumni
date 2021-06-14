<?php
class Jenjang_model extends CI_MODEL {
    public function fetch_all()
    {                
        $this->db->select("*");                        
        $this->db->from('jenjang');   

        $query = $this->db->get();                
        return $query->result();
    }    
}