<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff_model extends CI_Model
{

    public function search_movie(){
        $data= array(
			'Search'=>$this->input->post('Search'));

			$query = $this->db->like('movie_id', $data['Search'])
            ->or_like('mov_name', $data['Search'])
            ->or_like('mov_gener',  $data['Search'])
            ->or_like('mov_realse_date',  $data['Search'])
            ->or_like('mov_language',  $data['Search'])
            ->or_like('mov_starring',  $data['Search'])
            ->or_like('mov_subtitle',  $data['Search'])
            ->or_like('mov_ratting',  $data['Search'])
            ->join('geners','movie.mov_gener=geners.gener_id')
            ->join('ratings','movie.mov_ratting=ratings.rating_id')
               ->get('movie');
                
		  return $query->result_array();
    }
    public function get_movie(){

        $this->db->select('*');
        $this->db->from('movie');
        $this->db->join('geners','movie.mov_gener=geners.gener_id');
        $this->db->join('ratings','movie.mov_ratting=ratings.rating_id');
        $query = $this->db->get();
        
        return $query->result_array();
    }

    public function add_movie($post_image)
    {

        $data = array(
            'mov_name' => $this->input->post('title'),
            'mov_poster' => $post_image,
            'mov_ratting' => $this->input->post('rating_id'),
            'mov_trailor' => $this->input->post('trailor'),
            'mov_gener' => $this->input->post('gener_id'),
            'mov_plot' => $this->input->post('plot'),
            'mov_running_time' => $this->input->post('runningtime'),
            'mov_realse_date' => $this->input->post('realsedate'),
            'mov_language' => $this->input->post('language'),

            'mov_starring' => $this->input->post('staring'),
            'mov_subtitle' => $this->input->post('subtitle')
        );


        return $this->db->insert('movie', $data);
    }
    public function getMovieRecord($id){
        $query = $this->db->get_where('movie',array('movie_id' => $id));
		return $query->result_array();
}
public function deleteMovie($id){

	    $this->db->where('movie_id', $id);
        $this->db->delete('movie');
        return true;
    
     
 }
    public function check_movie_exists($movie)
    {
        $query = $this->db->get_where('movie', array('mov_name' => $movie));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    } //end of check cinema
public function get_gener(){

        $this->db->select('*');
        $this->db->from('geners');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    public function get_rating(){

        $this->db->select('*');
        $this->db->from('ratings');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    public function update_movie($post_image,$id)
    {

        $data = array(
            'mov_name' => $this->input->post('title'),
            'mov_poster' => $post_image,
            'mov_ratting' => $this->input->post('rating_id'),
            'mov_trailor' => $this->input->post('trailor'),
            'mov_gener' => $this->input->post('gener_id'),
            'mov_plot' => $this->input->post('plot'),
            'mov_running_time' => $this->input->post('runningtime'),
            'mov_realse_date' => $this->input->post('realsedate'),
            'mov_language' => $this->input->post('language'),

            'mov_starring' => $this->input->post('staring'),
            'mov_subtitle' => $this->input->post('subtitle')
        );

        return $this->db->where('movie_id',$id)->update('movie', $data);
        
    }
    public function search_showtime(){
        $data= array(
			'Search'=>$this->input->post('Search'));

            $this->db->select('*');
            $this->db->from('showtime');
            $this->db->join('movie', 'showtime.mov_id=movie.movie_id');
            $this->db->join('cinema', 'showtime.cinema_id=cinema.cinema_id');
            $this->db->like('show_id', $data['Search'])
            ->or_like('mov_name', $data['Search'])
            ->or_like('cinema_name',  $data['Search'])
            ->or_like('show_date',  $data['Search'])
            ->or_like('show_time',  $data['Search']);
            $this->db->order_by('show_id', 'ASC');
            $query = $this->db->get();
                
		  return $query->result_array();
    }
    public function get_showtime(){
        $this->db->select('*');
        $this->db->from('showtime');
        $this->db->join('movie','movie.movie_id=showtime.mov_id');
        $this->db->join('cinema','cinema.cinema_id=showtime.cinema_id');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    public function getShowRecord($id){
        $this->db->select('*');
        $this->db->from('showtime');
        $this->db->join('movie','showtime.mov_id=movie.movie_id');
        $this->db->join('cinema','showtime.cinema_id=cinema.cinema_id');
        $this->db->where('show_id', $id);
        $query = $this->db->get();
    
           
            return $query->result_array();
    }
    public function add_showtime()
    {

        $data = array(
        'show_date' => $this->input->post('date'),
        'show_time' => $this->input->post('time'),
        'mov_id'=>$this->input->post('movie'),
        'cinema_id'=>$this->input->post('cinema'),
        );


        return $this->db->insert('showtime', $data);
    }
    public function update_showtime($id)
    {

        $data = array(
        'show_date' => $this->input->post('date'),
        'show_time' => $this->input->post('time'),
        'mov_id'=>$this->input->post('movie'),
        'cinema_id'=>$this->input->post('cinema'),
        );

        return $this->db->where('show_id',$id)->update('showtime', $data);
        
    }
    public function deleteShowtime($id){

	    $this->db->where('show_id', $id);
        $this->db->delete('showtime');
        return true;
    
     
 }
    
    public function get_cinema(){

        $this->db->select('*');
        $this->db->from('cinema');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
}
