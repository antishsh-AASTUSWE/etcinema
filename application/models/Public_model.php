
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Public_model extends CI_Model
{

    //login user function
    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('user');
        return $result;
    }
    //get movie function
    public function get_movie($id = false)
    {
        if ($id === false) {
            $query = $this->db->get("movie");
            return $query->result_array();
        }
        $query = $this->db->get_where('movie', array('movie_id' => $id));
        return $query->row_array();
    } //end of get movie
    //Get Cinema Function
    public function get_cinema($id = false)
    {
        if ($id === false) {
            $query =  $this->db->get('cinema');
            return $query->result_array();
        }
        $query = $this->db->get_where('cinema', array('cinema_id' => $id));
        return $query->row_array();
    } //end of gett cinema
}
