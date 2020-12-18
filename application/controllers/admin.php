<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

	public function index() 
{
        if ( ! file_exists(APPPATH.'views/adminPages/dashboard.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('adminPages/dashboard');
        $this->load->view('templates/footer');
}
public function users(){

	if ( ! file_exists(APPPATH.'views/adminPages/user.php'))
	{
			// Whoops, we don't have a page for that!
			show_404();
	}
	if(isset($_POST['Search'])){
		$this->load->model('admin_model');
		$user = $this->admin_model->search_users();
		
		  $this->load->view('templates/header');
		  $this->load->view('adminPages/user',['user' => $user]);
		  $this->load->view('templates/footer');
		}
		
   else{
	    $this->load->model('admin_model');
		$user = $this->admin_model->get_users();
		
		  $this->load->view('templates/header');
		  $this->load->view('adminPages/user',['user' => $user]);
		  $this->load->view('templates/footer');
   }
}
public function add_user(){
				$this->load->view('templates/header');
				$this->load->view('adminPages/add_user');
				$this->load->view('templates/footer');
}
public function create_user()
	{
	$this->form_validation->set_rules('user_id', 'id');
	$this->form_validation->set_rules('name', 'User name', 'required');
	$this->form_validation->set_rules('email', 'Email','required|callback_check_email');
	$this->form_validation->set_rules('phone', 'Phone Number','required|callback_check_phone');
	$this->form_validation->set_rules('date_of_birth', 'Date of Birth','required');
	$this->form_validation->set_rules('role', 'Role','required');
	$this->form_validation->set_rules('password', 'pasword','required');
	$this->form_validation->set_rules('password2', 'confirm pasword','required|matches[password]');


	if($this->form_validation->run() === FALSE)
	
	{
	$this->add_user();

	}else{
		
			
			$this->load->model('admin_model');

			if ($this->admin_model->insertUsers()) {
				$this->session->set_flashdata('message', 'User Added Successfully');
			}
			return redirect('admin/add_user');
			 
		}
	}
	public function edit_user($user_id)
	{
		
		$records = $this->admin_model->getUserRecord($user_id);
	
		$this->load->view('templates/header');
		$this->load->view('adminPages/edit_user',['records' => $records]);
		$this->load->view('templates/footer');
	}

	public function update_user($user_id)
	{
	$this->form_validation->set_rules('user_id', 'id');
	$this->form_validation->set_rules('name', 'User name', 'required');
	$this->form_validation->set_rules('email', 'email','required');
	$this->form_validation->set_rules('phone', 'Phone Number','required');
	$this->form_validation->set_rules('date_of_birth', 'Date of Birth','required');
	$this->form_validation->set_rules('role', 'Role','required');
	$this->form_validation->set_rules('password', 'Old pasword','required|callback_check_Password');
	$this->form_validation->set_rules('new_password', 'New pasword','required');
	$this->form_validation->set_rules('password2', 'confirm pasword','required|matches[new_password]');

	if($this->form_validation->run() === FALSE)
	{
	$this->edit_user($user_id);

	}else{
		
			
			$this->load->model('admin_model');

			if ($this->admin_model->update_user($user_id)) {
				$this->session->set_flashdata('message', 'User Updated Successfully');
			}
			return redirect('admin/users');
			 
		}
	}

	public function check_Password($password)
	{
		$this->form_validation->set_message('check_Password', 'the password is incorect please try agin');

		$password= sha1($this->input->post('password'));

		if($this->admin_model->check_Password($password))
		{
			return true; 
		}else{
			return false; 
		}
	}
	public function check_email($email)
	{
		$this->form_validation->set_message('check_email', 'That email is taken. please choose a difrent one');
		

		if($this->admin_model->check_email($email))
		{
			return true;
		}else{
			return false; 
		}
	}
	
	public function check_phone($phone)
	{
		$this->form_validation->set_message('check_phone', 'please use differnt phone this is used before');

		if($this->admin_model->check_phone($phone))
		{
			return true;
		}else{
			return false; 
		}
	}
	public function deleteUser($user_id)
	{
		
		if($this->admin_model->deleteUser($user_id))
		{
			return redirect('admin/users');
		} else {
			return redirect('admin/users');
		}
	}

	public function ratings(){

		if ( ! file_exists(APPPATH.'views/adminPages/rating.php'))
		{
				// Whoops, we don't have a page for that!
				show_404();
		}
		if(isset($_POST['Search'])){
			$this->load->model('admin_model');
			$rating = $this->admin_model->search_rating();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/rating',['rating' => $rating]);
			  $this->load->view('templates/footer');
			}
			
	   else{
			$this->load->model('admin_model');
			$rating = $this->admin_model->get_rating();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/rating',['rating' => $rating]);
			  $this->load->view('templates/footer');
	   }
	}
	public function add_rating(){
					$this->load->view('templates/header');
					$this->load->view('adminPages/add_rating');
					$this->load->view('templates/footer');
	}
	public function create_rating()
		{
			$this->form_validation->set_rules('rating', 'rating', 'required|callback_check_rating');
			$this->form_validation->set_rules('description', 'description','required');
			$this->form_validation->set_rules('id', 'id');
	
		if($this->form_validation->run() === FALSE)
		
		{
		$this->add_rating();
	
		}else{
			
				
				$this->load->model('admin_model');
	
				if ($this->admin_model->insertRating()) {
					$this->session->set_flashdata('message', 'Rating Added Successfully');
				}
				return redirect('admin/add_rating');
				 
			}
		}
		public function edit_rating($rating_id)
		{
			
			$records = $this->admin_model->getRatingRecord($rating_id);
		
			$this->load->view('templates/header');
			$this->load->view('adminPages/edit_rating',['records' => $records]);
			$this->load->view('templates/footer');
		}
		public function update_rating($rating_id)
		{
			$this->form_validation->set_rules('rating', 'rating', 'required');
			$this->form_validation->set_rules('description', 'description','required');
			$this->form_validation->set_rules('id', 'id');
		
	
		if($this->form_validation->run() === FALSE)
		{
		$this->edit_rating($rating_id);
	
		}else{
			
				
				$this->load->model('admin_model');
	
				if ($this->admin_model->update_rating($rating_id)) {
					$this->session->set_flashdata('message', 'Rating Updated Successfully');
				}
				return redirect('admin/ratings');
				 
			}
		}
	
		public function check_rating($rating)
		{
			$this->form_validation->set_message('check_rating', 'This rating is alrady in the inserted please try agin');
	
			if($this->admin_model->check_rating($rating))
			{
				return true; 
			}else{
				return false; 
			}
		}
		public function deleteRating($rating_id)
	{
		
		if($this->admin_model->deleteRating($rating_id))
		{
			return redirect('admin/ratings');
		} else {
			return redirect('admin/ratings');
		}
	}
	
	public function geners(){

		if ( ! file_exists(APPPATH.'views/adminPages/gener.php'))
		{
				// Whoops, we don't have a page for that!
				show_404();
		}
		if(isset($_POST['Search'])){
			$this->load->model('admin_model');
			$gener = $this->admin_model->search_gener();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/gener',['gener' => $gener]);
			  $this->load->view('templates/footer');
			}
			
	   else{
			$this->load->model('admin_model');
			$gener = $this->admin_model->get_gener();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/gener',['gener' => $gener]);
			  $this->load->view('templates/footer');
	   }
	}
	public function add_gener(){
					$this->load->view('templates/header');
					$this->load->view('adminPages/add_gener');
					$this->load->view('templates/footer');
	}
	public function create_gener()
		{
		$this->form_validation->set_rules('gener_id', 'id');
		$this->form_validation->set_rules('gener', 'gener', 'required|callback_check_gener');
	
		if($this->form_validation->run() === FALSE)
		
		{
		$this->add_gener();
	
		}else{
			
				
				$this->load->model('admin_model');
	
				if ($this->admin_model->insertGener()) {
					$this->session->set_flashdata('message', 'Gener Added Successfully');
				}
				return redirect('admin/add_gener');
				 
			}
		}
		public function edit_gener($gener_id)
		{
			
			$records = $this->admin_model->getGenerRecord($gener_id);
		
			$this->load->view('templates/header');
			$this->load->view('adminPages/edit_gener',['records' => $records]);
			$this->load->view('templates/footer');
		}
		public function update_gener($gener_id)
		{
			$this->form_validation->set_rules('gener_id', 'id');
			$this->form_validation->set_rules('gener', 'gener', 'required');
		
	
		if($this->form_validation->run() === FALSE)
		{
		$this->edit_gener($gener_id);
	
		}else{
			
				
				$this->load->model('admin_model');
	
				if ($this->admin_model->update_gener($gener_id)) {
					$this->session->set_flashdata('message', 'Gener Updated Successfully');
				}
				return redirect('admin/geners');
				 
			}
		}
	
		public function check_gener($gener)
		{
			$this->form_validation->set_message('check_gener', 'This gener is alrady in the inserted please try agin');
	
			if($this->admin_model->check_gener($gener))
			{
				return true; 
			}else{
				return false; 
			}
		}
		public function deleteGener($gener_id)
	{
		
		if($this->admin_model->deleteGener($gener_id))
		{
			return redirect('admin/geners');
		} else {
			return redirect('admin/geners');
		}
	}
	public function cinemas(){

		if ( ! file_exists(APPPATH.'views/adminPages/cinema.php'))
		{
				// Whoops, we don't have a page for that!
				show_404();
		}
		if(isset($_POST['Search'])){
			$this->load->model('admin_model');
			$cinema = $this->admin_model->search_cinema();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/cinema',['cinema' => $cinema]);
			  $this->load->view('templates/footer');
			}
			
	   else{
			$this->load->model('admin_model');
			$cinema = $this->admin_model->get_cinema();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/cinema',['cinema' => $cinema]);
			  $this->load->view('templates/footer');
	   }
	}
	public function add_cinema(){
					$this->load->view('templates/header');
					$this->load->view('adminPages/add_cinema');
					$this->load->view('templates/footer');
	}
	public function create_cinema()
		{
			$this->form_validation->set_rules('cinema_name', 'cinema', 'required|callback_check_cinema');
			$this->form_validation->set_rules('id', 'id');
	
		if($this->form_validation->run() === FALSE)
		
		{
		$this->add_cinema();
	
		}else{
			
				
				$this->load->model('admin_model');
	
				if ($this->admin_model->insertCinema()) {
					$this->session->set_flashdata('message', 'Cinema Added Successfully');
				}
				return redirect('admin/add_cinema');
				 
			}
		}
		public function edit_cinema($cinema_id)
		{
			
			$records = $this->admin_model->getCinemaRecord($cinema_id);
		
			$this->load->view('templates/header');
			$this->load->view('adminPages/edit_cinema',['records' => $records]);
			$this->load->view('templates/footer');
		}
		public function update_cinema($cinema_id)
		{
			$this->form_validation->set_rules('cinema_name', 'cinema', 'required|callback_check_cinema');
			$this->form_validation->set_rules('id', 'id');
	
		if($this->form_validation->run() === FALSE)
		{
		$this->edit_cinema($cinema_id);
	
		}else{
			
				
				$this->load->model('admin_model');
	
				if ($this->admin_model->update_cinema($cinema_id)) {
					$this->session->set_flashdata('message', 'Cinema Updated Successfully');
				}
				return redirect('admin/cinemas');
				 
			}
		}
	
		public function check_cinema($cinema)
		{
			$this->form_validation->set_message('check_cinema', 'This cinema is alrady in the inserted please try agin');
	
			if($this->admin_model->check_cinema($cinema))
			{
				return true; 
			}else{
				return false; 
			}
		}
		public function deleteCinema($cinema_id)
	{
		
		if($this->admin_model->deleteCinema($cinema_id))
		{
			return redirect('admin/cinemas');
		} else {
			return redirect('admin/cinemas');
		}
	}
	public function showtime(){

		if ( ! file_exists(APPPATH.'views/adminPages/showtime.php'))
		{
				// Whoops, we don't have a page for that!
				show_404();
		}
		if(isset($_POST['Search'])){
			$this->load->model('admin_model');
			$showtime = $this->admin_model->search_showtime();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/showtime',['showtime' => $showtime]);
			  $this->load->view('templates/footer');
			}
			
	   else{
			$this->load->model('admin_model');
			$showtime = $this->admin_model->get_showtime();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/showtime',['showtime' => $showtime]);
			  $this->load->view('templates/footer');
	   }
	}
	public function add_showtime(){

		$data['cinema'] =$this->admin_model->get_cinema();
		$data['movies'] =$this->admin_model->get_movie();
			
					$this->load->view('templates/header');
					$this->load->view('adminPages/add_showtime',$data);
					$this->load->view('templates/footer');
					
	}
	public function create_showtime()
		{
			$this->form_validation->set_rules('movie', 'movie', 'required');
			$this->form_validation->set_rules('cinema', 'cinema', 'required');
			$this->form_validation->set_rules('date', 'date','required');
			$this->form_validation->set_rules('time', 'time','required');
			$this->form_validation->set_rules('price', 'price','required');
			
		if($this->form_validation->run() === FALSE)
		
		{
		$this->add_showtime();
	
		}else{
			
				$this->load->model('admin_model');
	
				if ($this->admin_model->insertShowtime()) {
					$this->session->set_flashdata('message', 'Showtime Added Successfully');
				}
				return redirect('admin/add_showtime');
				 
			}
		}
		public function edit_showtime($show_id)
		{
			
			$data['records'] = $this->admin_model->getShowtimeRecord($show_id);
			$data['cinema'] =$this->admin_model->get_cinema();
		$data['movies'] =$this->admin_model->get_movie();
		
			$this->load->view('templates/header');
			$this->load->view('adminPages/edit_showtime',$data);
			$this->load->view('templates/footer');
		}
		public function update_showtime($show_id)
		{
	$this->form_validation->set_rules('movie', 'movie', 'required');
	$this->form_validation->set_rules('cinema', 'cinema', 'required');
	$this->form_validation->set_rules('date', 'date','required');
	$this->form_validation->set_rules('time', 'time','required');
    $this->form_validation->set_rules('price', 'price','required');
		if($this->form_validation->run() === FALSE)
		{
		$this->edit_showtime($show_id);
	
		}else{
			
				
				$this->load->model('admin_model');
	
				if ($this->admin_model->update_showtime($show_id)) {
					$this->session->set_flashdata('message', 'Showtime Updated Successfully');
				}
				return redirect('admin/showtime');
				 
			}
		}
	

		public function deleteShowtime($show_id)
	{
		
		if($this->admin_model->deleteShowtime($show_id))
		{
			return redirect('admin/showtime');
		} else {
			return redirect('admin/showtime');
		}
	}
	public function movies(){

		if ( ! file_exists(APPPATH.'views/adminPages/movies.php'))
		{
				// Whoops, we don't have a page for that!
				show_404();
		}
		if(isset($_POST['Search'])){
			$this->load->model('admin_model');
			$movie = $this->admin_model->search_movie();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/movies',['movie' => $movie]);
			  $this->load->view('templates/footer');
			}
			
	   else{
			$this->load->model('admin_model');
			$movie = $this->admin_model->get_movie();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/movies',['movie' => $movie]);
			  $this->load->view('templates/footer');
	   }
	}
	public function add_movie(){
		
		$data['gener'] =$this->admin_model->get_gener();
		$data['rating'] =$this->admin_model->get_rating();

					$this->load->view('templates/header');
					$this->load->view('adminPages/add_movie',$data);
					$this->load->view('templates/footer');
	}
	public function create_movie()
		{
			$this->form_validation->set_rules('name', 'Name', 'required|callback_check_movie');
			$this->form_validation->set_rules('poster', 'poster', 'required');
			$this->form_validation->set_rules('rating', 'rating', 'required');
			$this->form_validation->set_rules('trailor', 'trailor', 'required');
			$this->form_validation->set_rules('gener', 'gener', 'required');
			$this->form_validation->set_rules('plot', 'plot', 'required');
			$this->form_validation->set_rules('running_time', 'running time', 'required');
			$this->form_validation->set_rules('realse_date', 'realse date', 'required');
			$this->form_validation->set_rules('language', 'language', 'required');
			$this->form_validation->set_rules('staring', 'staring', 'required');
			$this->form_validation->set_rules('subtitle', 'subtitle', 'required');
			$this->form_validation->set_rules('id', 'id');
	
		if($this->form_validation->run() === FALSE)
		
		{
		$this->add_movie();
	
		}else{
			
				
				$this->load->model('admin_model');
	
				if ($this->admin_model->insertMovie()) {
					$this->session->set_flashdata('message', 'Movie Added Successfully');
				}
				return redirect('admin/add_movie');
				 
			}
		}
		public function edit_movie($movie_id)
		{
			
			$records = $this->admin_model->getMovieRecord($movie_id);
		
			$this->load->view('templates/header');
			$this->load->view('adminPages/edit_movie',['records' => $records]);
			$this->load->view('templates/footer');
		}
		public function update_movie($movie_id)
		{
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('poster', 'poster', 'required');
			$this->form_validation->set_rules('rating', 'rating', 'required');
			$this->form_validation->set_rules('trailor', 'trailor', 'required');
			$this->form_validation->set_rules('gener', 'gener', 'required');
			$this->form_validation->set_rules('plot', 'plot', 'required');
			$this->form_validation->set_rules('running_time', 'running time', 'required');
			$this->form_validation->set_rules('realse_date', 'realse date', 'required');
			$this->form_validation->set_rules('language', 'language', 'required');
			$this->form_validation->set_rules('staring', 'staring', 'required');
			$this->form_validation->set_rules('subtitle', 'subtitle', 'required');
			$this->form_validation->set_rules('id', 'id');
		
	
		if($this->form_validation->run() === FALSE)
		{
		$this->edit_movie($movie_id);
	
		}else{
			
				
				$this->load->model('admin_model');
	
				if ($this->admin_model->update_movie($movie_id)) {
					$this->session->set_flashdata('message', 'Movie Updated Successfully');
				}
				return redirect('admin/movies');
				 
			}
		}
	
		public function check_movie($movie)
		{
			$this->form_validation->set_message('check_movie', 'This movie is alrady in the inserted please try agin');
	
			if($this->admin_model->check_movie($movie))
			{
				return true; 
			}else{
				return false; 
			}
		}
		public function deleteMovie($movie_id)
	{
		
		if($this->admin_model->deleteMovie($movie_id))
		{
			return redirect('admin/movies');
		} else {
			return redirect('admin/movies');
		}
	}
	public function bookings(){

		if ( ! file_exists(APPPATH.'views/adminPages/booking.php'))
		{
				// Whoops, we don't have a page for that!
				show_404();
		}
		if(isset($_POST['Search'])){
			$this->load->model('admin_model');
			$booking = $this->admin_model->search_booking();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/booking',['booking' => $booking]);
			  $this->load->view('templates/footer');
			}
			
	   else{
			$this->load->model('admin_model');
			$booking = $this->admin_model->get_booking();
			
			  $this->load->view('templates/header');
			  $this->load->view('adminPages/booking',['booking' => $booking]);
			  $this->load->view('templates/footer');
	   }
	}
	public function add_booking(){

		$data['showtime'] =$this->admin_model->get_showtime();
		$data['user'] =$this->admin_model->get_users();
		$data['seat'] =$this->admin_model->get_seat();
			
					$this->load->view('templates/header');
					$this->load->view('adminPages/add_booking',$data);
					$this->load->view('templates/footer');
					
	}
	public function create_booking()
		{
			$this->form_validation->set_rules('showtime', 'showtime', 'required');
			$this->form_validation->set_rules('user', 'user', 'required');
			$this->form_validation->set_rules('seat', 'seat','required');
			$this->form_validation->set_rules('ticket', 'Tickets','required');
			$this->form_validation->set_rules('status', 'Status','required');
			
		if($this->form_validation->run() === FALSE)
		
		{
		$this->add_booking();
	
		}else{
			
				$this->load->model('admin_model');
	
				if ($this->admin_model->insertBooking()) {
					$this->session->set_flashdata('message', 'booking Added Successfully');
				}
				return redirect('admin/add_booking');
				 
			}
		}
		public function edit_booking($booking_id)
		{
			
			$records = $this->admin_model->getBookingRecord($booking_id);
		
			$this->load->view('templates/header');
			$this->load->view('adminPages/edit_booking',['records' => $records]);
			$this->load->view('templates/footer');
		}
		public function update_booking($booking_id)
		{
			$this->form_validation->set_rules('movie', 'movie', 'required');
			$this->form_validation->set_rules('cinema', 'cinema', 'required');
			$this->form_validation->set_rules('date', 'date','required');
			$this->form_validation->set_rules('time', 'time','required');
			$this->form_validation->set_rules('price', 'price','required');

		if($this->form_validation->run() === FALSE)
		{
		$this->edit_booking($booking_id);
	
		}else{
			
				
				$this->load->model('admin_model');
	
				if ($this->admin_model->update_booking($booking_id)) {
					$this->session->set_flashdata('message', 'booking Updated Successfully');
				}
				return redirect('admin/booking');
				 
			}
		}
	

		public function deleteBooking($booking_id)
	{
		
		if($this->admin_model->deleteBooking($booking_id))
		{
			return redirect('admin/bookings');
		} else {
			return redirect('admin/bookings');
		}
	}
}
