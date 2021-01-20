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
        'price'=>$this->input->post('price'),
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
        'price'=>$this->input->post('price'),
        );

        return $this->db->where('show_id',$id)->update('showtime', $data);
        
    }
    public function deleteShowtime($id){

	    $this->db->where('show_id', $id);
        $this->db->delete('showtime');
        return true;
    
     
 }
 public function search_customer(){
    $data= array( 
        'Search'=>$this->input->post('Search'));

        $this->db->select('*');
        $this->db->from('customer');
        $this->db->like('cust_id', $data['Search'])
        ->or_like('first_name', $data['Search'])
        ->or_like('last_name',  $data['Search'])
        ->or_like('DBO',  $data['Search'])
        ->or_like('phone_no',  $data['Search'])
        ->or_like('Email',  $data['Search']);
        $this->db->order_by('cust_id', 'ASC');
        $query = $this->db->get();
            
      return $query->result_array();
}
public function get_customer(){
    $this->db->select('*');
    $this->db->from('customer');
    
    $query = $this->db->get();
    
    return $query->result_array();
}
public function getCustomerRecord($id){
    $this->db->select('*');
    $this->db->from('customer');
    
    $this->db->where('cust_id', $id);
    $query = $this->db->get();

       
        return $query->result_array();
}
public function add_customer()
{
    $data= array(
        'first_name'=>$this->input->post('fname'), 
        'last_name'=>$this->input->post('lname'),             
        'email'=>$this->input->post('email'),
        'phone_no'=>$this->input->post('phone'),
        'DBO'=>$this->input->post('date_of_birth'),
                   
  );
  
  $data['password'] = sha1($this->input->post('password'));


    return $this->db->insert('customer', $data);
}
public function update_customer($id)
{

    $data= array(
        'first_name'=>$this->input->post('fname'), 
        'last_name'=>$this->input->post('lname'),             
        'email'=>$this->input->post('email'),
        'phone_no'=>$this->input->post('phone'),
        'DBO'=>$this->input->post('date_of_birth'),
                   
  );
  
  $data['password'] = sha1($this->input->post('new_password'));

    return $this->db->where('cust_id',$id)->update('customer', $data);
    
}
public function deleteCustomer($id){

    $this->db->where('cust_id', $id);
    $this->db->delete('customer');
    return true;

 
}

public function check_Password($password)
    {
        $query = $this->db->get_where('customer', array('password' => $password));

        if(empty($query->row_array()))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function check_email($email)
    {
        $query = $this->db->get_where('customer', array('email' => $email));

        if(empty($query->row_array()))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function check_phone($phone)
    {
        $query = $this->db->get_where('customer', array('phone_no' => $phone));

        if(empty($query->row_array()))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function get_cinema(){

        $this->db->select('*');
        $this->db->from('cinema');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    public function countMovie(){

        $this->db->select('*');
        $this->db->from('showtime');
        $this->db->where('show_date', date('y-m-d'));
        $query = $this->db->get();

        return $query->num_rows();
    }
    public function countCustomer(){

        $this->db->select('*');
        $this->db->from('customer');
        $this->db->like('joined_date', date('y-m-d'));
        //$this->db->where('joined_date', date('y-m-d'));
        $query = $this->db->get();

        return $query->num_rows();
    }
    public function nextMovies(){

        $this->db->limit(5);
        $this->db->select('*');
        $this->db->from('showtime');
        $this->db->join('movie','showtime.mov_id=movie.movie_id');
        $this->db->join('cinema','showtime.cinema_id=cinema.cinema_id');
        $this->db->where('show_date', date('y-m-d'));

        $query = $this->db->get();

        return $query->result_array();
    }
    public function newCustomer(){

        $this->db->limit(5);
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->like('joined_date', date('y-m-d'));

        $query = $this->db->get();

        return $query->result_array();
    }
    public function addSeat(){
        
        $data= array(
            'col'=>$this->input->post('col'), 
            'row'=>$this->input->post('row'),                                     
      );
      $data2= array( 
        'cinema'=>$this->input->post('cinema'));
      return $this->db->where('cinema_id',$data2['cinema'])->update('cinema', $data);
       
    }
    
		
    
}

