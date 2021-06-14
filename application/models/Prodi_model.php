<?php
class Prodi_model extends CI_MODEL {
    public function fetch_all()
    {                
        $this->db->select("p.id, concat_ws(' ', j.nama, p.nama) as nama");                        
        $this->db->from('program_studi p');        
        $this->db->join('jenjang j', 'p.id_jenjang = j.id', 'left');        

        $query = $this->db->get();                
        return $query->result();
    }    
}