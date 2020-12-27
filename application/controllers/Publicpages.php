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
		$this->load->view('publictemplates/header');
		$this->load->view('publicpages/home');
		$this->load->view('publictemplates/footer');
	} //end of index

	//about function
	public function about()
	{
		if (!file_exists(APPPATH . 'views/publicpages/about.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('publictemplates/header');
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
		$this->load->view('publictemplates/header');
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
	public function movie_details()
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie_details.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('publictemplates/header');
		$this->load->view('publicpages/home');
		$this->load->view('publictemplates/footer');
	} //end of movie detailes

	//movie function
	public function movie()
	{
		if (!file_exists(APPPATH . 'views/publicpages/movie.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('publictemplates/header');
		$this->load->view('publicpages/movie');
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
		$this->load->view('publictemplates/header');
		$this->load->view('publicpages/movie_ticket_plan');
		$this->load->view('publictemplates/footer');
	} //end of movie ticket plan
}
