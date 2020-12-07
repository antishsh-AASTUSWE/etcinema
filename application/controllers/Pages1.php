<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('dashbord_model');
    }

	public function view($page = 'dashboard')
{
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
}

/* public function showtime()
{
        if ( ! file_exists(APPPATH.'views/pages/showtime.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
		if(isset($_POST['Search'])){

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
        $data['showtime'] = $query->result();


        $query = $this->db->get("movie");  
        $data['movies'] = $query->result();

        $query = $this->db->get("cinema");  
        $data['cinema'] = $query->result();

        
            
		$this->load->view('templates/header');
        $this->load->view('pages/showtime.php',$data);
        $this->load->view('templates/footer');
    
    
           }
           else{
        $query = $this->db->get("movie");  
        $data['movies'] = $query->result();

        $query = $this->db->get("cinema");  
        $data['cinema'] = $query->result();


		$this->db->select('*');
		$this->db->from('showtime');
		$this->db->join('movie', 'showtime.mov_id=movie.movie_id');
		$this->db->join('cinema', 'showtime.cinema_id=cinema.cinema_id');
		$this->db->order_by('show_id', 'ASC');
		$query = $this->db->get();

        
        $data['showtime'] = $query->result();
        

        $this->load->view('templates/header');
        $this->load->view('pages/showtime.php',$data);
        $this->load->view('templates/footer');
}
}
public function add_showtime(){
	$this->form_validation->set_rules('movie', 'movie', 'required');
	$this->form_validation->set_rules('cinema', 'cinema', 'required');
	$this->form_validation->set_rules('date', 'date','required');
	$this->form_validation->set_rules('time', 'time','required');
	$this->form_validation->set_rules('price', 'price','required');

	if($this->form_validation->run() === FALSE)
	{
		$this->showtime();
	}else{
		
		$this->dashbord_model->add_showtime();
		$this->showtime();
	}
}

public function delete_showtime($test){
        
	$str = $test;


	$this->db->delete('showtime', array('show_id' => $str)); 
	
	$this->showtime();
}
public function edit_showtime($test){
        
	$str = $test;

		$this->db->select('*');
		$this->db->from('showtime');
		$this->db->join('movie','showtime.mov_id=movie.movie_id');
		$this->db->join('cinema','showtime.cinema_id=cinema.cinema_id');
		$this->db->where('show_id', $str);
		$query = $this->db->get();
	$data['records'] = $query->result_array();
	
	$query = $this->db->get("movie");  
	$data['movies'] = $query->result();

	$query = $this->db->get("cinema");  
	$data['cinema'] = $query->result();

		$this->db->select('*');
		$this->db->from('showtime');
		$this->db->join('movie', 'showtime.mov_id=movie.movie_id');
		$this->db->join('cinema', 'showtime.cinema_id=cinema.cinema_id');
		$this->db->order_by('show_id', 'ASC');
		$query = $this->db->get();
   		$data['showtime'] = $query->result();

		$this->load->view('templates/header');
        $this->load->view('pages/showtime.php',$data);
        $this->load->view('templates/footer');
}

//Add movie function

public function add_movies(){
	if ( ! file_exists(APPPATH.'views/pages/movies.php'))
	{
			// Whoops, we don't have a page for that!
			show_404();
	}
	if(isset($_POST['Search'])){

		$data= array(
			'Search'=>$this->input->post('Search'));

	$this->db->select('*');
	$this->db->from('movie');
	$this->db->join('geners', 'geners.gener_id=movie.mov_gener');
	$this->db->join('ratings', 'ratings.id=movie.mov_ratting');
	$this->db->like('movie_id', $data['Search'])
	->or_like('mov_name', $data['Search'])
	->or_like('mov_gener',  $data['Search'])
	->or_like('mov_rating',  $data['Search'])
	->or_like('mov_starring',  $data['Search'])
	->or_like('mov_language',  $data['Search']);
	$this->db->order_by('movie_id', 'ASC');
	$query = $this->db->get();
	$data['movie'] = $query->result();

		
	$this->load->view('templates/header');
	$this->load->view('pages/movies.php',$data);
	$this->load->view('templates/footer');


	   }
	   else{

	$this->db->select('*');
	$this->db->from('movie');
	$this->db->join('geners', 'geners.gener_id=movie.mov_gener');
	$this->db->join('ratings', 'ratings.id=movie.mov_ratting');
	$this->db->order_by('movie_id', 'ASC');
	$query = $this->db->get();

	
	$data['movie'] = $query->result();
	

	$this->load->view('templates/header');
	$this->load->view('pages/movies.php',$data);
	$this->load->view('templates/footer');
	   
}
}

public function add_movie(){

	$this->form_validation->set_rules('name', 'Name', 'required|callback_check_movie_exists');
	$this->form_validation->set_rules('poster', 'poster', 'required');
	$this->form_validation->set_rules('rating', 'rating', 'required');
	$this->form_validation->set_rules('trailor', 'trailor', 'required');
	$this->form_validation->set_rules('gener', 'gener', 'required');
	$this->form_validation->set_rules('plot', 'plot', 'required');
	$this->form_validation->set_rules('running_time', 'running_time', 'required');
	$this->form_validation->set_rules('realse_date', 'realse_date', 'required');
	$this->form_validation->set_rules('language', 'language', 'required');
	$this->form_validation->set_rules('staring', 'staring', 'required');
	$this->form_validation->set_rules('subtitle', 'subtitle', 'required');
	$this->form_validation->set_rules('id', 'id');
   
	
	if($this->form_validation->run() === FALSE)
	{
		$query = $this->db->get("geners");  
    $data['geners'] = $query->result();
    $query = $this->db->get("ratings");  
	$data['ratings'] = $query->result();
	
		$this->load->view('templates/header');
		$this->load->view('Pages/movies',$data);
		$this->load->view('templates/footer');
		
	}else{
		
		$this->dashbord_model->add_movie();
		$this->movies();
	}

}
public function check_movie_exists($name){
	$this->form_validation->set_message('check_movie_exists', 'The movie you are tryng to add is alredy inserted');

	if($this->dashbord_model->check_movie_exists($name))
	{
		return true;
		
	}else{
		return false;
	}
}

public function cinemas(){

	if ( ! file_exists(APPPATH.'views/pages/cinema.php'))
	{
			// Whoops, we don't have a page for that!
			show_404();
	}
	if(isset($_POST['Search'])){

		$data= array(
			'Search'=>$this->input->post('Search'));

 $query = $this->db->like('cinema_id', $data['Search'])
		->or_like('cinema_name', $data['Search'])
		  ->get('cinema');

		  $data['cinema'] = $query->result();
	
		  $this->load->view('templates/header');
		  $this->load->view('Pages/cinema',$data);
		  $this->load->view('templates/footer');


   }
   else{
	$query = $this->db->get("cinema");  
	$data['cinema'] = $query->result();
	
	$this->load->view('templates/header');
	$this->load->view('Pages/cinema',$data);
	$this->load->view('templates/footer');

   }
}
public function add_cinema(){

	$this->form_validation->set_rules('cinema_name', 'cinema', 'required|callback_check_cinema_exists');
	$this->form_validation->set_rules('id', 'id');
   
	if($this->form_validation->run() === FALSE)
	{
		$query = $this->db->get("cinema");  
	$data['cinema'] = $query->result();
	
	$this->load->view('templates/header');
	$this->load->view('Pages/cinema',$data);
	$this->load->view('templates/footer');
	}else{
		
		$this->dashbord_model->add_cinema();
		$this->cinemas();
	}

}
public function check_cinema_exists($cinema){
	$this->form_validation->set_message('check_cinema_exists', 'The cinema you are tryng to add is alredy inserted');

	if($this->dashbord_model->check_cinema_exists($cinema))
	{
		return true;
		
	}else{
		return false;
	}
}
public function edit_cinema($test){
	
	$str = $test;

	$query = $this->db->get_where('cinema',array('cinema_id' => $str));
	$data['records'] = $query->result_array();
	
	$query = $this->db->get("cinema");  
	$data['cinema'] = $query->result();

	$this->load->view('templates/header');
	$this->load->view('Pages/cinema',$data);
	$this->load->view('templates/footer');
}

public function delete_cinema($test){
	
	$str = $test;


	$this->db->delete('cinema', array('cinema_id' => $str)); 
	
	$this->cinemas();
}
public function ratings(){

	if ( ! file_exists(APPPATH.'views/pages/rating.php'))
	{
			// Whoops, we don't have a page for that!
			show_404();
	}
	if(isset($_POST['Search'])){

		$data= array(
			'Search'=>$this->input->post('Search'));

			$query = $this->db->like('id', $data['Search'])
            ->or_like('rating', $data['Search'])
            ->or_like('description',  $data['Search'])
              ->get('ratings');

		  $data['ratings'] = $query->result();
	
		  $this->load->view('templates/header');
		  $this->load->view('Pages/rating',$data);
		  $this->load->view('templates/footer');


   }
   else{
	$query = $this->db->get("ratings");  
	$data['ratings'] = $query->result();
	
	$this->load->view('templates/header');
	$this->load->view('Pages/rating',$data);
	$this->load->view('templates/footer');

   }
}
public function add_rating(){

	$this->form_validation->set_rules('rating', 'rating', 'required|callback_check_rating_exists');
	$this->form_validation->set_rules('description', 'description','required');
	$this->form_validation->set_rules('id', 'id');
   
	if($this->form_validation->run() === FALSE)
	{
	$query = $this->db->get("ratings");  
	$data['ratings'] = $query->result();
	
	$this->load->view('templates/header');
	$this->load->view('Pages/rating',$data);
	$this->load->view('templates/footer');
	}else{
		
		$this->dashbord_model->add_rating();
		$this->Ratings();
	}

}
public function check_rating_exists($rating){
	$this->form_validation->set_message('check_rating_exists', 'The rating you are tryng to add is alredy inserted');

	if($this->dashbord_model->check_rating_exists($rating))
	{
		return true;
		
	}else{
		return false;
	}
}
public function edit_rating($test){
	
	$str = $test;

	$query = $this->db->get_where('ratings',array('id' => $str));
	$data['records'] = $query->result_array();
	
	$query = $this->db->get("ratings");  
	$data['ratings'] = $query->result();

	$this->load->view('templates/header');
	$this->load->view('Pages/rating',$data);
	$this->load->view('templates/footer');
}

public function delete_rating($test){
	
	$str = $test;


	$this->db->delete('ratings', array('id' => $str)); 
	
	$this->Ratings();
}

public function geners(){

	if ( ! file_exists(APPPATH.'views/pages/gener.php'))
	{
			// Whoops, we don't have a page for that!
			show_404();
	}
	if(isset($_POST['Search'])){

		$data= array(
			'Search'=>$this->input->post('Search'));

			$query = $this->db->like('gener_id', $data['Search'])
            ->or_like('gener', $data['Search'])
              ->get('geners');

              

		  $data['geners'] = $query->result();
	
		  $this->load->view('templates/header');
		  $this->load->view('Pages/gener',$data);
		  $this->load->view('templates/footer');


   }
   else{
	$query = $this->db->get("geners");  
	$data['geners'] = $query->result();
	
	$this->load->view('templates/header');
	$this->load->view('Pages/gener',$data);
	$this->load->view('templates/footer');

   }
}
public function add_gener(){

	$this->form_validation->set_rules('gener', 'gener', 'required|callback_check_gener_exists');
	$this->form_validation->set_rules('id', 'id');
   
	if($this->form_validation->run() === FALSE)
	{
		$query = $this->db->get("geners");  
	$data['geners'] = $query->result();
	
	$this->load->view('templates/header');
	$this->load->view('Pages/gener',$data);
	$this->load->view('templates/footer');
	}else{
		
		$this->dashbord_model->add_gener();
		$this->geners();
	}

}
public function check_gener_exists($gener){
	$this->form_validation->set_message('check_gener_exists', 'The gener you are tryng to add is alredy inserted');

	if($this->dashbord_model->check_gener_exists($gener))
	{
		return true;
		
	}else{
		return false;
	}
}
public function edit_gener($test){
	
	$str = $test;

	$query = $this->db->get_where('geners',array('gener_id' => $str));
	$data['records'] = $query->result_array();
	
	$query = $this->db->get("geners");  
	$data['geners'] = $query->result();
	
	$this->load->view('templates/header');
	$this->load->view('Pages/gener',$data);
	$this->load->view('templates/footer');
}

public function delete_gener($test){
	
	$str = $test;


	$this->db->delete('geners', array('gener_id' => $str)); 
	
	$this->geners();
}
public function users(){

	if ( ! file_exists(APPPATH.'views/pages/user.php'))
	{
			// Whoops, we don't have a page for that!
			show_404();
	}
	if(isset($_POST['Search'])){

		$data= array(
			'Search'=>$this->input->post('Search'));

			$query = $this->db->like('user_id', $data['Search'])
                ->or_like('name', $data['Search'])
                ->or_like('email', $data['Search'])
                ->or_like('date_of_birth', $data['Search'])
                ->or_like('phone_no',  $data['Search'])
                  ->get('user');

		  $data['user'] = $query->result();
	
		  $this->load->view('templates/header');
		  $this->load->view('Pages/user',$data);
		  $this->load->view('templates/footer');


   }
   else{
	$query = $this->db->get("user");  
	$data['user'] = $query->result();
	
	$this->load->view('templates/header');
	$this->load->view('Pages/user',$data);
	$this->load->view('templates/footer');

   }
}
public function add_user(){
	$this->form_validation->set_rules('id', 'user_id', 'required');
	$this->form_validation->set_rules('name', 'name', 'required');
	$this->form_validation->set_rules('email', 'email','required');
	$this->form_validation->set_rules('phone', 'phone','required');
	$this->form_validation->set_rules('date_of_birth', 'date','required');
	$this->form_validation->set_rules('password', 'pasword','required');

	if($this->form_validation->run() === FALSE)
	{
		$query = $this->db->get("user");  
	$data['user'] = $query->result();
	
	$this->load->view('templates/header');
	$this->load->view('Pages/user',$data);
	$this->load->view('templates/footer');

	}else{
		
		$this->dashbord_model->add_user();
		$this->users();
	}
}
public function edit_user($test){
	
	$str = $test;

	$query = $this->db->get_where('user',array('user_id' => $str));
	$data['records'] = $query->result_array();
	
	$query = $this->db->get("user");  
	$data['user'] = $query->result();
	
	$this->load->view('templates/header');
	$this->load->view('Pages/user',$data);
	$this->load->view('templates/footer');
}

public function delete_user($test){
	
	$str = $test;


	$this->db->delete('user', array('user_id' => $str)); 
	
	$this->users();
} */
}

