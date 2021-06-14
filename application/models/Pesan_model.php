<?php
class Pesan_model extends CI_MODEL {
    public function fetch_all()
    {                
        $this->db->select("*");
        $this->db->from('pesan');
        $this->db->order_by('tanggal', 'DESC');
        $this->db->order_by('isread', 'ASC');

        $query = $this->db->get();
        return $query->result();
    }       

    public function count_unread_message()
    {
        $this->db->select("*");
        $this->db->from('pesan');
        $this->db->where('isread', '0');

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function fetch_by_id($id)
    {
        $this->db->select("*");
        $this->db->from('pesan');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query->result();
    }    

    public function add($tanggal, $nim, $email, $judul, $uraian)
    {
        $data = array(
            'tanggal' => $tanggal, 
            'nim' => $nim,
            'email' => $email,
            'judul' => $judul,
            'uraian' => $uraian
        );
        $this->db->insert('pesan', $data);
    }    

    public function pesanreaded($id)
    {
        $this->db->where('id', $id);
        $data = array('isread' => 1);
        $this->db->update('pesan', $data);
    }   

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pesan');
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