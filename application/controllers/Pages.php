<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	public function view($page = 'dashboard', $error = '')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['user'] = $this->admin_model->get_user();
		$data['gener'] = $this->admin_model->get_gener();
		$data['rating'] = $this->admin_model->get_rating();
		$data['cinema']	= $this->admin_model->get_cinema();
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer', $data);
	}
}
