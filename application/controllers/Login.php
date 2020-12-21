<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('usertemplate/header');
		$this->load->view('user/login');
		$this->load->view('usertemplate/footer');
	}

	
}