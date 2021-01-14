
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login/authenticate_login');
        }
    }
    public function index()
    {
        if (!file_exists(APPPATH . 'views/profilepage/profile.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('profilepage/profile');
        $this->load->view('templates/footer');
    }
}
