<?php

use function PHPSTORM_META\type;

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
        $result = $this->api_model->fetch_all();
        $encode = json_encode($result->result_array());
        $data['students'] = $encode;


        echo $data['students'];
    }

    function fetch_single($id)
    {
        if ($id) {
            $data['student'] = $this->api_model->fetch_single($id);
            foreach ($data['student'] as $row) {
                $output['name'] = $row["name"];
                $output['major'] = $row["major"];
                $output['course'] = $row["course"];
                $output['phone'] = $row["phone"];
            }
            echo json_encode($output);
        }
    }

    function create()
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
            $data = array(
                'name' => trim($this->input->post('name')),
                'major'  => trim($this->input->post('major')),
                'course' => trim($this->input->post('course')),
                'phone' => trim($this->input->post('phone')),
            );

            $this->api_model->update_api($data, $id);
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

    public function delete($id)
    {
        if ($id) {
            if ($this->api_model->delete_single_user($id)) {
                $array = array(
                    'success' => true
                );
            } else {
                $array = array(
                    'error' => true
                );
            }

            redirect(base_url() . 'api/test_api');
        }
    }
}