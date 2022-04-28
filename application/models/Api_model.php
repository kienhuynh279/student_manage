<?php
class Api_model extends CI_Model
{
    public function fetch_all()
    {
        return $this->db->get('students');
    }

    public function insert_api($data)
    {
        $this->db->insert('students', $data);
    }

    public function update_api($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('students', $data);
    }

    function fetch_single($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get('students');
        return $query->result_array();
    }

    function delete_single_user($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("students");
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}