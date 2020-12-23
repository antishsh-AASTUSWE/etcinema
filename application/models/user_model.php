<?php 
class user_model extends CI_Model{

	public function __construct(){
		$this->load->database();
    }
public function getMovie(){
    $this->db->select('*');
    $this->db->from('movie');
    $this->db->join('ratings','ratings.rating_id=movie.mov_ratting');
    $this->db->join('geners','geners.gener_id=movie.mov_gener');
    $query = $this->db->get();

       
		return $data= $query->result_array();
}
public function getNav(){
  $this->db->select('*');
  $this->db->from('navigation');
  $query = $this->db->get();

     
  return $data= $query->result_array();
}
public function getCinema(){
  $this->db->select('*');
  $this->db->from('cinema');
  $query = $this->db->get();

     
  return $data= $query->result_array();
}
public function showFilter(){
  $data=array(
    'movie_id'=>$this->input->post('movie'),
            'cinema_id'=>$this->input->post('cinema')
);
  $this->db->select('*');
  $this->db->from('showtime');
  $this->db->join('movie','showtime.mov_id=movie.movie_id');
  $this->db->join('cinema','showtime.cinema_id=cinema.cinema_id');
  $this->db->where('movie_id', $data['movie_id']&&'cinema_id',$data['movie_id']);
  $query = $this->db->get();

     
  return $data = $query->result_array();
}
}
?>