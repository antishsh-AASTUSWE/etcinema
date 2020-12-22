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
		$data['user'] = $this->dashbord_model->get_user();
		$data['gener'] = $this->dashbord_model->get_gener();
		$data['rating'] = $this->dashbord_model->get_rating();
		$data['cinema']	= $this->dashbord_model->get_cinema();
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer', $data);
	}



	//Add Movie function

	public function add_movie()
	{



		$this->form_validation->set_rules('title', 'title', 'required');

		$this->form_validation->set_rules('rating_id', 'rating id', 'required');
		$this->form_validation->set_rules('trailor', 'trailor', 'required');
		$this->form_validation->set_rules('gener_id', 'gener id', 'required');
		$this->form_validation->set_rules('plot', 'plot', 'required');
		$this->form_validation->set_rules('runningtime', 'runningtime', 'required');
		$this->form_validation->set_rules('realsedate', 'realsedate', 'required');
		$this->form_validation->set_rules('language', 'language', 'required');
		$this->form_validation->set_rules('staring', 'staring', 'required');
		$this->form_validation->set_rules('subtitle', 'subtitle', 'required');



		if ($this->form_validation->run() === FALSE) {
			$data['gener'] = $this->dashbord_model->get_gener();
			$data['rating'] = $this->dashbord_model->get_rating();

			$this->load->view('templates/header', $data);
			$this->load->view('pages/add_movie', $data);
			$this->load->view('templates/footer', $data);
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
				$this->load->view('templates/header');
				$this->load->view('pages/add_movie', $error);
				$this->load->view('templates/footer');
			} else {
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['userfile']['name'];
			}

			$this->dashbord_model->add_movie($post_image);
			redirect('movies');
		}
	} //end off add movie

	//add cinema function

	public function add_cinema()
	{
		$this->form_validation->set_rules('cinema_name', 'Cinema Name', 'required|callback_check_cinema_exists');


		if ($this->form_validation->run() === FALSE) {
			/* $query = $this->db->get("cinema");
			$data['cinema'] = $query->result(); */
			$data['cinema']	= $this->dashbord_model->get_cinema();
			$this->load->view('templates/header');
			$this->load->view('Pages/cinema', $data);
			$this->load->view('templates/footer');
		} else {

			$this->dashbord_model->add_cinema();
			redirect('cinema');
		}
	} //end of add cinema

	//edit cinema
	public function edit_cinema($id)
	{
		/* if (!$this->session->userdata('logged_in')) {
			 redirect('login');
		 } */
		$data['items'] = $this->dashbord_model->get_cinema($id);

		if (empty($data['items'])) {
			show_404();
		}

		$data['title'] = 'Edit Vechel';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/edit_cinema', $data);
		$this->load->view('templates/footer');
	} //end of edit cinema

	//update cinema function
	public function update_cinema()
	{
		/* if (!$this->session->userdata('logged_in')) {
			 redirect('login');
		 } */
		$this->dashbord_model->update_cinema();
		redirect('cinema');
	}
	//delete cinema function
	public function delete_cinema($id)
	{
		$this->dashbord_model->delete_cinema($id);
		redirect('cinema');
	} //end of delete cinema
	//check cinema name existst
	public function check_cinema_exists($cinema)
	{
		$this->form_validation->set_message('check_cinema_exists', 'The cinema you are tryng to add is alredy inserted');

		if ($this->dashbord_model->check_cinema_exists($cinema)) {
			return true;
		} else {
			return false;
		}
	} //end of check cinema exists

	//add rating function

	public function add_rating()
	{

		$this->form_validation->set_rules('rating', 'rating', 'required|callback_check_rating_exists');
		$this->form_validation->set_rules('description', 'description', 'required');


		if ($this->form_validation->run() === FALSE) {
			$data['rating'] = $this->dashbord_model->get_rating();
			$this->load->view('templates/header');
			$this->load->view('Pages/rating', $data);
			$this->load->view('templates/footer');
		} else {

			$this->dashbord_model->add_rating();
			redirect('rating');
		}
	} //end of add rating

	//edit ratting function
	public function edit_rating($id)
	{


		$data['items'] = $this->dashbord_model->get_rating($id);

		if (empty($data['items'])) {
			show_404();
		}

		$data['title'] = 'Edit rating';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/edit_rating', $data);
		$this->load->view('templates/footer');
	} //end of eddit rating

	//update rating function
	public function update_rating()
	{
		/* if (!$this->session->userdata('logged_in')) {
			 redirect('login');
		 } */
		$this->dashbord_model->update_rating();
		redirect('rating');
	} //end of update rating

	//delete rating function
	public function delete_rating($id)
	{
		$this->dashbord_model->delete_rating($id);
		redirect('rating');
	}

	//check rating exist function
	public function check_rating_exists($rating)
	{
		$this->form_validation->set_message('check_rating_exists', 'The rating you are tryng to add is alredy inserted');

		if ($this->dashbord_model->check_rating_exists($rating)) {
			return true;
		} else {
			return false;
		}
	} //end of check rating exists function
	//add gener function

	public function add_gener()
	{
		$this->form_validation->set_rules('gener', 'Gener Name', 'required|callback_check_gener_exists');


		if ($this->form_validation->run() === FALSE) {
			/* $query = $this->db->get("cinema");
			$data['cinema'] = $query->result(); */
			$data['gener']	= $this->dashbord_model->get_gener();
			$this->load->view('templates/header');
			$this->load->view('Pages/gener', $data);
			$this->load->view('templates/footer');
		} else {

			$this->dashbord_model->add_gener();
			redirect('gener');
		}
	} //end of add gener
	//edit Gener function
	public function edit_gener($id)
	{
		/* if (!$this->session->userdata('logged_in')) {
			 redirect('login');
		 } */
		$data['items'] = $this->dashbord_model->get_gener($id);

		if (empty($data['items'])) {
			show_404();
		}

		$data['title'] = 'Edit Gener';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/edit_gener', $data);
		$this->load->view('templates/footer');
	} //end of edit gener

	//pdate gener function
	public function update_gener()
	{
		/* if (!$this->session->userdata('logged_in')) {
			 redirect('login');
		 } */
		$this->dashbord_model->update_gener();
		redirect('gener');
	}
	//delete gener function
	public function delete_gener($id)
	{
		$this->dashbord_model->delete_gener($id);
		redirect('gener');
	} //end of delete cinema
	//check gener existes function
	public function check_gener_exists($gener)
	{
		$this->form_validation->set_message('check_gener_exists', 'The gener you are tryng to add is alredy inserted');

		if ($this->dashbord_model->check_gener_exists($gener)) {
			return true;
		} else {
			return false;
		}
	} //end of check gener exists 

	//add user function
	public function Register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('password2', 'Confirm password', 'matches[password]');
		$this->form_validation->set_rules('role', 'Role', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('templates/header');
			$this->load->view('pages/add_user');
			$this->load->view('templates/footer');
		} else {
			$enc_password = md5($this->input->post('password')) ;
			$this->dashbord_model->register($enc_password);

			$this->session->set_flashdata('user_registerd', 'User is registerd and can login');

			redirect('users');
		}
	} //end of add user

	//check user name existes
	public function check_username_exists($username)
	{
		$this->form_validation->set_message('check_username_exists','That user name is taken. please choose a different one');
		if ($this->dashbord_model->check_username_exists($username)) {
			return true;
		}else{
			return false;
		}
	}//end of check username exists

	//check user name existes
	public function check_email_exists($email)
	{
		$this->form_validation->set_message('check_email_exists','That email is taken. please use a different one');
		if ($this->dashbord_model->check_email_exists($email)) {
			return true;
		}else{
			return false;
		}
	}//end of check username exists

}
