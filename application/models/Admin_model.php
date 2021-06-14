<?php
class Admin_model extends CI_MODEL {
    public function fetch_by_username($username)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);        

        $query = $this->db->get();
        return $query->result();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('admin', $data);
    }
}