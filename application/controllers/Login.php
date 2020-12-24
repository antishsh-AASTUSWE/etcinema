<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	//login function
	public function authenticate_login()
	{
		if (!file_exists(APPPATH . 'views/loginpage/login.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}


		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');


		if ($this->form_validation->run() === false) {
			$this->load->view('logintemplates/header');
			$this->load->view('loginpage/login');
			$this->load->view('logintemplates/footer');
		} else {

			//get username and password
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$result = $this->login_model->login($username, $password);

			if ($result->num_rows() > 0) {

				$data = $result->row_array();

				$sesdata = array(
					'user_id' => $data['user_id'],
					'username' => $username,
					'email' => $data['email'],
					'name' => $data['name'],
					'role' => $data['role'],
					'logged_in' => TRUE
				);

				//crate sassion
				$this->session->set_userdata($sesdata);

				if ($sesdata['role'] === 'admin') {
					redirect('admin');
				} elseif ($sesdata['role'] === 'staff') {
					redirect('staff');
				} elseif ($sesdata['role'] === 'manager') {
					redirect('manager');
				} else {
					redirect('login/authenticate_login');
				}

				//set massege
				$this->session->set_flashdata('user_logedin', 'you are now loged in');

				redirect('admin');
			} else {
				//set massege
				$this->session->set_flashdata('login_failed', 'Incorrect username or pasword:');

				redirect('login/authenticate_login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('login/authenticate_login');
	}
}
