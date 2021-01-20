<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->tempdata('logged_in') !== TRUE) {
            redirect('authenticate_login');
        }
    }

    
    public function index()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/dashboard.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $data['countMovie'] = $this->staff_model->countMovie();
        $data['countCustomer'] = $this->staff_model->countCustomer();
        $data['nextMovies'] = $this->staff_model->nextMovies();
        $data['newCustomer'] = $this->staff_model->newCustomer();
          
        $this->load->view('templates/admin_header');
        $this->load->view('staffpages/dashboard',$data);
        $this->load->view('templates/admin_footer',$data);
    }
    public function movies()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/movies.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if(isset($_POST['Search'])){
			
			$data['movie'] = $this->staff_model->search_movie();
			
            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/movies',$data);
            $this->load->view('templates/admin_footer');
			}
			
	   else{
			
			$data['movie'] = $this->staff_model->get_movie();
			
            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/movies',$data);
            $this->load->view('templates/admin_footer');
	   }
        
    }
    public function add_movie()
    {

        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }

        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('rating_id', 'rating id', 'trim|required');
        $this->form_validation->set_rules('trailor', 'trailor', 'trim|required');
        $this->form_validation->set_rules('gener_id', 'gener id', 'trim|required');
        $this->form_validation->set_rules('plot', 'plot', 'trim|required');
        $this->form_validation->set_rules('runningtime', 'runningtime', 'trim|required');
        $this->form_validation->set_rules('realsedate', 'realsedate', 'trim|required');
        $this->form_validation->set_rules('language', 'language', 'trim|required');
        $this->form_validation->set_rules('staring', 'staring', 'trim|required');
        $this->form_validation->set_rules('subtitle', 'subtitle', 'trim|required');
        if (empty($_FILES['userfile']['name']))
        {
          $this->form_validation->set_rules('userfile', 'Poster', 'required');
        }


        if ($this->form_validation->run() === FALSE) {
            
            $data['gener'] = $this->staff_model->get_gener();
            $data['rating'] = $this->staff_model->get_rating();

            $this->load->view('templates/admin_header', $data);
            $this->load->view('staffpages/add_movie', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {

            $config['upload_path'] = './assets/poster';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                //$post_image = 'noimage.jpg';
                $this->load->view('templates/admin_header');
                $this->load->view('staffpages/add_movie', $error);
                $this->load->view('templates/admin_footer');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }
            
            $this->staff_model->add_movie($post_image);
            redirect('staff_movies');
        } 
    } 

    public function edit_movie($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        
        $data['records'] = $this->staff_model->getMovieRecord($id);

        if (empty($data['records'])) {
            show_404();
        }
        $data['gener'] = $this->staff_model->get_gener();
        $data['rating'] = $this->staff_model->get_rating();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('staffpages/edit_movie', $data);
        $this->load->view('templates/admin_footer');
    }
    public function update_movie($id)
    {

        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }

        $this->form_validation->set_rules('title', 'title', 'trim|required');
        $this->form_validation->set_rules('rating_id', 'rating id', 'trim|required');
        $this->form_validation->set_rules('trailor', 'trailor', 'trim|required');
        $this->form_validation->set_rules('gener_id', 'gener id', 'trim|required');
        $this->form_validation->set_rules('plot', 'plot', 'trim|required');
        $this->form_validation->set_rules('runningtime', 'running time', 'trim|required');
        $this->form_validation->set_rules('realsedate', 'realse date', 'trim|required');
        $this->form_validation->set_rules('language', 'language', 'trim|required');
        $this->form_validation->set_rules('staring', 'staring', 'trim|required');
        $this->form_validation->set_rules('subtitle', 'subtitle', 'trim|required');



        if ($this->form_validation->run() === FALSE) {
            $this->edit_movie($id);
        } else {

            $config['upload_path'] = './assets/poster';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                
                $this->load->view('templates/admin_header');
                $this->load->view('staffpages/edit_movie', $error);
                $this->load->view('templates/admin_footer');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }
            
            $this->staff_model->update_movie($post_image,$id);
            redirect('staff_movies');
        }
    } 
    public function delete_movie($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        
        $this->staff_model->deleteMovie($id);
        redirect('staff_movies');
    }
    public function showtime()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/showtime.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if(isset($_POST['Search'])){
			
            $data['showtime'] = $this->staff_model->search_showtime();
            $data['cinema'] =$this->staff_model->get_cinema();
		    $data['movie'] =$this->staff_model->get_movie();
			
            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/showtime',$data);
            $this->load->view('templates/admin_footer');
			}
			
	   else{
			
            $data['showtime'] = $this->staff_model->get_showtime();
            $data['cinema'] =$this->staff_model->get_cinema();
		    $data['movie'] =$this->staff_model->get_movie();
			
            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/showtime',$data);
            $this->load->view('templates/admin_footer');
	   }
        
    }
    public function add_showtime()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->form_validation->set_rules('movie', 'movie', 'trim|required');
        $this->form_validation->set_rules('cinema', 'cinema', 'trim|required');
        $this->form_validation->set_rules('date', 'date','trim|required');
        $this->form_validation->set_rules('time', 'time','trim|required');
        $this->form_validation->set_rules('price', 'price','trim|required');
        


        if ($this->form_validation->run() === FALSE) {

            $this->showtime();
        } else {

            
            $this->staff_model->add_showtime();
            redirect('staff_showtime');
        }
    } 
    public function edit_showtime($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        } 
        
        $data['records'] = $this->staff_model->getShowRecord($id);

        if (empty($data['records'])) {
            show_404();
        }
        $data['cinema'] =$this->staff_model->get_cinema();
        $data['movie'] =$this->staff_model->get_movie();
        
        $this->load->view('templates/admin_header', $data);
        $this->load->view('staffpages/edit_showtime', $data);
        $this->load->view('templates/admin_footer');
    }
    public function update_showtime($id)
    {

        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->form_validation->set_rules('movie', 'movie', 'trim|required');
        $this->form_validation->set_rules('cinema', 'cinema', 'trim|required');
        $this->form_validation->set_rules('date', 'date','trim|required');
        $this->form_validation->set_rules('time', 'time','trim|required');
        $this->form_validation->set_rules('price', 'price','trim|required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->edit_showtime($id);
        } else {

            
            
            $this->staff_model->update_showtime($id);
            redirect('staff_showtime');
        }
    } 
    public function delete_showtime($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        
        $this->staff_model->deleteShowtime($id);
        redirect('staff_showtime');
    }
    public function customer()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/customer.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if(isset($_POST['Search'])){
			
            $data['customer'] = $this->staff_model->search_customer();
            
            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/customer',$data);
            $this->load->view('templates/admin_footer');
			}
			
	   else{
			
            $data['customer'] = $this->staff_model->get_customer();
           
            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/customer',$data);
            $this->load->view('templates/admin_footer');
	   }
        
    }
    public function add_customer()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
    $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha');
    $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha');
	$this->form_validation->set_rules('email', 'Email','trim|required|valid_email|callback_check_email');
	$this->form_validation->set_rules('phone', 'Phone Number','trim|required|numeric|min_length[10]|callback_check_phone');
	$this->form_validation->set_rules('username', 'User Name','trim|required');
	$this->form_validation->set_rules('password', 'pasword','trim|required|min_length[8]');
	$this->form_validation->set_rules('password2', 'confirm pasword','trim|required|min_length[8]|matches[password]');

        


        if ($this->form_validation->run() === FALSE) {

            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/add_customer');
            $this->load->view('templates/admin_footer');
        } else {

            
            $this->staff_model->add_customer();
            redirect('staff_customer');
        }
    } 
    public function edit_customer($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        
        $data['records'] = $this->staff_model->getCustomerRecord($id);

        if (empty($data['records'])) {
            show_404();
        }
        
        $this->load->view('templates/admin_header', $data);
        $this->load->view('staffpages/edit_customer', $data);
        $this->load->view('templates/admin_footer');
    }
    public function update_customer($id)
    {

        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha');
    $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha');
	$this->form_validation->set_rules('email', 'Email','trim|required|valid_email');
	$this->form_validation->set_rules('phone', 'Phone Number','trim|required|numeric|min_length[10]');
	$this->form_validation->set_rules('username', 'User Name','trim|required');
	$this->form_validation->set_rules('password', 'Old pasword','trim|required|min_length[8]|callback_check_Password');
	$this->form_validation->set_rules('new_password', 'New pasword','trim|required|min_length[8]');
	$this->form_validation->set_rules('password2', 'confirm pasword','trim|required|min_length[8]|matches[new_password]');
        
        if ($this->form_validation->run() === FALSE) {
            $this->edit_customer($id);
        } else {

            
            
            $this->staff_model->update_customer($id);
            redirect('staff_customer');
        }
    } 
    public function delete_customer($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        
        $this->staff_model->deleteCustomer($id);
        redirect('staff_customer');
    }
    public function check_Password($password)
	{
		$this->form_validation->set_message('check_Password', 'the password is incorect please try agin');

		$password= sha1($this->input->post('password'));
        
		if($this->staff_model->check_Password($password))
		{
			return true; 
		}else{
			return false; 
		}
	}
	public function check_email($email)
	{
		$this->form_validation->set_message('check_email', 'That email is taken. please choose a difrent one');
		
        
		if($this->staff_model->check_email($email))
		{
			return true;
		}else{
			return false; 
		}
	}
	
	public function check_phone($phone)
	{
		$this->form_validation->set_message('check_phone', 'please use differnt phone this is used before');
		
		if($this->staff_model->check_phone($phone))
		{
			return true;
		}else{
			return false; 
		}
    }
    public function advert()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/advert.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
         
        $this->load->view('templates/admin_header');
        $this->load->view('staffpages/advert');
        $this->load->view('templates/admin_footer');
    }
    public function seat()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/seat.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
       $data['cinema']=$this->staff_model->get_cinema();
        $this->load->view('templates/admin_header');
        $this->load->view('staffpages/seat',$data);
        $this->load->view('templates/admin_footer');
    }
    public function addSeat(){
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->form_validation->set_rules('cinema', 'cinema','required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->seat();
        } else {

            
            $this->staff_model->addSeat();

            redirect('staff_seat');
      
        }  
      
    }
    public function update_staf_profile()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
       
        $this->form_validation->set_rules('name', 'First Name', 'trim|required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique(user.email)');
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|numeric|min_length[10]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'pasword', 'trim|required|min_length[8]|callback_check_Password');
        
        if ($this->form_validation->run() === FALSE) {
            $this->staff_profile();
        } else {



            $this->staff_model->update_profile();
            redirect('staff_profile');
        }
    }
    public function staff_profile()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/user_profile.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        //$data['profile'] = $this->profile_model->get_profile();
        $data['edit_profile'] = $this->staff_model->get_profile();
        $this->load->view('templates/admin_header');
        $this->load->view('staffpages/user_profile',$data);
        $this->load->view('templates/admin_footer');
    }
    public function change_staff_pass()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
       
        
    $this->form_validation->set_rules('password', 'Old pasword','trim|required|min_length[8]|callback_check_Password');
	$this->form_validation->set_rules('new_password', 'New pasword','trim|required|min_length[8]');
	$this->form_validation->set_rules('password2', 'confirm pasword','trim|required|min_length[8]|matches[new_password]');

        
        if ($this->form_validation->run() === FALSE) {
        $data['password']='';
        $this->load->view('templates/admin_header');
        $this->load->view('staffpages/user_profile',$data);
        $this->load->view('templates/admin_footer');

        } else {



            $this->staff_model->change_password();
            redirect('staff_profile');
        }
    } 
    public function cinemas()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/cinema.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $cinema = $this->staff_model->search_cinema();

            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/cinema', ['cinema' => $cinema]);
            $this->load->view('templates/admin_footer');
        } else {

            $cinema = $this->staff_model->get_cinema();

            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/cinema', ['cinema' => $cinema]);
            $this->load->view('templates/admin_footer');
        }
    } //end of cinemas
    //add cinema function

    public function add_cinema()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->form_validation->set_rules('cinema_name', 'Cinema Name', 'required|callback_check_cinema_exists');
        if ($this->form_validation->run() === FALSE) {
            /* $query = $this->db->get("cinema");
			$data['cinema'] = $query->result(); */
            $data['cinema']    = $this->staff_model->get_cinema();
            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/cinema', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $this->staff_model->add_cinema();
            redirect('staff_cinemas');
        }
    } //end of add cinema

    //edit cinema
    public function edit_cinema($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }

        $data['items'] = $this->staff_model->get_cinema($id);

        if (empty($data['items'])) {
            show_404();
        }

        $data['title'] = 'Edit Cinema';

        $this->load->view('templates/admin_header', $data);
        $this->load->view('staffpages/edit_cinema', $data);
        $this->load->view('templates/admin_footer');
    } //end of edit cinema

    //update cinema function
    public function update_cinema()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->staff_model->update_cinema();
        redirect('staff_cinemas');
    }
    //delete cinema function
    public function delete_cinema($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->staff_model->delete_cinema($id);
        redirect('staff_cinemas');
    } //end of delete cinema
    //check cinema name existst
    public function check_cinema_exists($cinema)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->form_validation->set_message('check_cinema_exists', 'The cinema you are tryng to add is alredy inserted');

        if ($this->staff_model->check_cinema_exists($cinema)) {
            return true;
        } else {
            return false;
        }
    } //end of check cinema exists

    //geners function
    public function geners()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/staffpages/gener.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $data['gener'] = $this->staff_model->search_gener();

            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/gener', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $gener = $this->staff_model->get_gener();

            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/gener', ['gener' => $gener]);
            $this->load->view('templates/admin_footer');
        }
    } //end of geners

    //add gener function
    public function add_gener()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }

        $this->form_validation->set_rules('gener', 'Gener Name', 'trim|required|callback_check_gener_exists');

        if ($this->form_validation->run() === FALSE) {

            $data['gener']    = $this->staff_model->get_gener();
            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/gener', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $this->staff_model->add_gener();
            redirect('staff_geners');
        }
    } //end of add gener

    //edit Gener function
    public function edit_gener($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }

        $data['items'] = $this->staff_model->get_gener($id);

        if (empty($data['items'])) {
            show_404();
        }

        $data['title'] = 'Edit Gener';

        $this->load->view('templates/admin_header', $data);
        $this->load->view('staffpages/edit_gener', $data);
        $this->load->view('templates/admin_footer');
    } //end of edit gener

    //pdate gener function
    public function update_gener()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->staff_model->update_gener();
        redirect('staff_geners');
    }
    //delete gener function
    public function delete_gener($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->staff_model->delete_gener($id);
        redirect('staff_geners');
    } //end of delete cinema
    //check gener existes function
    public function check_gener_exists($gener)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->form_validation->set_message('check_gener_exists', 'The gener you are tryng to add is alredy inserted');

        if ($this->staff_model->check_gener_exists($gener)) {
            return true;
        } else {
            return false;
        }
    } //end of check gener exists 
    public function ratings()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }

        if (!file_exists(APPPATH . 'views/staffpages/rating.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $data['rating'] = $this->staff_model->search_rating();

            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/rating', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $data['rating'] = $this->staff_model->get_rating();

            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/rating', $data);
            $this->load->view('templates/admin_footer');
        }
    } //end of rating
    //add rating function
    public function add_rating()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }

        $this->form_validation->set_rules('rating', 'rating', 'trim|required|callback_check_rating_exists');
        $this->form_validation->set_rules('description', 'description', 'trim|required|alpha');

        if ($this->form_validation->run() === FALSE) {
            $data['rating'] = $this->staff_model->get_rating();
            $this->load->view('templates/admin_header');
            $this->load->view('staffpages/rating', $data);
            $this->load->view('templates/admin_footer');
        } else {

            $this->staff_model->add_rating();
            redirect('staff_ratings');
        }
    } //end of add rating

    //edit ratting function
    public function edit_rating($id)
    {

        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }

        $data['items'] = $this->staff_model->get_rating($id);

        if (empty($data['items'])) {
            show_404();
        }

        $data['title'] = 'Edit rating';

        $this->load->view('templates/admin_header', $data);
        $this->load->view('staffpages/edit_rating', $data);
        $this->load->view('templates/admin_footer');
    } //end of eddit rating

    //update rating function
    public function update_rating()
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->staff_model->update_rating();
        redirect('staff_ratings');
    } //end of update rating

    //delete rating function
    public function delete_rating($id)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->staff_model->delete_rating($id);
        redirect('staff_ratings');
    }

    //check rating exist function
    public function check_rating_exists($rating)
    {
        if ($this->session->tempdata('role') !== 'staff') {
            redirect('authenticate_login');
        }
        $this->form_validation->set_message('check_rating_exists', 'The rating you are tryng to add is alredy inserted');

        if ($this->staff_model->check_rating_exists($rating)) {
            return true;
        } else {
            return false;
        }
    } //end of check rating exists function

}
