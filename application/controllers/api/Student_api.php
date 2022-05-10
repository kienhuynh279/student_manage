<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Student_api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $studentList = json_encode($this->student_model->fetch_all()->result_array());
        $data['students'] = $studentList;
        echo $data['students'];
    }

    public function create()
    {
        $this->form_validation->set_rules("name", "Name", "required");
        $this->form_validation->set_rules("major", "Major", "required");
        $this->form_validation->set_rules("course", "Course", "required");
        $this->form_validation->set_rules("phone", "Phone", "required");
        if ($this->form_validation->run()) {
            $name = trim($this->input->post('name'));
            $major = trim($this->input->post('major'));
            $course = trim($this->input->post('course'));
            $phone = trim($this->input->post('phone'));
            $this->student_model->insert_student($name, $major, $course, $phone);
            redirect(base_url() . 'admin/home/student');
        } else {
            $array = array(
                'error'    => true,
                'name_error' => form_error('name_error'),
                'major_error' => form_error('major'),
                'course_error' => form_error('course'),
                'phone_error' => form_error('phone')
            );
        }

        echo json_encode($array, true);
    }


    public function update($id)
    {
        $this->form_validation->set_rules("name", "Name", "required");
        $this->form_validation->set_rules("major", "Major", "required");
        $this->form_validation->set_rules("course", "Course", "required");
        $this->form_validation->set_rules("phone", "Phone", "required");
        if ($this->form_validation->run()) {
            $name = $this->input->post('name');
            $major = $this->input->post('major');
            $course = $this->input->post('course');
            $phone = $this->input->post('phone');
            $this->student_model->update_student($id, $name, $major, $course, $phone);
            redirect(base_url() . 'admin/home/student');
            $array = array(
                'error' => false,
            );
        } else {
            $array = array(
                'error'    => true,
                'name_error' => form_error('name_error'),
                'major_error' => form_error('major'),
                'course_error' => form_error('course'),
                'phone_error' => form_error('phone')
            );
        }
        echo json_encode($array, true);
    }

    public function delete($id)
    {
        $this->student_model->delete_single_student($id);
        redirect(base_url() . 'api/student_view_api');
    }
}