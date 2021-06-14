<?php
class JadwalWisuda_model extends CI_MODEL {
    public function fetch_all_wisuda()
    {
        $this->db->select('*');
        $this->db->from('jadwal_wisuda');
        $this->db->order_by('tanggal_wisuda', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }    

    public function fetch_all_active_wisuda()
    {
        $this->db->select('*');
        $this->db->from('jadwal_wisuda');
        $this->db->where('status', 'Dibuka');
        $this->db->order_by('tanggal_wisuda', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }
        

    public function fetch_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('jadwal_wisuda');
        $this->db->where('id', 1);

        $query = $this->db->get();
        return $query->result();
    }

    public function add_wisuda($tahun_gel_sesi, $nama_wisuda, $tanggal_wisuda, $kuota_instusi, $kuota_total, $status)
    {
        $insertId = 0;
        $data = array(
            'tahun_gel_sesi' => $tahun_gel_sesi, 
            'nama_wisuda' => $nama_wisuda,
            'tanggal_wisuda' => $tanggal_wisuda,
            'kuota_instusi' => $kuota_instusi,
            'kuota_total' => $kuota_total,
            'status' => $status
        );
        $this->db->trans_begin();
        
        $this->db->insert('jadwal_wisuda', $data);                
        $insertId = $this->db->insert_id();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();            
        } else {
            $this->db->trans_commit();
            // do load all id prodi and make transaction for multiple input
            $this->db->select('*');
            $this->db->from('program_studi');            

            $query = $this->db->get();        
            if ($query->num_rows() > 0) {
                $data = [];
                foreach ($query->result_array() as $row) {
                    $insertRow = array(
                        'id_jadwal_wisuda' => $insertId, 
                        'id_program_studi' => $row['id'],                                                
                        'status' => 'Dibuka'                    
                    );
                    array_push($data, $insertRow);
                }                
                $this->db->trans_begin();

                $this->db->insert_batch('kuota_wisuda', $data);
                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();            
                } else {
                    $this->db->trans_commit();
                }
            }
        }
        echo $insertId;
    }    

    public function tes() 
    {
        $this->db->select('*');
        $this->db->from('program_studi');            

        $query = $this->db->get();        
        if ($query->num_rows() > 0) {
            $data = [];
            foreach ($query->result_array() as $row) {
                $insertRow = array(
                    'id_jadwal_wisuda' => 1, 
                    'id_program_studi' => $row['id'],
                    'status' => 'Dibuka'                    
                );
                array_push($data, $insertRow);
            }
            print_r($data);
        } else {
            echo "---------------------------------------------";
        }
    }

    public function update_wisuda($id, $tahun_gel_sesi, $nama_wisuda, $tanggal_wisuda, $kuota_instusi, $kuota_total, $status)
    {
        $this->db->where('id', $id);
        $data = array(
            'tahun_gel_sesi' => $tahun_gel_sesi,
            'nama_wisuda' => $nama_wisuda, 
            'tanggal_wisuda' => $tanggal_wisuda, 
            'kuota_instusi' => $kuota_instusi,
            'kuota_total' => $kuota_total,
            'status' => $status
             
        );
        $this->db->update('jadwal_wisuda', $data);        
    }

    public function update_status_wisuda($id, $status)
    {
        $this->db->where('id', $id);
        $data = array(            
            'status' => $status
             
        );
        $this->db->update('jadwal_wisuda', $data);        
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('alumni_has_jadwal_wisuda');
    }
}