
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
    public function get_movie($id = false, $limit = false, $offset = false)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
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
    //Get gener Function
    public function get_gener($id = false)
    {
        if ($id === false) {
            $query =  $this->db->get('geners');
            return $query->result_array();
        }
        $query = $this->db->get_where('geners', array('gener_id' => $id));
        return $query->row_array();
    } //end of gett gener


    //Get Ratting function

    public function get_rating($id = false)
    {
        if ($id === false) {
            $query =  $this->db->get('ratings');
            return $query->result_array();
        }
        $query = $this->db->get_where('ratings', array('rating_id' => $id));
        return $query->row_array();
    } //end og get ratting
    //get showtime by movie id function
    public function get_showtime_bymovieid($id = false)
    {
        if ($id === false) {
            $this->db->select('*');
            $this->db->from('showtime');
            $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
            $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
            $query = $this->db->get();
            return $query->result_array();
        }
        $this->db->select('*');
        $this->db->from('showtime');
        $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
        $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
        $this->db->where('mov_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    } //end of get showtime by movie id

    //get showtime  function
    public function get_showtime($id = false)
    {
        if ($id === false) {
            $this->db->select('*');
            $this->db->from('showtime');
            $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
            $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
            $query = $this->db->get();
            return $query->result_array();
        }
        $this->db->select('*');
        $this->db->from('showtime');
        $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
        $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
        $this->db->where('show_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    } //end of get showtime 
}
