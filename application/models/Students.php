<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getStudent()
    {
        return $student = $this->db->get('students')->result_array();
    }

    public function getStudentById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('students')->row_array();
    }

    public function create($data)
    {
        $this->load->helper('url');

        return $this->db->insert('students', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('students', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('students');
    }
}