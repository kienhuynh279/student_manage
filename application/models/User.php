<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        // Load the database library
        $this->load->database();

        $this->userTbl = 'users';
    }
    function getLogin($email, $pass)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        return $this->db->get('users')->num_rows();
    }
}