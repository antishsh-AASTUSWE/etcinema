<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function index() 
    {
            if ( ! file_exists(APPPATH.'views/userPages/index.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            
            $data['movie'] = $this->user_model->getMovie();
            $data['nav'] = $this->user_model->getNav();
            $data['cinema'] = $this->user_model->getCinema();
     
             $this->load->view('userPagesTemplates/header',$data);
             $this->load->view('userPages/index',$data);
             $this->load->view('userPagesTemplates/footer');
    }
    public function openingThisWeek(){
        if ( ! file_exists(APPPATH.'views/userPages/openingThisWeek.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            
           $data['movie'] = $this->user_model->getMovie();
           $data['nav'] = $this->user_model->getNav();
    
            $this->load->view('userPagesTemplates/header',$data);
            $this->load->view('userPages/index',$data);
            $this->load->view('userPagesTemplates/footer');
    }
    public function comingSoon(){
        if ( ! file_exists(APPPATH.'views/userPages/comingSoon.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            
           $data['movie'] = $this->user_model->getMovie();
           $data['nav'] = $this->user_model->getNav();
           $data['cinema'] = $this->user_model->getCinema();
    
            $this->load->view('userPagesTemplates/header',$data);
            $this->load->view('userPages/index',$data);
            $this->load->view('userPagesTemplates/footer');
    }
    public function movies(){
        if ( ! file_exists(APPPATH.'views/userPages/movies.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            
           $data['movie'] = $this->user_model->getMovie();
           $data['nav'] = $this->user_model->getNav();
    
            $this->load->view('userPagesTemplates/header',$data);
            $this->load->view('userPages/index',$data);
            $this->load->view('userPagesTemplates/footer');
    }
    public function contact(){
        if ( ! file_exists(APPPATH.'views/userPages/contact.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            
           $data['movie'] = $this->user_model->getMovie();
           $data['nav'] = $this->user_model->getNav();
    
            $this->load->view('userPagesTemplates/header',$data);
            $this->load->view('userPages/index',$data);
            $this->load->view('userPagesTemplates/footer');
    }
    public function cinemaLocation(){
        if ( ! file_exists(APPPATH.'views/userPages/cinemaLocation.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            
           $data['movie'] = $this->user_model->getMovie();
           $data['nav'] = $this->user_model->getNav();
    
            $this->load->view('userPagesTemplates/header',$data);
            $this->load->view('userPages/index',$data);
            $this->load->view('userPagesTemplates/footer');
    }
    public function nowPlaying(){
        if ( ! file_exists(APPPATH.'views/userPages/nowPlaying.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            
           $data['movie'] = $this->user_model->getMovie();
           $data['nav'] = $this->user_model->getNav();
    
            $this->load->view('userPagesTemplates/header',$data);
            $this->load->view('userPages/index',$data);
            $this->load->view('userPagesTemplates/footer');
    }
    public function showtime(){
        if ( ! file_exists(APPPATH.'views/userPages/showtime.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            
           $data['movie'] = $this->user_model->getMovie();
           $data['nav'] = $this->user_model->getNav();
    
            $this->load->view('userPagesTemplates/header',$data);
            $this->load->view('userPages/index',$data);
            $this->load->view('userPagesTemplates/footer');
    }
    public function showFilter(){

        $this->form_validation->set_rules('cinema', 'Cinema','required');
        $this->form_validation->set_rules('movie', 'Movie','required');
        
    if($this->form_validation->run() === FALSE)
    
    {
    $this->index();

    }else{
        
           
            $data['showtime']=$this->user_model->showFilter();
            $data['nav'] = $this->user_model->getNav();
            $this->load->view('userPagesTemplates/header',$data);
            $this->load->view('userPages/showtime',$data);
            $this->load->view('userPagesTemplates/footer');
            
            //return redirect('admin/add_booking');
             
        }
    }
}
