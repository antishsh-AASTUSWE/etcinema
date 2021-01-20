
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->tempdata('logged_in') !== TRUE) {
            redirect('login/authenticate_login');
        }
    }
    public function index()
    {
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
        
        if($this->profile_model->cancel_ticket($id)){
$this->user_booking();
        }
        else{
            show_404();
        }
        
    }
    public function update_profile()
    {

       
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('old_password', 'Old pasword', 'required|callback_check_Password');
        $this->form_validation->set_rules('new_password', 'New pasword', 'required');
        $this->form_validation->set_rules('password2', 'confirm pasword', 'required|matches[new_password]');

        if ($this->form_validation->run() === FALSE) {
            $this->user_profile();
        } else {



            $this->profile_model->update_profile();
            redirect('user_profile');
        }
    }
    public function delete_profile()
    {
        

        $this->profile_model->delete_profile();
        redirect('user_profile');
    }
    public function check_Password($old_password)
    {
        $this->form_validation->set_message('check_Password', 'the password is incorect please try agin');

        $old_password = md5($this->input->post('password'));

        if ($this->profile_model->check_Password($old_password)) {
            return true;
        } else {
            return false;
        }
    }
}
