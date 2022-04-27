<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data = $this->api_model->fetch_all();
        echo json_encode($data->result_array());
    }

    function insert()
    {
        $this->form_validation->set_rules("name", "Name", "required");
        $this->form_validation->set_rules("major", "Major", "required");
        $this->form_validation->set_rules("course", "Course", "required");
        $this->form_validation->set_rules("phone", "Phone", "required");

        $array = array();
        if ($this->form_validation->run()) {
            $data = array(
                'name' => trim($this->input->post('name')),
                'major'  => trim($this->input->post('major')),
                'course' => trim($this->input->post('course')),
                'phone' => trim($this->input->post('phone')),
            );
            $this->api_model->insert_api($data);
            $array = array(
                'success'  => true
            );
        } else {
            $array = array(
                'error'    => true,
                'name_error' => form_error('name'),
                'major_error' => form_error('major'),
                'course_error' => form_error('course'),
                'phone_error' => form_error('phone')
            );
        }
        echo json_encode($array, true);
    }
}