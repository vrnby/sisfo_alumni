<?php
class Tipeinformasi_model extends CI_MODEL {
    public function fetch_all()
    {                
        $this->db->select("*");                        
        $this->db->from('tipe_informasi');   

        $query = $this->db->get();                
        return $query->result();
    }    
}