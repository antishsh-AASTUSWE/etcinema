<?php
class dashbord_model extends CI_Model
{


    public function add_movie($post_image)
    {

        $data = array(
            'mov_name' => $this->input->post('title'),
            'mov_poster' => $post_image,
            'mov_ratting' => $this->input->post('rating'),
            'mov_trailor' => $this->input->post('trailor'),
            'mov_gener' => $this->input->post('gener'),
            'mov_plot' => $this->input->post('plot'),
            'mov_running_time' => $this->input->post('runningtime'),
            'mov_realse_date' => $this->input->post('realsedate'),
            'mov_language' => $this->input->post('language'),

            'mov_starring' => $this->input->post('staring'),
            'mov_subtitle' => $this->input->post('subtitle')
        );


        return $this->db->insert('movie', $data);
    }

    //Get Geners function

    public function get_gener()
    {
        $query = $this->db->get('geners');
        return $query->result_array();
    }


    //Get Ratting function

    public function get_retting()
    {
        $query =  $this->db->get('ratings');
        return $query->result_array();
    }
}
