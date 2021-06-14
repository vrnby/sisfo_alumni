<?php
class Biodata_akademik_model extends CI_MODEL {    

    public function add($data)
    {
        $this->db->insert('biodata_akademik', $data);
    }

    public function fetch_by_nim($nim)
    {
        $this->db->select('*');
        $this->db->from('biodata_akademik');
        $this->db->where('nim_alumni', $nim);

        $query = $this->db->get();
        return $query->result();
    }

    public function update($nim, $data)
    {
        $this->db->where('nim_alumni', $nim);
        $this->db->update('biodata_akademik', $data);        
    }

    public function delete($nim)
    {
        $this->db->where('nim_alumni', $nim);
        $this->db->delete('biodata_akademik');
    }
}