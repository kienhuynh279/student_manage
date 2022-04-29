<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_test_api extends CI_Controller
{
    public function index()
    {
        $api_url = "http://localhost/StudentManage/api/Student_api";

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);

        $data['result'] = json_decode($response);
        $data['template'] = 'admin/student/index';
        $this->load->view('admin/home', $data);
    }

    public function create()
    {
        $api_url = "http://localhost/StudentManage/api/student_api/create";

        $form_data = array(
            'name' => $this->input->post('name'),
            'major' => $this->input->post('major'),
            'course' => $this->input->post('course'),
            'phone' => $this->input->post('phone'),
        );

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);

        $data['template'] = 'admin/student/create';
        $this->load->view('admin/home', $data);
    }

    public function update($id)
    {
        $api_url = "http://localhost/StudentManage/api/student_api/update";

        $form_data = array(
            'name' => $this->input->post('name'),
            'major' => $this->input->post('major'),
            'course' => $this->input->post('course'),
            'phone' => $this->input->post('phone'),
        );

        $client = curl_init($api_url);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);

        $this->load->model('student_model');

        $data['student'] = $this->student_model->fetch_single_student($id);
        $data['template'] = 'admin/student/edit';

        $this->load->view('admin/home', $data);
    }
}