<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('dashbord_model');
    }

	public function index($page = 'dashboard')
{
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
}

public function showtime()
{
        if ( ! file_exists(APPPATH.'views/pages/showtime.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
		if(isset($_POST['Search'])){

            $data= array(
                'Search'=>$this->input->post('Search'));
         $query = $this->db->like('show_id', $data['Search'])
                ->or_like('mov_id', $data['Search'])
                ->or_like('cinema_id',  $data['Search'])
                ->or_like('show_date',  $data['Search'])
                ->or_like('show_time',  $data['Search'])
                ->or_like('Price',  $data['Search'])
                  ->get('showtime');

        $data['showtime'] = $query->result();

        $query = $this->db->get("movie");  
        $data['movies'] = $query->result();

        $query = $this->db->get("cinema");  
        $data['cinema'] = $query->result();

        
            
		$this->load->view('templates/header');
        $this->load->view('pages/showtime.php',$data);
        $this->load->view('templates/footer');
    
    
           }
           else{
        $query = $this->db->get("movie");  
        $data['movies'] = $query->result();

        $query = $this->db->get("cinema");  
        $data['cinema'] = $query->result();

        $query = $this->db->get("showtime");  
        $data['showtime'] = $query->result();
        

        $this->load->view('templates/header');
        $this->load->view('pages/showtime.php',$data);
        $this->load->view('templates/footer');
}
}
public function add_showtime(){
	$this->form_validation->set_rules('movie', 'movie', 'required');
	$this->form_validation->set_rules('cinema', 'cinema', 'required');
	$this->form_validation->set_rules('date', 'date','required');
	$this->form_validation->set_rules('time', 'time','required');
	$this->form_validation->set_rules('price', 'price','required');

	if($this->form_validation->run() === FALSE)
	{
		$this->showtime();
	}else{
		
		$this->dashbord_model->add_showtime();
		$this->showtime();
	}
}

}
