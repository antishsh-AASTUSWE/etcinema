<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {


	public function send()
	{
		 $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
		$this->email->clear();
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
		
	}

	
}