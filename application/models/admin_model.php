<?php 
class admin_model extends CI_Model{

	public function __construct(){
		$this->load->database();
    }
    public function search_users(){
        $data= array(
			'Search'=>$this->input->post('Search'));

			$query = $this->db->like('user_id', $data['Search'])
                ->or_like('name', $data['Search'])
                ->or_like('email', $data['Search'])
                ->or_like('date_of_birth', $data['Search'])
                ->or_like('phone_no',  $data['Search'])
                  ->get('user');

		  return $data['user'] = $query->result();
    }
    public function get_users(){
        $query = $this->db->get("user");  
        return $data['user'] = $query->result();
    }

    public function insertUsers(){
        $data= array(
            'name'=>$this->input->post('name'),              
            'email'=>$this->input->post('email'),
            'phone_no'=>$this->input->post('phone'),
            'date_of_birth'=>$this->input->post('date_of_birth'),
            'role'=>$this->input->post('role'),            
      );
      
      $data['password'] = sha1($this->input->post('password'));

        return $this->db->insert('user', $data);
}
public function getUserRecord($user_id){
        $query = $this->db->get_where('user',array('user_id' => $user_id));
		return $data['records'] = $query->result_array();
}
public function update_user($user_id){
    $data= array(
        'name'=>$this->input->post('name'),              
        'email'=>$this->input->post('email'),
        'phone_no'=>$this->input->post('phone'),
        'date_of_birth'=>$this->input->post('date_of_birth'),
        'role'=>$this->input->post('role'),            
  );
  
  $data['password'] = sha1($this->input->post('password'));

  return $this->db->where('user_id', $user_id)->update('user', $data);
}

public function check_Password($password)
    {
        $query = $this->db->get_where('user', array('password' => $password));

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
        $query = $this->db->get_where('user', array('email' => $email));

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
        $query = $this->db->get_where('user', array('phone_no' => $phone));

        if(empty($query->row_array()))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function deleteUser($user_id){
	
       return $this->db->delete('user', array('user_id' => $user_id)); 
        
        
    }
    public function search_gener(){
        $data= array(
			'Search'=>$this->input->post('Search'));

			$query = $this->db->like('gener_id', $data['Search'])
            ->or_like('gener', $data['Search'])
              ->get('geners');


		  return $data['gener'] = $query->result();
    }
    public function get_gener(){
        $query = $this->db->get("geners");  
        return $data['gener'] = $query->result();
    }

    public function insertGener(){
        $data= array(
            'gener'=>$this->input->post('gener')
          );
      
     return $this->db->insert('geners', $data);
}
public function getGenerRecord($gener_id){
        $query = $this->db->get_where('geners',array('gener_id' => $gener_id));
		return $data['records'] = $query->result_array();
}
public function update_gener($gener_id){
    $data= array(
        'gener'=>$this->input->post('gener')
      );
  
  return $this->db->where('gener_id', $gener_id)->update('geners', $data);
}

public function check_gener($gener)
    {
        $query = $this->db->get_where('geners', array('gener' => $gener));

        if(empty($query->row_array()))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function deleteGener($gener_id){
	
        return $this->db->delete('geners', array('gener_id' => $gener_id)); 
         
         
     }
     
    public function search_rating(){
        $data= array(
			'Search'=>$this->input->post('Search'));

			$query = $this->db->like('rating_id', $data['Search'])
            ->or_like('rating', $data['Search'])
            ->or_like('description',  $data['Search'])
              ->get('ratings');

		  return $data['rating'] = $query->result();
    }
    public function get_rating(){
        $query = $this->db->get("ratings");  
        return $data['rating'] = $query->result();
    }

    public function insertRating(){
        $data= array(
            'rating'=>$this->input->post('rating'),
            'description'=>$this->input->post('description')
      );
      
     return $this->db->insert('ratings', $data);
}
public function getRatingRecord($rating_id){
        $query = $this->db->get_where('ratings',array('rating_id' => $rating_id));
		return $data['records'] = $query->result_array();
}
public function update_rating($rating_id){
    $data= array(
        'rating'=>$this->input->post('rating'),
        'description'=>$this->input->post('description')
  );
  
  return $this->db->where('rating_id', $rating_id)->update('ratings', $data);
}

public function check_rating($rating)
    {
        $query = $this->db->get_where('ratings', array('rating' => $rating));

        if(empty($query->row_array()))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function deleteRating($rating_id){
	
        return $this->db->delete('ratings', array('rating_id' => $rating_id)); 
         
     }
     public function search_cinema(){
        $data= array(
			'Search'=>$this->input->post('Search'));

			$query = $this->db->like('cinema_id', $data['Search'])
		->or_like('cinema_name', $data['Search'])
		  ->get('cinema');

		  return $data['cinema'] = $query->result();
    }
    public function get_cinema(){
        $query = $this->db->get("cinema");  
        return $data['cinema'] = $query->result();
    }

    public function insertCinema(){
        $data= array(
            'cinema_name'=>$this->input->post('cinema_name')
            
      );
      
     return $this->db->insert('cinema', $data);
}
public function getCinemaRecord($cinema_id){
        $query = $this->db->get_where('cinema',array('cinema_id' => $cinema_id));
		return $data['records'] = $query->result_array();
}
public function update_cinema($cinema_id){
    $data= array(
        'cinema_name'=>$this->input->post('cinema_name')
        
  );
  
  return $this->db->where('cinema_id', $cinema_id)->update('cinema', $data);
}

public function check_cinema($cinema)
    {
        $query = $this->db->get_where('cinema', array('cinema_name' => $cinema));

        if(empty($query->row_array()))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function deleteCinema($cinema_id){
	
        return $this->db->delete('cinema', array('cinema_id' => $cinema_id)); 
         
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
            ->or_like('show_time',  $data['Search'])
            ->or_like('Price',  $data['Search']);
            $this->db->order_by('show_id', 'ASC');
            $query = $this->db->get();

		  return $data['showtime'] = $query->result();
    }
    public function get_showtime(){

        $this->db->select('*');
		$this->db->from('showtime');
		$this->db->join('movie', 'showtime.mov_id=movie.movie_id');
		$this->db->join('cinema', 'showtime.cinema_id=cinema.cinema_id');
		$this->db->order_by('show_id', 'ASC');
		$query = $this->db->get();
  
        return $data['showtime'] = $query->result();
    }

    public function insertShowtime(){
        $data1=array(
            'mov_id'=>$this->input->post('movie'),
                    'cinema_id'=>$this->input->post('cinema')
        );
                   
                     $select = $this->db->select('movie_id')->where('mov_name', $data1['mov_id'])->
                     get('movie');
                        
                     foreach ($select->result() as $m_row)
                        {
                            $select2 = $this->db->select('cinema_id')->where('cinema_name', $data1['cinema_id'])->
                             get('cinema');
        
                             foreach ($select2->result() as $c_row)
                        {
                            $data = array(
                    
                                'show_date' => $this->input->post('date'),
                                'show_time' => $this->input->post('time'),
                                'Price' => $this->input->post('price'),
                                'mov_id'=>$m_row->movie_id,
                                'cinema_id'=>$c_row->cinema_id
                                 );
                                
                               
                        }
                    }
      
     return $this->db->insert('showtime', $data);
}
public function getShowtimeRecord($show_id){
    $this->db->select('*');
    $this->db->from('showtime');
    $this->db->join('movie','showtime.mov_id=movie.movie_id');
    $this->db->join('cinema','showtime.cinema_id=cinema.cinema_id');
    $this->db->where('show_id', $show_id);
    $query = $this->db->get();

       
		return $data['records'] = $query->result_array();
}
public function update_showtime($show_id){
    $data1=array(
        'mov_id'=>$this->input->post('movie'),
                'cinema_id'=>$this->input->post('cinema')
    );
               
                 $select = $this->db->select('movie_id')->where('mov_name', $data1['mov_id'])->
                 get('movie');
                    
                 foreach ($select->result() as $m_row)
                    {
                        $select2 = $this->db->select('cinema_id')->where('cinema_name', $data1['cinema_id'])->
                         get('cinema');
    
                         foreach ($select2->result() as $c_row)
                    {
                        $data = array(
                
                            'show_date' => $this->input->post('date'),
                            'show_time' => $this->input->post('time'),
                            'Price' => $this->input->post('price'),
                            'mov_id'=>$m_row->movie_id,
                            'cinema_id'=>$c_row->cinema_id
                             );
                            
                           
                    }
                }

  return $this->db->where('show_id', $show_id)->update('showtime', $data);
}
    public function deleteShowtime($show_id){
	
        return $this->db->delete('showtime', array('show_id' => $show_id)); 
         
     }
     public function search_movie(){
        $data= array(
			'Search'=>$this->input->post('Search'));

			$query = $this->db->like('rating_id', $data['Search'])
            ->or_like('rating', $data['Search'])
            ->or_like('description',  $data['Search'])
              ->get('ratings');

		  return $data['movie'] = $query->result();
    }
    public function get_movie(){
        $query = $this->db->get("movie");  
        return $data['movie'] = $query->result();
    }

    public function insertMovie(){
        $data = array(
            'mov_name' => $this->input->post('name'),
            'mov_poster' => $this->input->post('poster'),
            'mov_ratting' => $this->input->post('rating'),
            'mov_trailor' => $this->input->post('trailor'),
            'mov_gener' => $this->input->post('gener'),
            'mov_plot' => $this->input->post('plot'),
            'mov_running_time' => $this->input->post('running_time'),
            'mov_realse_date' => $this->input->post('realse_date'),
            'mov_language' => $this->input->post('language'),

            'mov_starring' => $this->input->post('staring'),
            'mov_subtitle' => $this->input->post('subtitle')         
             );
			
      
     return $this->db->insert('movie', $data);
}
public function getMovieRecord($movie_id){
        $query = $this->db->get_where('ratings',array('rating_id' => $movie_id));
		return $data['records'] = $query->result_array();
}
public function update_movie($movie_id){
    $data = array(
        'mov_name' => $this->input->post('name'),
        'mov_poster' => $this->input->post('poster'),
        'mov_ratting' => $this->input->post('rating'),
        'mov_trailor' => $this->input->post('trailor'),
        'mov_gener' => $this->input->post('gener'),
        'mov_plot' => $this->input->post('plot'),
        'mov_running_time' => $this->input->post('running_time'),
        'mov_realse_date' => $this->input->post('realse_date'),
        'mov_language' => $this->input->post('language'),

        'mov_starring' => $this->input->post('staring'),
        'mov_subtitle' => $this->input->post('subtitle')         
         );
        
  
  return $this->db->where('movie_id', $movie_id)->update('movie', $data);
}

public function check_movie($mov_name)
    {
        $query = $this->db->get_where('movie', array('mov_name' => $mov_name));

        if(empty($query->row_array()))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function deleteMovie($movie_id){
	
        return $this->db->delete('movie', array('movie_id' => $movie_id)); 
         
     }
     public function search_booking(){
        $data= array(
			'Search'=>$this->input->post('Search'));

			$query = $this->db->like('rating_id', $data['Search'])
            ->or_like('rating', $data['Search'])
            ->or_like('description',  $data['Search'])
              ->get('booking_info');

		  return $data['rating'] = $query->result();
    }
    public function get_booking(){
        $query = $this->db->get("booking_info");  
        return $data['rating'] = $query->result();
    }

    public function insertBooking(){
        $data= array(
            'ticket'=>$this->input->post('description'),
            'status'=>$this->input->post('description')
        );
      
      
      $data1=array(
        'showtime'=>$this->input->post('showtime'),
        'user'=>$this->input->post('user'),
        'ticket'=>$this->input->post('ticket')
    );
          
                 $select = $this->db->select('movie_id')->where('mov_name', $data1['mov_id'])->
                 get('movie');
                    
                 foreach ($select->result() as $m_row)
                    {
                        $select2 = $this->db->select('cinema_id')->where('cinema_name', $data1['cinema_id'])->
                         get('cinema');
    
                         foreach ($select2->result() as $c_row)
                    {
                        $data = array(
                
                            'show_date' => $this->input->post('date'),
                            'show_time' => $this->input->post('time'),
                            'Price' => $this->input->post('price'),
                            'mov_id'=>$m_row->movie_id,
                            'cinema_id'=>$c_row->cinema_id
                             );
                            
                           
                    }
                }
      
     return $this->db->insert('booking_info', $data);
}
public function getBookingRecord($booking_id){
        $query = $this->db->get_where('booking_info',array('booking_id' => $booking_id));
		return $data['records'] = $query->result_array();
}
public function update_booking($booking_id){
    $data= array(
        'rating'=>$this->input->post('rating'),
        'description'=>$this->input->post('description')
  );
  
  return $this->db->where('booking_id', $booking_id)->update('booking_info', $data);
}


    public function deleteBooking($booking){
	
        return $this->db->delete('booking_info', array('booking_id' => $booking)); 
         
     }
     public function get_seat(){
        $query = $this->db->get("seat");  
        return $data['seat'] = $query->result();
    }
}