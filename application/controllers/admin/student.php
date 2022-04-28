<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
    }

    public function index()
    {
        $this->load->model('Students');
        $data['students'] = $this->Students->getStudent();

        $data['template'] = 'admin/student/index';
        $this->load->view('admin/home', $data);
    }

    public function createIndex()
    {
        $data['template'] = 'admin/student/create';
        $this->load->view('admin/home', $data);
    }

    public function create()
    {
        redirect(base_url() . 'admin/home/student');
    }

    public function edit($id)
    {
        $this->load->model('Students');
        $data['student'] = $this->Students->getStudentById($id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('course', 'Course', 'required');
        $this->form_validation->set_rules('major', 'Major', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        if ($this->form_validation->run() == false) {
            $data['template'] = 'admin/student/edit';
            $this->load->view('admin/home', $data);
        } else {
            $formArr = array(
                'name' => $this->input->post('name'),
                'course' => $this->input->post('course'),
                'major' => $this->input->post('major'),
                'phone' => $this->input->post('phone'),
            );

            $this->Students->update($id, $formArr);

            redirect(base_url() . 'admin/home/student');
        }
    }

    public function delete($id)
    {
        $this->load->model('Students');
        $student = $this->Students->getStudentById($id);
        if (empty($student)) {
            redirect(base_url() . 'admin/home/student');
        }

        $this->Students->delete($id);
        redirect(base_url() . 'admin/home/student');
    }
}