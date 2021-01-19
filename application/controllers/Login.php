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
			$this->load->view('logintemplates/admin_login_header');
			$this->load->view('loginpage/login');
			$this->load->view('logintemplates/admin_login_footer');
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
				$this->session->set_tempdata($sesdata, NULL, 300);

				if ($sesdata['role'] === 'admin') {
					redirect('admin_dashboard');
				} elseif ($sesdata['role'] === 'staff') {
					redirect('staff_dashboard');
				} elseif ($sesdata['role'] === 'manager') {
					redirect('manager_dashboard');
				} else {
					redirect('authenticate_login');
				}

				//set massege
				$this->session->set_flashdata('user_logedin', 'you are now loged in');

				redirect('admin_dashboard');
			} else {
				//set massege
				$this->session->set_flashdata('login_failed', 'Incorrect username or pasword:');

				redirect('authenticate_login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('authenticate_login');
	}

	//google signin function
	/* public function google_signin()
	{
		if (!file_exists(APPPATH . 'views/publicpages/sign_in.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		include_once APPPATH . 'libraries/vendor/autoload.php';
		$google_client = new Google_client();
		$google_client->setClientid('588500391576-pd6da051ppo1s3mp7jdpo5r6ci9tmgkp.apps.googleusercontent.com');
		$google_client->setClientSecret('oIEC4qoh1bUhbYdZs0-zYHGF');

		$google_client->setRedirectUri('http://localhost:8888/etcinema/login/customer_signin');
		$google_client->addScope('email');
		$google_client->addScope('profile');

		if (isset($_GET["code"])) {
			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
			if (!isset($token["error"])) {
				$google_client->setAccessToken($token['access_token']);
				$this->session->tempdata('access_token', $token['access_token']);
				$google_service = new Google_Service_Oauth2($google_client);
				$data = $google_service->userinfo->get();
				$current_datetime = date('Y-m-d H:i:s');
				if ($this->login_model->is_already_register($data['id'])) {
					//update data function
					$user_data = array(
						'first_name' => $data['given_name'],
						'last_name' => $data['family_name'],
						'Email_address' => $data['email'],
						'profile_picture' => $data['picture'],
						'updated_at' => $current_datetime
					);
					$this->login_model->update_user_data($user_data, $data['id']);
				} else {
					//insert data
					$user_data = array(
						'login_oauth_uid' => $data['id'],
						'first_name' => $data['given_name'],
						'last_name' => $data['family_name'],
						'Email_address' => $data['email'],
						'profile_picture' => $data['picture'],

					);
					$this->login_model->insert_user_data($user_data);
				}
				$this->session->tempdata('user_data', $user_data);
			}
		}
		if (!$this->session->tempdata('access_token')) {
			$login_button = $google_client->createAuthUrl();
			$data['login'] = $login_button;
			$this->load->view('logintemplates/public_login_header');
			$this->load->view('publicpages/sign_in', $data);
			$this->load->view('logintemplates/public_login_footer');
		}
		$this->load->view('logintemplates/public_login_header');
		$this->load->view('publicpages/sign_in');
		$this->load->view('logintemplates/public_login_footer');
	}  */ //end of google sign_in

	//customer login function
	public function customer_signin()
	{
		if (!file_exists(APPPATH . 'views/publicpages/sign_in.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');


		if ($this->form_validation->run() === false) {
			$this->load->view('logintemplates/public_login_header');
			$this->load->view('publicpages/sign_in');
			$this->load->view('logintemplates/public_login_footer');
		} else {

			//get username and password
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$result = $this->login_model->customer_login($email, $password);

			if ($result->num_rows() > 0) {

				$data = $result->row_array();

				$sesdata = array(
					'user_id' => $data['cust_id'],
					'email' => $email,
					'username' => $data['username'],
					'customer' => 'yes',
					'logged_in' => TRUE
				);

				//crate sassion
				$this->session->set_tempdata($sesdata, NULL, 300);
				//$this->session->mark_as_temp('logged_in', 1);
				//set massege
				$this->session->set_flashdata('user_logedin', 'you are now loged in');

				redirect('home');
			} else {
				//set massege
				$this->session->set_flashdata('login_failed', 'Incorrect username or pasword:');

				redirect('customer_signin');
			}
		}
	} //end of customer sign_in

	//customer log output
	public function customer_logout()
	{

		$this->session->sess_destroy();
		redirect('home');
	}
	//user register function
	public function customer_signup()
	{
		if (!file_exists(APPPATH . 'views/publicpages/sign_up.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_email_exists');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_check_username_exists');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('password2', 'Confirm password', 'trim|required|min_length[8]|matches[password]');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric|min_length[10]|is_unique[customer.phone]');


		if ($this->form_validation->run() === false) {
			$this->load->view('logintemplates/public_login_header');
			$this->load->view('publicpages/sign_up');
			$this->load->view('logintemplates/public_login_footer');
		} else {
			$enc_password = md5($this->input->post('password'));
			$this->login_model->customer_signup($enc_password);

			$this->session->set_flashdata('user_registerd', 'User is registerd and can login');

			redirect('home');
		}
	} //end of  user register

	public function change_password()
	{
		if (!$this->session->tempdata('logged_in') == true) {
			redirect('customer_signin');
		}
		if (!file_exists(APPPATH . 'views/publicpages/change_password.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$this->form_validation->set_rules('old_password', 'Old Password', 'required');
		$this->form_validation->set_rules('new_password', 'New password', 'required');
		$this->form_validation->set_rules('password2', 'Confirm password', 'matches[new_password]');
		if ($this->form_validation->run() === false) {
			$this->load->view('logintemplates/public_login_header');
			$this->load->view('publicpages/change_password');
			$this->load->view('logintemplates/public_login_footer');
		} else {
			//check old password2
			$result = $this->login_model->check_old_password($this->session->tempdata('email'), md5($this->input->post('old_password')));
			if ($result > 0 and $result === TRUE) {
				$result = $this->login_model->update_user_data($this->session->tempdata('email'));
				if ($result > 0) {
					$this->session->set_flashdata('sucess_msg', 'User  Password Changed');
					$this->customer_logout();
					redirect('change_signin');
				} else {
					$this->session->set_flashdata('error_msg', 'User  Password Not changed');
					redirect('change_password');
				}
			} else {
				$this->session->set_flashdata('message', 'User Old Password Not Match');
				redirect('change_password');
			}

			//update password
		}
	}

	//check user name existes
	public function check_username_exists($username)
	{

		$this->form_validation->set_message('check_username_exists', 'That user name is taken. please choose a different one');
		if ($this->login_model->check_username_exists($username)) {
			return true;
		} else {
			return false;
		}
	} //end of check username exists

	//check user name existes
	public function check_email_exists($email)
	{

		$this->form_validation->set_message('check_email_exists', 'That email is taken. please use a different one');
		if ($this->login_model->check_email_exists($email)) {
			return true;
		} else {
			return false;
		}
	} //end of check username exists
}
