<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login/authenticate_login');
        }
        $this->load->library('pdf');
    }
    //index function
    public function index()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/dashboard.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        // $data['chart_data'] = $this->admin_model->dashbord_chart();
        $data['totalBooking'] = $this->admin_model->totalBooking();
        $data['countCustomer'] = $this->admin_model->countCustomer();
        $data['countUser'] = $this->admin_model->countUser();
        $this->load->view('templates/header');
        $this->load->view('adminpages/dashboard', $data);
        $this->load->view('templates/footer');
    } //end of index 


    //rating function
    public function ratings()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        if (!file_exists(APPPATH . 'views/adminpages/rating.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $data['rating'] = $this->admin_model->search_rating();

            $this->load->view('templates/header');
            $this->load->view('adminpages/rating', $data);
            $this->load->view('templates/footer');
        } else {

            $data['rating'] = $this->admin_model->get_rating();

            $this->load->view('templates/header');
            $this->load->view('adminpages/rating', $data);
            $this->load->view('templates/footer');
        }
    } //end of rating
    //add rating function
    public function add_rating()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $this->form_validation->set_rules('rating', 'rating', 'required|callback_check_rating_exists');
        $this->form_validation->set_rules('description', 'description', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['rating'] = $this->admin_model->get_rating();
            $this->load->view('templates/header');
            $this->load->view('adminpages/rating', $data);
            $this->load->view('templates/footer');
        } else {

            $this->admin_model->add_rating();
            redirect('admin/ratings');
        }
    } //end of add rating

    //edit ratting function
    public function edit_rating($id)
    {

        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $data['items'] = $this->admin_model->get_rating($id);

        if (empty($data['items'])) {
            show_404();
        }

        $data['title'] = 'Edit rating';

        $this->load->view('templates/header', $data);
        $this->load->view('adminpages/edit_rating', $data);
        $this->load->view('templates/footer');
    } //end of eddit rating

    //update rating function
    public function update_rating()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->admin_model->update_rating();
        redirect('admin/ratings');
    } //end of update rating

    //delete rating function
    public function delete_rating($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->admin_model->delete_rating($id);
        redirect('admin/ratings');
    }

    //check rating exist function
    public function check_rating_exists($rating)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_message('check_rating_exists', 'The rating you are tryng to add is alredy inserted');

        if ($this->admin_model->check_rating_exists($rating)) {
            return true;
        } else {
            return false;
        }
    } //end of check rating exists function


    public function movies()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/movies.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $data['movie'] = $this->admin_model->search_movie();

            $this->load->view('templates/header');
            $this->load->view('adminpages/movies', $data);
            $this->load->view('templates/footer');
        } else {

            $data['movie'] = $this->admin_model->get_movie();

            $this->load->view('templates/header');
            $this->load->view('adminpages/movies', $data);
            $this->load->view('templates/footer');
        }
    }

    
    public function add_movie()
    {

        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $this->form_validation->set_rules('title', 'Title', 'required|callback_check_movie_exists');

        $this->form_validation->set_rules('rating_id', 'rating id', 'required');
        $this->form_validation->set_rules('trailor', 'trailor', 'required');
        $this->form_validation->set_rules('gener_id', 'gener id', 'required');
        $this->form_validation->set_rules('plot', 'plot', 'required');
        $this->form_validation->set_rules('runningtime', 'runningtime', 'required');
        $this->form_validation->set_rules('realsedate', 'realsedate', 'required');
        $this->form_validation->set_rules('language', 'language', 'required');
        $this->form_validation->set_rules('staring', 'staring', 'required');
        $this->form_validation->set_rules('mov_synopsis', 'SYNOPSIS', 'required');
        if (empty($_FILES['userfile']['name'])) {
            $this->form_validation->set_rules('userfile', 'Poster', 'required');
        }


        if ($this->form_validation->run() === FALSE) {

            $data['gener'] = $this->admin_model->get_gener();
            $data['rating'] = $this->admin_model->get_rating();

            $this->load->view('templates/header', $data);
            $this->load->view('adminpages/add_movie', $data);
            $this->load->view('templates/footer', $data);
        } else {

            $config['upload_path'] = './assets/poster/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                //$post_image = 'noimage.jpg';
                $this->load->view('templates/header');
                $this->load->view('adminpages/add_movie', $error);
                $this->load->view('templates/footer');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
                $this->image_resize('./assets/poster/'.$post_image, 255);
            }

            $this->admin_model->add_movie($post_image);
            redirect('admin/movies');
        }
    }

    //resize image resize functions
    public function image_resize($source, $width)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = $source;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = $width;
        

        $this->load->library('image_lib', $config);

        $this->image_lib->resize();
        $this->image_lib->clear();
    }//end of image resis

    public function edit_movie($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $data['records'] = $this->admin_model->getMovieRecord($id);

        if (empty($data['records'])) {
            show_404();
        }
        $data['gener'] = $this->admin_model->get_gener();
        $data['rating'] = $this->admin_model->get_rating();

        $this->load->view('templates/header', $data);
        $this->load->view('adminpages/edit_movie', $data);
        $this->load->view('templates/footer');
    }
    public function update_movie($id)
    {

        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $this->form_validation->set_rules('title', 'title', 'required');

        $this->form_validation->set_rules('rating_id', 'rating id', 'required');
        $this->form_validation->set_rules('trailor', 'trailor', 'required');
        $this->form_validation->set_rules('gener_id', 'gener id', 'required');
        $this->form_validation->set_rules('plot', 'plot', 'required');
        $this->form_validation->set_rules('runningtime', 'running time', 'required');
        $this->form_validation->set_rules('realsedate', 'realse date', 'required');
        $this->form_validation->set_rules('language', 'language', 'required');
        $this->form_validation->set_rules('staring', 'staring', 'required');
        $this->form_validation->set_rules('mov_synopsis', 'Synopsis', 'required');



        if ($this->form_validation->run() === FALSE) {
            $this->edit_movie($id);
        } else {

            $config['upload_path'] = './assets/poster';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['max_width'] = '5000';
            $config['max_height'] = '5000';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('templates/header');
                $this->load->view('adminpages/edit_movie', $error);
                $this->load->view('templates/footer');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }

            $this->admin_model->update_movie($post_image, $id);
            redirect('admin/movies');
        }
    }
    public function delete_movie($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $this->admin_model->deleteMovie($id);
        redirect('admin/movies');
    }
    public function check_movie_exists($title)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_message('check_movie_exists', 'The movie you are tryng to add is alredy inserted');

        if ($this->admin_model->check_movie_exists($title)) {
            return true;
        } else {
            return false;
        }
    } //end of check rating exists function

    //cinemas function
    public function cinemas()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/cinema.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $cinema = $this->admin_model->search_cinema();

            $this->load->view('templates/header');
            $this->load->view('adminpages/cinema', ['cinema' => $cinema]);
            $this->load->view('templates/footer');
        } else {

            $cinema = $this->admin_model->get_cinema();

            $this->load->view('templates/header');
            $this->load->view('adminpages/cinema', ['cinema' => $cinema]);
            $this->load->view('templates/footer');
        }
    } //end of cinemas
    //add cinema function

    public function add_cinema()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_rules('cinema_name', 'Cinema Name', 'required|callback_check_cinema_exists');
        if ($this->form_validation->run() === FALSE) {
            /* $query = $this->db->get("cinema");
			$data['cinema'] = $query->result(); */
            $data['cinema']    = $this->admin_model->get_cinema();
            $this->load->view('templates/header');
            $this->load->view('adminpages/cinema', $data);
            $this->load->view('templates/footer');
        } else {

            $this->admin_model->add_cinema();
            redirect('admin/cinemas');
        }
    } //end of add cinema

    //edit cinema
    public function edit_cinema($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $data['items'] = $this->admin_model->get_cinema($id);

        if (empty($data['items'])) {
            show_404();
        }

        $data['title'] = 'Edit Cinema';

        $this->load->view('templates/header', $data);
        $this->load->view('adminpages/edit_cinema', $data);
        $this->load->view('templates/footer');
    } //end of edit cinema

    //update cinema function
    public function update_cinema()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->admin_model->update_cinema();
        redirect('admin/cinemas');
    }
    //delete cinema function
    public function delete_cinema($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->admin_model->delete_cinema($id);
        redirect('admin/cinemas');
    } //end of delete cinema
    //check cinema name existst
    public function check_cinema_exists($cinema)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_message('check_cinema_exists', 'The cinema you are tryng to add is alredy inserted');

        if ($this->admin_model->check_cinema_exists($cinema)) {
            return true;
        } else {
            return false;
        }
    } //end of check cinema exists

    //geners function
    public function geners()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/gener.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $data['gener'] = $this->admin_model->search_gener();

            $this->load->view('templates/header');
            $this->load->view('adminpages/gener', $data);
            $this->load->view('templates/footer');
        } else {

            $gener = $this->admin_model->get_gener();

            $this->load->view('templates/header');
            $this->load->view('adminpages/gener', ['gener' => $gener]);
            $this->load->view('templates/footer');
        }
    } //end of geners

    //add gener function
    public function add_gener()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $this->form_validation->set_rules('gener', 'Gener Name', 'required|callback_check_gener_exists');

        if ($this->form_validation->run() === FALSE) {

            $data['gener']    = $this->admin_model->get_gener();
            $this->load->view('templates/header');
            $this->load->view('adminpages/gener', $data);
            $this->load->view('templates/footer');
        } else {

            $this->admin_model->add_gener();
            redirect('admin/geners');
        }
    } //end of add gener

    //edit Gener function
    public function edit_gener($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $data['items'] = $this->admin_model->get_gener($id);

        if (empty($data['items'])) {
            show_404();
        }

        $data['title'] = 'Edit Gener';

        $this->load->view('templates/header', $data);
        $this->load->view('adminpages/edit_gener', $data);
        $this->load->view('templates/footer');
    } //end of edit gener

    //pdate gener function
    public function update_gener()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->admin_model->update_gener();
        redirect('admin/geners');
    }
    //delete gener function
    public function delete_gener($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->admin_model->delete_gener($id);
        redirect('admin/geners');
    } //end of delete cinema
    //check gener existes function
    public function check_gener_exists($gener)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_message('check_gener_exists', 'The gener you are tryng to add is alredy inserted');

        if ($this->admin_model->check_gener_exists($gener)) {
            return true;
        } else {
            return false;
        }
    } //end of check gener exists 

    //showtime function
    public function showtime()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/showtime.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $data['rating'] = $this->admin_model->search_rating();
            $data['showtime'] = $this->admin_model->search_showtime();
            $data['cinema'] = $this->admin_model->get_cinema();
            $data['movie'] = $this->admin_model->get_movie();

            $this->load->view('templates/header');
            $this->load->view('adminpages/showtime', $data);
            $this->load->view('templates/footer');
        } else {

            $data['rating'] = $this->admin_model->get_rating();
            $data['showtime'] = $this->admin_model->get_showtime();
            $data['cinema'] = $this->admin_model->get_cinema();
            $data['movie'] = $this->admin_model->get_movie();

            $this->load->view('templates/header');
            $this->load->view('adminpages/showtime', $data);
            $this->load->view('templates/footer');
        }
    }
    public function add_showtime()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_rules('movie', 'movie', 'required');
        $this->form_validation->set_rules('cinema', 'cinema', 'required');
        $this->form_validation->set_rules('date', 'date', 'required');
        $this->form_validation->set_rules('time', 'time', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');



        if ($this->form_validation->run() === FALSE) {

            $this->showtime();
        } else {


            $this->admin_model->add_showtime();
            redirect('admin/showtime');
        }
    }
    public function edit_showtime($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $data['records'] = $this->admin_model->getShowRecord($id);

        if (empty($data['records'])) {
            show_404();
        }
        $data['cinema'] = $this->admin_model->get_cinema();
        $data['movie'] = $this->admin_model->get_movie();

        $this->load->view('templates/header', $data);
        $this->load->view('adminpages/edit_showtime', $data);
        $this->load->view('templates/footer');
    }
    public function update_showtime($id)
    {

        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_rules('movie', 'movie', 'required');
        $this->form_validation->set_rules('cinema', 'cinema', 'required');
        $this->form_validation->set_rules('date', 'date', 'required');
        $this->form_validation->set_rules('time', 'time', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->edit_showtime($id);
        } else {



            $this->admin_model->update_showtime($id);
            redirect('admin/showtime');
        }
    }
    public function delete_showtime($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $this->admin_model->deleteShowtime($id);
        redirect('admin/showtime');
    }

    //users function
    public function users()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/users.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $data['user'] = $this->admin_model->search_users();

            $this->load->view('templates/header');
            $this->load->view('adminpages/users', $data);
            $this->load->view('templates/footer');
        } else {

            $data['user'] = $this->admin_model->get_user();

            $this->load->view('templates/header');
            $this->load->view('adminpages/users', $data);
            $this->load->view('templates/footer');
        }
    } //end of users
    //add user function
    public function Register()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm password', 'matches[password]');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header');
            $this->load->view('adminpages/add_user');
            $this->load->view('templates/footer');
        } else {
            $enc_password = md5($this->input->post('password'));
            $this->admin_model->register($enc_password);

            $this->session->set_flashdata('user_registerd', 'User is registerd and can login');

            redirect('admin/users');
        }
    } //end of add user
    public function edit_user($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $data['items'] = $this->admin_model->get_user($id);

        if (empty($data['items'])) {
            show_404();
        }

        $data['title'] = 'Edit User';

        $this->load->view('templates/header', $data);
        $this->load->view('adminpages/edit_user', $data);
        $this->load->view('templates/footer');
    } //end of edit gener

    //pdate gener function
    public function update_user()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_rules('password', 'password', 'required|callback_check_password_exists');
        $this->form_validation->set_rules('password2', 'Confirm password', 'matches[password]');
        if ($this->form_validation->run() === false) {
            $this->edit_user($this->input->post('id'));
        } else {
            $this->admin_model->update_user();
            redirect('admin/users');
        }
    }
    public function delete_user($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $this->admin_model->deleteUser($id);
        redirect('admin/users');
    }
    public function check_password_exists($password)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $enc_password = md5($password);
        $this->form_validation->set_message('check_password_exists', 'incorect password');
        if ($this->admin_model->check_password_exists($enc_password)) {
            return true;
        } else {
            return false;
        }
    } //end of check username exists

    //check user name existes
    public function check_username_exists($username)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_message('check_username_exists', 'That user name is taken. please choose a different one');
        if ($this->admin_model->check_username_exists($username)) {
            return true;
        } else {
            return false;
        }
    } //end of check username exists

    //check user name existes
    public function check_email_exists($email)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_message('check_email_exists', 'That email is taken. please use a different one');
        if ($this->admin_model->check_email_exists($email)) {
            return true;
        } else {
            return false;
        }
    } //end of check username exists

    public function bookings()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/booking.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $data['booking'] = $this->admin_model->search_booking();

            $this->load->view('templates/header');
            $this->load->view('adminpages/booking', $data);
            $this->load->view('templates/footer');
        } else {

            $data['booking'] = $this->admin_model->get_booking();

            $this->load->view('templates/header');
            $this->load->view('adminpages/booking', $data);
            $this->load->view('templates/footer');
        }
    }
    public function customer()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/customer.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {

            $data['customer'] = $this->admin_model->search_customer();

            $this->load->view('templates/header');
            $this->load->view('adminpages/customer', $data);
            $this->load->view('templates/footer');
        } else {

            $data['booking'] = $this->admin_model->get_booking();
            $data['customer'] = $this->admin_model->get_customer();

            $this->load->view('templates/header');
            $this->load->view('adminpages/customer', $data);
            $this->load->view('templates/footer');
        }
    }
    public function add_customer()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|callback_check_phone');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('password', 'pasword', 'required');
        $this->form_validation->set_rules('password2', 'confirm pasword', 'required|matches[password]');




        if ($this->form_validation->run() === FALSE) {

            $this->load->view('templates/header');
            $this->load->view('adminpages/add_customer');
            $this->load->view('templates/footer');
        } else {


            $this->admin_model->add_customer();
            redirect('admin/customer');
        }
    }
    public function edit_customer($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $data['records'] = $this->admin_model->getCustomerRecord($id);

        if (empty($data['records'])) {
            show_404();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('adminpages/edit_customer', $data);
        $this->load->view('templates/footer');
    }
    public function update_customer($id)
    {

        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('password', 'Old pasword', 'required|callback_check_Password');
        $this->form_validation->set_rules('new_password', 'New pasword', 'required');
        $this->form_validation->set_rules('password2', 'confirm pasword', 'required|matches[new_password]');

        if ($this->form_validation->run() === FALSE) {
            $this->edit_customer($id);
        } else {



            $this->admin_model->update_customer($id);
            redirect('admin/customer');
        }
    }
    public function delete_customer($id)
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }

        $this->admin_model->deleteCustomer($id);
        redirect('admin/customer');
    }
    public function check_Password($password)
    {
        $this->form_validation->set_message('check_Password', 'the password is incorect please try agin');

        $password = sha1($this->input->post('password'));

        if ($this->admin_model->check_Password($password)) {
            return true;
        } else {
            return false;
        }
    }
    public function check_email($email)
    {
        $this->form_validation->set_message('check_email', 'That email is taken. please choose a difrent one');


        if ($this->admin_model->check_email($email)) {
            return true;
        } else {
            return false;
        }
    }

    public function check_phone($phone)
    {
        $this->form_validation->set_message('check_phone', 'please use differnt phone this is used before');

        if ($this->admin_model->check_phone($phone)) {
            return true;
        } else {
            return false;
        }
    }
    public function reports()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/report.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->load->view('templates/header');
        $this->load->view('adminpages/report');
        $this->load->view('templates/footer');
    }

    public function showtime_report()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/showtime_report.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        if (isset($_POST['Search'])) {
            $this->load->model('admin_model');
            $data['showtime'] = $this->admin_model->search_showtime();

            $this->load->view('templates/header');
            $this->load->view('adminpages/showtime_report', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('admin_model');
            $data['showtime'] = $this->admin_model->get_showtime();

            $this->load->view('templates/header');
            $this->load->view('adminpages/showtime_report', $data);
            $this->load->view('templates/footer');
        }
    }
    public function showtime_pdfdetails()
    {

        $date = date('y-m-d');
        //$showtime_id = $this->uri->segment(3);
        $html_content = '<h3 align="center">Showtime</h3>';
        $html_content .= $this->admin_model->fetch_showtime_details();
        $this->pdf->loadHtml($html_content);
        $this->pdf->render();
        $this->pdf->stream("" . $date . ".pdf", array("Attachment" => 0));
    }
    public function daily_showtime()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/showtime_report.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->model('admin_model');
        $data['daily'] = $this->admin_model->daily_showtime();

        $this->load->view('templates/header');
        $this->load->view('adminpages/showtime_report', $data);
        $this->load->view('templates/footer');
    }

    public function daily_showtime_pdfdetails()
    {
        $date = date('y-m-d');
        //$showtime_id = $this->uri->segment(3);
        $html_content = '<h3 align="center">Todays Showtime</h3>';
        $html_content .= $this->admin_model->fetch_daily_showtime_details();
        $this->pdf->loadHtml($html_content);
        $this->pdf->render();
        $this->pdf->stream("" . $date . ".pdf", array("Attachment" => 0));
    }

    public function weekly_showtime()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/showtime_report.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->model('admin_model');
        $data['weekly'] = $this->admin_model->weekly_showtime();

        $this->load->view('templates/header');
        $this->load->view('adminpages/showtime_report', $data);
        $this->load->view('templates/footer');
    }

    public function weekly_showtime_pdfdetails()
    {
        $date = date('y-m-d');
        //$showtime_id = $this->uri->segment(3);
        $html_content = '<h3 align="center">Weekly Showtime</h3>';
        $html_content .= $this->admin_model->fetch_weekly_showtime_details();
        $this->pdf->loadHtml($html_content);
        $this->pdf->render();
        $this->pdf->stream("" . $date . ".pdf", array("Attachment" => 0));
    }

    public function monthly_showtime()
    {
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login/authenticate_login');
        }
        if (!file_exists(APPPATH . 'views/adminpages/showtime_report.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->model('admin_model');
        $data['monthly'] = $this->admin_model->monthly_showtime();

        $this->load->view('templates/header');
        $this->load->view('adminpages/showtime_report', $data);
        $this->load->view('templates/footer');
    }

    public function monthly_showtime_pdfdetails()
    {
        $date = date('y-m-d');
        //$showtime_id = $this->uri->segment(3);
        $html_content = '<h3 align="center">monthly Showtime</h3>';
        $html_content .= $this->admin_model->fetch_monthly_showtime_details();
        $this->pdf->loadHtml($html_content);
        $this->pdf->render();
        $this->pdf->stream("" . $date . ".pdf", array("Attachment" => 0));
    }
    public function bar_chart()
    {

        $query =  $this->db->query("SELECT COUNT(user_id) as count,
        MONTHNAME(created_at) as month_name FROM user
        WHERE YEAR(created_at) = '" . date('Y') . "'

        GROUP BY YEAR(created_at),MONTH(created_at)");

        $record = $query->result();
        $data = [];

        foreach ($record as $row) {
            $data['label'][] = $row->month_name;
            $data['data'][] = (int) $row->count;
        }
        $data['chart_data'] = json_encode($data);

        $this->load->view('templates/header');
        $this->load->view('adminpages/bar_chart', $data);
        $this->load->view('templates/footer');
    }
}
