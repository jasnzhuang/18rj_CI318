<?php
class User_model extends CI_Model{

    public function get_users($id)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }

    public function register($enc_password){
        // User data array
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
        );

        // Insert user
        return $this->db->insert('users', $data);
    }

    // Log user in
    public function login($username, $password){
        // Validate
        //select * from users where username=$username and password=$password
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            return false;
        }
    }

    // Check username exists
    public function check_username_exists($username){
        $query = $this->db->get_where('users', array('username' => $username));

        if(empty($query->row_array())){
            return true;
        } else {
            return false;
        }
    }

    // Check email exists
    public function check_email_exists($email){
        $query = $this->db->get_where('users', array('email' => $email));

        if(empty($query->row_array())){
            return true;
        } else {
            return false;
        }
    }
}