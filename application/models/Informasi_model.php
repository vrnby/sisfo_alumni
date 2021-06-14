<?php
class Informasi_model extends CI_MODEL {
    public function fetch_all()
    {                
        $this->db->select("*");
        $this->db->from('informasi');

        $query = $this->db->get();
        return $query->result();
    }    

    public function fetch_all_by_id_tipe_informasi($id)
    {
        $this->db->select("id, judul, tanggal, rangkuman, foto");
        $this->db->from('informasi');
        $this->db->where('id_tipe_informasi', $id);

        $query = $this->db->get();
        return $query->result();        
    }    

    public function fetch_by_id($id)
    {
        $this->db->select("*");
        $this->db->from('informasi');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function fetch_image_and_file_by_id($id)
    {
        $this->db->select("id, foto, file");
        $this->db->from('informasi');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function add($data)
    {
        $this->db->insert('informasi', $data);
    }    

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('informasi', $data);
    }   

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('informasi');
    }

    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);        
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
}