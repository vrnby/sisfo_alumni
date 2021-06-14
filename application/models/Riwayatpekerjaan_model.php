<?php
class Riwayatpekerjaan_model extends CI_MODEL {
    public function fetch_last_by_nim($nim)
    {                
        $this->db->select("jenis_pekerjaan, nama, jabatan, tgl_masuk, telepon, alamat, pendapatan");                        
        $this->db->from('riwayat_pekerjaan');   
        $this->db->where('nim_alumni', $nim);   
        $this->db->order_by('id desc');
        $this->db->limit(1,0);

        $query = $this->db->get();                
        return $query->result();
    }    

    public function fetch_by_nim($nim)
    {
        $this->db->select("id, nama, jenis_kantor, jabatan, tgl_masuk, pendapatan, info_jpc");
        $this->db->from('riwayat_pekerjaan');   
        $this->db->where('nim_alumni', $nim);   

        $query = $this->db->get();                
        return $query->result();
    }

    public function fetch_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('riwayat_pekerjaan');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function add($data)
    {
        $this->db->insert('riwayat_pekerjaan', $data);
    }    

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('riwayat_pekerjaan', $data);        
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('riwayat_pekerjaan');
    }
}