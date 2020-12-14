<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Create extends CI_Controller
{

	


	//Add Movie function

	public function add_movie()
	{

		if (!file_exists(APPPATH . 'views/pages/add_movie.php')) {
            show_404();
        }

		$this->form_validation->set_rules('title', 'title', 'required');

		$this->form_validation->set_rules('rating', 'rating id', 'required');
		$this->form_validation->set_rules('trailor', 'trailor', 'required');
		$this->form_validation->set_rules('gener', 'gener id', 'required');
		$this->form_validation->set_rules('plot', 'plot', 'required');
		$this->form_validation->set_rules('runningtime', 'runningtime', 'required');
		$this->form_validation->set_rules('realsedate', 'realsedate', 'required');
		$this->form_validation->set_rules('language', 'language', 'required');
		$this->form_validation->set_rules('staring', 'staring', 'required');
		$this->form_validation->set_rules('subtitle', 'subtitle', 'required');



		if ($this->form_validation->run() === FALSE) {
			$data['gener'] = $this->dashbord_model->get_gener();
			$data['rating'] = $this->dashbord_model->get_retting();

			$this->load->view('templates/header', $data);
			$this->load->view('pages/add_movie', $data);
			$this->load->view('templates/footer', $data);
		} else {

			$config['upload_path'] = './assets/poster';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '5000';
			$config['max_height'] = '5000';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload()) {
				//$error = array('error' => $this->upload->display_errors());
				//$post_image = 'noimage.jpg';
				print_r($this->upload->do_upload());
				$this->load->view('templates/header');
				$this->load->view('pages/add_movie');
				$this->load->view('templates/footer');
			} else {
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['userfile']['name'];
			}

			$this->dashbord_model->add_movie($post_image);
			
		}
	}
}
