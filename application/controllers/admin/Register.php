<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->load->library('encrypt');
        $this->load->library("session");
        $this->load->model('user');
    }

    public function index()
    {
        $data['template'] = 'admin/register';
        $this->load->view('admin/home', $data);
    }

    public function validation()
    {
        $this->form_validation->set_rules('first_name', 'First_name', 'require|trim');
        $this->form_validation->set_rules('last_name', 'Last_name', 'require|trim');
        $this->form_validation->set_rules('email', 'Email', 'require|trim|valid_email|is_unique[codeigniyer_register.email]');
        $this->form_validation->set_rules('password', 'Password', 'require');

        if ($this->form_validation->run()) {
        } else {
            $this->index();
        }
    }
}