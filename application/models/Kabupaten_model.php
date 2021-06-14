<?php
class Kabupaten_model extends CI_MODEL {
    public function fetch_all()
    {                
        $this->db->select("*");                        
        $this->db->from('kabupaten');                        

        $query = $this->db->get();                
        return $query->result();
    }    

    public function fetch_by_id_provinsi($id)
    {                
        $this->db->select("id, nama");
        $this->db->from('kabupaten');     
        $this->db->where('id_provinsi', $id);

        $query = $this->db->get();        
        $output = '';
        if($query->num_rows() > 0) {
            $output .= '<option selected disabled value="">Choose...</option>';
            foreach ($query->result_array() as $row) {
                $output .= '<option value="'.$row['id'].'">'.$row['nama'].'</option>';
            }    
        }

        return $output;
    }    
}