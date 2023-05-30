<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseQuery extends CI_Model {
    public function signup($u_data)
    {
        $query = $this->db->insert('users', $u_data);
        return $query;
        
    }
    public function signin($u_data)
    {
        $email = $u_data['email'];
        $pass = $u_data['pass'];

        $this->db->where('u_email', $email);
        $this->db->where('u_pass', $pass);
        $query = $this->db->get('users');

        return $query->result();
        
    }
}