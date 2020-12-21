<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashbord_model extends CI_Model
{


    public function add_movie($post_image)
    {

        $data = array(
            'mov_name' => $this->input->post('title'),
            'mov_poster' => $post_image,
            'mov_ratting' => $this->input->post('rating_id'),
            'mov_trailor' => $this->input->post('trailor'),
            'mov_gener' => $this->input->post('gener_id'),
            'mov_plot' => $this->input->post('plot'),
            'mov_running_time' => $this->input->post('runningtime'),
            'mov_realse_date' => $this->input->post('realsedate'),
            'mov_language' => $this->input->post('language'),

            'mov_starring' => $this->input->post('staring'),
            'mov_subtitle' => $this->input->post('subtitle')
        );


        return $this->db->insert('movie', $data);
    } //end of add movie

    //add cinema function
    public function add_cinema()
    {
        $data = array(
            'cinema_name' => $this->input->post('cinema_name')

        );

        return $this->db->insert('cinema', $data);
    } //end of add cinema

    //check cinema exist function

    public function check_cinema_exists($cinema)
    {
        $query = $this->db->get_where('cinema', array('cinema_name' => $cinema));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    } //end of check cinema


    //Get gener Function
    public function get_gener($id = false)
    {
        if ($id === false) {
            $query =  $this->db->get('geners');
            return $query->result_array();
        }
        $query = $this->db->get_where('geners', array('gener_id' => $id));
        return $query->row_array();
    } //end of gett gener


    //Get Ratting function

    public function get_rating($id = false)
    {
        if ($id === false) {
            $query =  $this->db->get('ratings');
            return $query->result_array();
        }
        $query = $this->db->get_where('ratings', array('rating_id' => $id));
        return $query->row_array();
    }


    //Get Cinema Function
    public function get_cinema($id = false)
    {
        if ($id === false) {
            $query =  $this->db->get('cinema');
            return $query->result_array();
        }
        $query = $this->db->get_where('cinema', array('cinema_id' => $id));
        return $query->row_array();
    } //end of gett cinema

    //update cinema function
    public function update_cinema()
    {
        $data = array(

            'cinema_name' => $this->input->post('cinema_name')
        );
        $this->db->where('cinema_id', $this->input->post('id'));
        return $this->db->update('cinema', $data);
    } //end of update cinema

    //delete cinema
    public function delete_cinema($id)
    {
        $this->db->where('cinema_id', $id);
        $this->db->delete('cinema');
        return true;
    }//end of delete cinema
    //add rating function
    public function add_rating()
    {

        $data = array(
            'rating' => $this->input->post('rating'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('ratings', $data);
    } //end of add rating

    //update rating function
    public function update_rating()
    {
        $data = array(

            'rating' => $this->input->post('rating'),
            'description' => $this->input->post('description')
        );
        $this->db->where('rating_id', $this->input->post('rating_id'));
        return $this->db->update('ratings', $data);
    } //end of update cinema

    //delete rating function
    public function delete_rating($id)
    {
        $this->db->where('rating_id', $id);
        $this->db->delete('ratings');
        return true;
    }
    //check reting exists function
    public function check_rating_exists($rating)
    {
        $query = $this->db->get_where('ratings', array('rating' => $rating));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    } //end of check rating exists

    //add gener function
    public function add_gener()
    {
        $data = array(
            'gener' => $this->input->post('gener')

        );

        return $this->db->insert('geners', $data);
    } //end of add gener

    //update gener function
    public function update_gener()
    {
        $data = array(
            'gener' => $this->input->post('gener')
        );
        $this->db->where('gener_id', $this->input->post('gener_id'));
        return $this->db->update('geners', $data);
    } //end of update gener

    //delete gener
    public function delete_gener($id)
    {
        $this->db->where('gener_id', $id);
        $this->db->delete('geners');
        return true;
    }//end of delete gener
    //check gener existes function
    public function check_gener_exists($gener)
    {
        $query = $this->db->get_where('geners', array('gener' => $gener));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    } //end of check gener exists

}
