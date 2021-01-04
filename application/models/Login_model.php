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
    }//end of update user database

    //insert user database
    public function insert_user_data($data)
    {
        $this->db->insert('etcinema_user', $data);
    }//end of insert user database


}
