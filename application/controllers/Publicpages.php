<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publicpages extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
        $this->load->library('pdf');
    }

	public function index()
	{
		if (!file_exists(APPPATH . 'views/publicpages/home.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['title'] = 'home';
		$data['nowshowing'] = $this->public_model->now_showing();
		$data['commingsoon'] = $this->public_model->cooming_soon();
		$data['trending'] = $this->public_model->trending();
		$data['movie'] = $this->public_model->get_showtime();
		//$data['movie'] = $this->public_model->get_movie();
		$data['cinema'] = $this->public_model->get_cinema();
		$this->load->view('templates/public_header', $data);
		$this->load->view('publicpages/home', $data);
		$this->load->view('templates/public_footer');
	} //end of index

	//about function
	public function about()
	{
		if (!file_exists(APPPATH . 'views/publicpages/about.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['title'] = 'about';
		$this->load->view('templates/public_header', $data);
		$this->load->view('publicpages/about');
		$this->load->view('templates/public_footer');
	} //end of about

	//contact function
	public function contact()
	{
		if (!file_exists(APPPATH . 'views/publicpages/contact.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['title'] = 'contact';
		$this->load->view('templates/public_header', $data);
		$this->load->view('publicpages/contact');
		$this->load->view('templates/public_footer');
	} //end of contact

	//movie checkout function
	public function movie_checkout($id)
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie_checkout.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		if (isset($_POST)) {
			$data['seat'] = $this->input->post('seat');
			$data['showtime'] = $this->public_model->get_showtime($id);
			$data['row'] = $this->public_model->get_seatRow();
			$data['bank'] = $this->public_model->get_bank();
			$this->load->view('templates/public_header');
			$this->load->view('publicpages/movie_checkout', $data);
			$this->load->view('templates/public_footer');
		} else {
			show_404();
		}
	} //end of movie checkout

	//movie details function
	public function movie_details($id)
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie_details.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['movie_detail'] = $this->public_model->get_movie($id);
		$data['comment'] = $this->public_model->get_comments($id);
		$data['count'] = $this->public_model->count_comment($id);

		if (empty($data['movie_detail'])) {
			show_404();
		}

		$this->load->view('templates/public_header');
		$this->load->view('publicpages/movie_details', $data);
		$this->load->view('templates/public_footer');
	} //end of movie detailes

	//movie function
	public function movie($offset = 0)
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$config['base_url'] = base_url() . 'publicpages/movie';
		$config['total_rows'] = $this->db->count_all('movie');
		$config['per_page'] = 6;
		$config['uri_segment'] = 3;
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['cur_tag_open'] = '<a class="active" href="#">';
		$config['cur_tag_close'] = '</a>';
		$config['attributes'] = array('class' => 'pagination-area');


		$this->pagination->initialize($config);
		$data['title'] = 'movie';
		$data['cinema'] = $this->public_model->get_cinema();
		$data['movie'] = $this->public_model->get_movie(false, $config['per_page'], $offset);
		$data['gener'] = $this->public_model->get_gener();
		$this->load->view('templates/public_header', $data);
		$this->load->view('publicpages/movie', $data);
		$this->load->view('templates/public_footer');
	} //end of movie

	//movie seat plan function
	public function movie_seat_plan($id)
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie_seat_plan.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['showtime'] = $this->public_model->get_showtime($id);
		$data['seat'] = $this->public_model->get_seat($id);
		$data['seatrow'] = $this->public_model->get_seatRow();

		$this->load->view('templates/public_header');
		$this->load->view('publicpages/seat', $data);
		$this->load->view('templates/public_footer');
	} //end of movie seat plan function

	//movie ticket plan function
	public function movie_ticket_plan($id)
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie_ticket_plan.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['movie_detail'] = $this->public_model->get_movie($id);
		$data['showtime_detail'] = $this->public_model->get_showtime_bymovieid($id);

		if (empty($data['movie_detail'])) {
			show_404();
		}
		if (empty($data['movie_detail'])) {
			show_404();
		}
		$this->load->view('templates/public_header');
		$this->load->view('publicpages/movie_ticket_plan', $data);
		$this->load->view('templates/public_footer');
	} //end of movie ticket plan
	public function search_movie($offset = 0)
	{

		if (isset($_POST)) {


			$config['base_url'] = base_url() . 'publicpages/movie';
			$config['total_rows'] = $this->db->count_all('movie');
			$config['per_page'] = 6;
			$config['uri_segment'] = 3;
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Prev';
			$config['cur_tag_open'] = '<a class="active" href="#">';
			$config['cur_tag_close'] = '</a>';
			$config['attributes'] = array('class' => 'pagination-area');


			$this->pagination->initialize($config);
			$data['title'] = 'Search Results';

			$data['movie'] = $this->public_model->search_movie(false, $config['per_page'], $offset);

			$data['gener'] = $this->public_model->get_gener();
			//$data['movie'] = $this->public_model->search_movie();
			$data['cinema'] = $this->public_model->get_cinema();
			$this->load->view('templates/public_header', $data);
			$this->load->view('publicpages/movie', $data);
			$this->load->view('templates/public_footer');
		}
	}
	public function movie_book($id)
	{
		$this->form_validation->set_rules('bank', 'bank', 'required');
		//$this->form_validation->set_rules('message', 'Message', 'trim|required|alpha');

		if ($this->form_validation->run() === FALSE) {
		$this->movie_checkout($id);
		}else{
			$booking_id = $this->public_model->book();
			$this->public_model->reserve_seat($booking_id);
			//echo $booking_id;
			$content = $this->public_model->booking_sms($booking_id);
	
			$this->send($content);
		}
		

		
	}
	public function send($content)
	{
		$this->load->config('email');
		$this->load->library('email');

		$from = $this->config->item('smtp_user');
		$to = $this->session->tempdata('email');
		$subject = 'Etcinema';
		$message = $content;
		$this->email->clear();
		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		if ($this->email->send()) {
			
			$this->booking_confirm();
			//echo 'Your Email has successfully been sent.';
		} else {
			show_error($this->email->print_debugger());
		}
	}
	//create comment function
	public function create_comment($movie_id)
	{

		$this->form_validation->set_rules('title', 'Title', 'trim|required|alpha');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|alpha');

		if ($this->form_validation->run() === FALSE) {
			$data['movie_detail'] = $this->public_model->get_movie($movie_id);
			$this->load->view('templates/public_header');
			$this->load->view('publicpages/movie_details', $data);
			$this->load->view('templates/public_footer');
		} else {
			$this->public_model->create_comment($movie_id);
			redirect('publicpages/movie_details/' . $movie_id);
		}
	} //end of create_comment



	public function booking_confirm(){
		
			$this->load->view('templates/public_header');
			$this->load->view('publicpages/booking_confirm');
			$this->load->view('templates/public_footer');
	}
	public function payment($id )
	{
	
			$this->form_validation->set_rules('transaction_no', 'transaction number', 'trim|required');
			//$this->form_validation->set_rules('depositer_name', 'depositer name', 'trim|required');
			//$this->form_validation->set_rules('payment_date', 'payment date', 'trim|required');
		
		if ($this->form_validation->run() === FALSE) {
			$data['movie'] = $this->public_model->get_booking($id);
			//$data['id']=25;
			$this->load->view('templates/public_header');
			$this->load->view('publicpages/paymnt_form',$data);
			$this->load->view('templates/public_footer');
		} else {
			//$this->public_model->check_payment();
			$row = $this->public_model->get_booking($id);
			if (isset($row)) {
				
				$price = $row['price'];
			}
			//echo $price;
			if ($this->public_model->check_payment($price)) {

				if ($this->public_model->confirm_payment($id)) {
				$this->print_ticket($id);
					//echo 'booking confirmed';
				}else{
					show_404();
				}
				//return true;
			} else {
			$data['movie'] = $this->public_model->get_booking($id);
			$data['error']='INVALID PAYMENT INFO';
			$this->load->view('templates/public_header');
			$this->load->view('publicpages/paymnt_form',$data);
			$this->load->view('templates/public_footer');
				
				//return false;
			}
		}
	}
	public function print_ticket($booking_id){
		$content=$this->public_model->print_ticket($booking_id);
		//echo $content;
		$this->send($content);
        
     
	}
	
	public function email_subscription($page = 'home'){
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|callback_check_email_exists');
		
		if ($this->form_validation->run() === FALSE) {
			
			$this->load->view('templates/public_header');
			$this->load->view('publicpages/'.$page);
			$this->load->view('templates/public_footer');
		} else {
			$this->public_model->email_subscription();
			$this->index();
		}
	}
	public function check_email_exists($email)
    {
       
        $this->form_validation->set_message('check_email_exists', 'That email is taken. please use a different one');
        if ($this->public_model->check_email_exists($email)) {
            return true;
        } else {
            return false;
        }
    } //end of check username exists

}
 