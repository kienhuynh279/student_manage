<?php
class Student_model extends CI_Model
{
    public function fetch_all()
    {
        return $this->db->get('students');
    }

    public function insert_student($name, $major, $course, $phone)
    {
        $data['name'] = $name;
        $data['major'] = $major;
        $data['course'] = $course;
        $data['phone'] = $phone;

        $this->db->insert('students', $data);
    }

    public function update_student($id, $name, $major, $course, $phone)
    {
        $data['name'] = $name;
        $data['major'] = $major;
        $data['course'] = $course;
        $data['phone'] = $phone;
        $this->db->where('id', $id);
        $this->db->update('students', $data);
    }

    function fetch_single_student($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('students');
        return $query->row_array();
    }

    function delete_single_student($id)
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