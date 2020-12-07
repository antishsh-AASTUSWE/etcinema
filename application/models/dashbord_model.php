<?php
class dashbord_model extends CI_Model
{


    public function add_movie()
    {
        $id = array(
            'movie_id' => $this->input->post('id')
        );
        $data = array(
            'mov_name' => $this->input->post('name'),
            'mov_poster' => $this->input->post('poster'),
            'mov_ratting' => $this->input->post('rating'),
            'mov_trailor' => $this->input->post('trailor'),
            'mov_gener' => $this->input->post('gener'),
            'mov_plot' => $this->input->post('plot'),
            'mov_running_time' => $this->input->post('running_time'),
            'mov_realse_date' => $this->input->post('realse_date'),
            'mov_language' => $this->input->post('language'),

            'mov_starring' => $this->input->post('staring'),
            'mov_subtitle' => $this->input->post('subtitle')
        );



        $query = $this->db->get_where('movie', array('movie_id' => $id['movie_id']));

        if (empty($query->row_array())) {
            /* insert */
            return $this->db->insert('movie', $data);
        } else {
            $this->db->where('movie_id', $id['movie_id']);
            return $this->db->update('movie', $data);
        }
    }

}
