<?php
class Galeri_model extends CI_MODEL {
    public function fetch_all()
    {                
        $this->db->select("*");
        $this->db->from('galeri');
        $this->db->order_by('tgl', 'DESC');        

        $query = $this->db->get();
        return $query->result();
    }           

    public function fetch_by_id($id)
    {
        $this->db->select("*");
        $this->db->from('galeri');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query->result();
    }    

    public function fetch_foto_by_id($id)
    {
        $this->db->select("id, foto");
        $this->db->from('galeri');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query->result();
    }    

    public function add($tanggal, $nama, $foto)
    {
        $data = array(
            'tgl' => $tanggal, 
            'nama' => $nama,
            'foto' => $foto
        );
        $this->db->insert('galeri', $data);
    }    

    public function update($id, $tanggal, $nama, $foto)
    {
        $data = array(
            'tgl' => $tanggal, 
            'nama' => $nama,
            'foto' => $foto
        );
        $this->db->where('id', $id);
        $this->db->update('galeri', $data);
    }   

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('galeri');
    }
}