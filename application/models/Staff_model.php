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
}
