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
}