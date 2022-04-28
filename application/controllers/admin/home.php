<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
        $data['template'] = 'admin/login';
        $this->load->view('admin/home', $data);
    }

    public function login()
    {
        $email = $this->input->post('email');
        $pass = md5($this->input->post('password'));

        $this->load->model('user');
        $result = $this->user->getLogin($email, $pass);

        $user = $this->db->get_where('users', ['email' => $email])->row();

        if ($result == 1) {
            $session = array(
                'id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'phone' => $user->phone
            );

            $this->session->set_userdata($session);

            $data['template'] = 'admin/dashboard';
            $this->load->view('admin/home', $data);
        } else {
            $data['template'] = 'admin/dashboard';
            $this->load->view('admin/home', $data);
        }
    }
}