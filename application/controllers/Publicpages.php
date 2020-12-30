<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publicpages extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	//index function
	public function index()
	{
		if (!file_exists(APPPATH . 'views/publicpages/home.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['title'] = 'home';
		$data['movie'] = $this->public_model->get_movie();
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
	public function movie_checkout()
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie_checkout.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('publictemplates/header');
		$this->load->view('publicpages/movie_checkout');
		$this->load->view('publictemplates/footer');
	} //end of movie checkout

	//movie details function
	public function movie_details($id)
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie_details.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['movie_detail'] = $this->public_model->get_movie($id);
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
		$data['movie'] = $this->public_model->get_movie(false, $config['per_page'], $offset);
		$data['gener'] = $this->public_model->get_gener();
		$this->load->view('publictemplates/header', $data);
		$this->load->view('publicpages/movie', $data);
		$this->load->view('publictemplates/footer');
	} //end of movie

	//movie seat plan function
	public function movie_seat_plan()
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie_seat_plan.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('publictemplates/header');
		$this->load->view('publicpages/movie_seat_plan');
		$this->load->view('publictemplates/footer');
	} //end of movie seat plan function

	//movie ticket plan function
	public function movie_ticket_plan()
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie_ticket_plan.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['movie_detail'] = $this->public_model->get_movie($id);
		if (empty($data['movie_detail'])) {
			show_404();
		}
		$this->load->view('publictemplates/header');
		$this->load->view('publicpages/movie_ticket_plan');
		$this->load->view('publictemplates/footer');
	} //end of movie ticket plan
}
