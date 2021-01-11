<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    //login user function
    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('user');
        return $result;
    }

    //login customer function
    public function customer_login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $result = $this->db->get('customer');
        return $result;
    }

    //customer already exist check function
    public function is_already_register($id)
    {
        $this->db->where('login_oauth_uid', $id);
        $query = $this->db->get('etcinema_user');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //update user data
    public function update_user_data($data, $id)
    {
        $this->db->where('login_oauth_uid', $id);
        $this->db->update('etcinema_user', $data);
    } //end of update user database

    //insert user database
    public function insert_user_data($data)
    {
        $this->db->insert('etcinema_user', $data);
    } //end of insert user database

    //user register function
    public function customer_signup($enc_password)
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'phone' => $this->input->post('phone'),

        );

        return $this->db->insert('customer', $data);
    } //end of user register

    //check_username_exists() function
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('customer', array('username' => $username));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    } //end of checkusername exist

    //check_email_exists() function
    public function check_email_exists($email)
    {
        $query = $this->db->get_where('customer', array('email' => $email));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    } //end of check email exist

    //check phone exist function
    public function check_phone($phone)
    {
        $query = $this->db->get_where('customer', array('phone_no' => $phone));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    } //end of check phone exist
}
