<?php
class Api_model extends CI_Model
{
    public function fetch_all()
    {
        // $this->db->order_by('id', 'DESC');
        return $this->db->get('students');
    }

    public function insert_api($data)
    {
        $this->db->insert('students', $data);
    }

    function fetch_single($student_id)
    {
        $this->db->where("id", $student_id);
        $query = $this->db->get('students');
        return $query->result_array();
    }

    public function update_api($data)
    {
        $this->db->update('students', $data);
    }
}