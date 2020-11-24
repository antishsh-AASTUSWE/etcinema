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
 
		$this->db->select('*');
		$this->db->from('showtime');
		$this->db->join('movie', 'showtime.mov_id=movie.movie_id');
		$this->db->join('cinema', 'showtime.cinema_id=cinema.cinema_id');
		$this->db->like('show_id', $data['Search'])
		->or_like('mov_name', $data['Search'])
		->or_like('cinema_name',  $data['Search'])
		->or_like('show_date',  $data['Search'])
		->or_like('show_time',  $data['Search'])
		->or_like('Price',  $data['Search']);
		$this->db->order_by('show_id', 'ASC');
		$query = $this->db->get();
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


		$this->db->select('*');
		$this->db->from('showtime');
		$this->db->join('movie', 'showtime.mov_id=movie.movie_id');
		$this->db->join('cinema', 'showtime.cinema_id=cinema.cinema_id');
		$this->db->order_by('show_id', 'ASC');
		$query = $this->db->get();

        
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

public function delete_showtime($test){
        
	$str = $test;


	$this->db->delete('showtime', array('show_id' => $str)); 
	
	$this->showtime();
}
public function edit_showtime($test){
        
	$str = $test;

		$this->db->select('*');
		$this->db->from('showtime');
		$this->db->join('movie','showtime.mov_id=movie.movie_id');
		$this->db->join('cinema','showtime.cinema_id=cinema.cinema_id');
		$this->db->where('show_id', $str);
		$query = $this->db->get();
	$data['records'] = $query->result_array();
	
	$query = $this->db->get("movie");  
	$data['movies'] = $query->result();

	$query = $this->db->get("cinema");  
	$data['cinema'] = $query->result();

		$this->db->select('*');
		$this->db->from('showtime');
		$this->db->join('movie', 'showtime.mov_id=movie.movie_id');
		$this->db->join('cinema', 'showtime.cinema_id=cinema.cinema_id');
		$this->db->order_by('show_id', 'ASC');
		$query = $this->db->get();
   		$data['showtime'] = $query->result();

		$this->load->view('templates/header');
        $this->load->view('pages/showtime.php',$data);
        $this->load->view('templates/footer');
}

}
