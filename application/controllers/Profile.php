<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->tempdata('logged_in') !== TRUE) {
            redirect('customer_signin');
        }
    }
    public function index()
    {
        if ($this->session->tempdata('customer') !== 'yes') {
            redirect('customer_signin');
        }

        if (!file_exists(APPPATH . 'views/profilepage/dashboard.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['totalBooking'] = $this->profile_model->countTotalbooking();
        $data['canceled'] = $this->profile_model->count_canceled();
        $data['paid'] = $this->profile_model->countPaid();
        $this->load->view('templates/admin_header');
        $this->load->view('profilepage/dashboard',$data);
        $this->load->view('templates/admin_footer');
    }
    public function user_profile()
    {
        if ($this->session->tempdata('customer') !== 'yes') {
            redirect('customer_signin');
        }
        if (!file_exists(APPPATH . 'views/profilepage/user_profile.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        //$data['profile'] = $this->profile_model->get_profile();
        $data['edit_profile'] = $this->profile_model->get_profile();
        $this->load->view('templates/admin_header');
        $this->load->view('profilepage/user_profile',$data);
        $this->load->view('templates/admin_footer');
    }
    public function user_booking()
    {
        if ($this->session->tempdata('customer') !== 'yes') {
            redirect('customer_signin');
        }
        if (!file_exists(APPPATH . 'views/profilepage/booking.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['booking'] = $this->profile_model->get_booking();
        $this->load->view('templates/admin_header');
        $this->load->view('profilepage/booking',$data);
        $this->load->view('templates/admin_footer');
    }
    public function get_active_ticket()
    {
        if ($this->session->tempdata('customer') !== 'yes') {
            redirect('customer_signin');
        }
        if (!file_exists(APPPATH . 'views/profilepage/booking.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['active_booking'] = $this->profile_model->get_active_booking();
        $this->load->view('templates/admin_header');
        $this->load->view('profilepage/booking',$data);
        $this->load->view('templates/admin_footer');
    }
    public function cancel_ticket($id)
    {
        if ($this->session->tempdata('customer') !== 'yes') {
            redirect('customer_signin');
        }
        
        if($this->profile_model->cancel_ticket($id)){
$this->user_booking();
        }
        else{
            show_404();
        }
        
    }
    public function update_profile()
    {
        if ($this->session->tempdata('customer') !== 'yes') {
            redirect('customer_signin');
        }
       
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|numeric|min_length[10]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique');
        $this->form_validation->set_rules('password', 'pasword', 'trim|required|min_length[8]|callback_check_Password');
        
        if ($this->form_validation->run() === FALSE) {
            $this->user_profile();
        } else {



            $this->profile_model->update_profile();
            redirect('user_profile');
        }
    }
    public function delete_profile()
    {
        if ($this->session->tempdata('customer') !== 'yes') {
            redirect('customer_signin');
        }

        $this->profile_model->delete_profile();
        redirect('user_profile');
    }
    public function check_Password($password)
    {
        if ($this->session->tempdata('customer') !== 'yes') {
            redirect('customer_signin');
        }
        $this->form_validation->set_message('check_Password', 'the password is incorect please try agin');

        $password = md5($this->input->post('password'));

        if ($this->profile_model->check_Password($password)) {
            return true;
        } else {
            return false;
        }
    }
}
