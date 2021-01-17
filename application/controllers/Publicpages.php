<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publicpages extends CI_Controller
{


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
		$this->load->view('publictemplates/header', $data);
		$this->load->view('publicpages/home', $data);
		$this->load->view('publictemplates/footer');
	} //end of index

	//about function
	public function about()
	{
		if (!file_exists(APPPATH . 'views/publicpages/about.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['title'] = 'about';
		$this->load->view('publictemplates/header', $data);
		$this->load->view('publicpages/about');
		$this->load->view('publictemplates/footer');
	} //end of about

	//contact function
	public function contact()
	{
		if (!file_exists(APPPATH . 'views/publicpages/contact.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['title'] = 'contact';
		$this->load->view('publictemplates/header', $data);
		$this->load->view('publicpages/contact');
		$this->load->view('publictemplates/footer');
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
			$this->load->view('publictemplates/header');
			$this->load->view('publicpages/movie_checkout', $data);
			$this->load->view('publictemplates/footer');
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

		$this->load->view('publictemplates/header');
		$this->load->view('publicpages/movie_details', $data);
		$this->load->view('publictemplates/footer');
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
		$this->load->view('publictemplates/header', $data);
		$this->load->view('publicpages/movie', $data);
		$this->load->view('publictemplates/footer');
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

		$this->load->view('publictemplates/header');
		$this->load->view('publicpages/seat', $data);
		$this->load->view('publictemplates/footer');
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
		$this->load->view('publictemplates/header');
		$this->load->view('publicpages/movie_ticket_plan', $data);
		$this->load->view('publictemplates/footer');
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
			$this->load->view('publictemplates/header', $data);
			$this->load->view('publicpages/movie', $data);
			$this->load->view('publictemplates/footer');
		}
	}
	public function movie_book()
	{



		$this->public_model->reserve_seat();

		$booking_id = $this->public_model->book();
		//echo $booking_id;
		$content = $this->public_model->booking_sms($booking_id);

		$this->send($content);
	}
	public function send($content)
	{
		$this->load->config('email');
		$this->load->library('email');

		$from = $this->config->item('smtp_user');
		$to = $this->session->userdata('email');
		$subject = 'test';
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

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['movie_detail'] = $this->public_model->get_movie($movie_id);
			$this->load->view('publictemplates/header');
			$this->load->view('publicpages/movie_details', $data);
			$this->load->view('publictemplates/footer');
		} else {
			$this->public_model->create_comment($movie_id);
			redirect('publicpages/movie_details/' . $movie_id);
		}
	} //end of create_comment



	public function test($id)
	{
		$row = $this->public_model->get_seatRow();
		if (isset($row)) {
			$t = 0;
			$t = $row['col'] * $row['row'];
		}

		for ($i = 11; $i < $t; $i++) {
			$this->form_validation->set_rules('seat' . $i, 'seat' . $i, 'required');
		}
		if ($this->form_validation->run() === FALSE) {
			echo validation_errors();
		} else {

			$this->movie();
		}
	}
	public function booking_confirm(){
		$this->load->view('publictemplates/header');
			$this->load->view('publicpages/booking_confirm');
			$this->load->view('publictemplates/footer');
	}
}
 