<?php
class AlumniHasJadwalWisuda_model extends CI_MODEL {
    public function fetch_alumni_daftar()
    {
        $this->db->select('*');
        $this->db->from('alumni_has_jadwal_wisuda');
        $this->db->where('memilih is not null', null);        
        $this->db->where('terdaftar', '');        

        $query = $this->db->get();
        return $query->result();
    }

    public function fetch_by_nim($nim)
    {
        $this->db->select('*');
        $this->db->from('alumni_has_jadwal_wisuda');
        $this->db->where('nim_alumni', $nim);        

        $query = $this->db->get();
        return $query->result();
    }

    public function alumni_choose($nim, $choice)
    {
        $data = array(
            'nim_alumni' => $nim, 
            'memilih' => $choice
        );
        $this->db->insert('alumni_has_jadwal_wisuda', $data);
    }    

    public function update($id, $id_jadwal_wisuda, $id_kuota_wisuda, $terdaftar)
    {
        $this->db->where('id', $id);
        $data = array(
            'id_jadwal_wisuda' => $id_jadwal_wisuda, 
            'id_kuota_wisuda' => $id_kuota_wisuda, 
            'terdaftar' => $terdaftar, 
        );
        $this->db->update('alumni_has_jadwal_wisuda', $data);        
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('alumni_has_jadwal_wisuda');
    }
}