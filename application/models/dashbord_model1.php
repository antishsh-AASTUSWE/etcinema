<?php
class admin_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
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

    public function add_showtime()
    {
        $data1 = array(
            'mov_id' => $this->input->post('movie'),
            'cinema_id' => $this->input->post('cinema')
        );
        $id = array('show_id' => $this->input->post('show_id'));

        $select = $this->db->select('movie_id')->where('mov_name', $data1['mov_id'])->get('movie');

        foreach ($select->result() as $m_row) {
            $select2 = $this->db->select('cinema_id')->where('cinema_name', $data1['cinema_id'])->get('cinema');

            foreach ($select2->result() as $c_row) {
                $data = array(

                    'show_date' => $this->input->post('date'),
                    'show_time' => $this->input->post('time'),
                    'Price' => $this->input->post('price'),
                    'mov_id' => $m_row->movie_id,
                    'cinema_id' => $c_row->cinema_id
                );
            }

            $query = $this->db->get_where('showtime', array('show_id' => $id['show_id']));

            if (empty($query->row_array())) {
                /* insert */
                return $this->db->insert('showtime', $data);
            } else {
                $this->db->where('show_id', $id['show_id']);
                return $this->db->update('showtime', $data);
            }
        }
    }








    public function check_movie_exists($name)
    {
        $query = $this->db->get_where('movie', array('mov_name' => $name));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }


    public function add_gener()
    {
        $id = array(
            'gener_id' => $this->input->post('id')
        );
        $data = array(
            'gener' => $this->input->post('gener')

        );

        $query = $this->db->get_where('geners', array('gener_id' => $id['gener_id']));

        if (empty($query->row_array())) {
            /* insert */
            return $this->db->insert('geners', $data);
        } else {
            $this->db->where('gener_id', $id['gener_id']);
            return $this->db->update('geners', $data);
        }
    }
    public function check_gener_exists($gener)
    {
        $query = $this->db->get_where('geners', array('gener' => $gener));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }


    public function add_rating()
    {
        $id = array(
            'id' => $this->input->post('id')
        );
        $data = array(
            'rating' => $this->input->post('rating'),
            'description' => $this->input->post('description')
        );

        $query = $this->db->get_where('ratings', array('id' => $id['id']));

        if (empty($query->row_array())) {
            /* insert */
            return $this->db->insert('ratings', $data);
        } else {
            $this->db->where('id', $id['id']);
            return $this->db->update('ratings', $data);
        }
    }

    public function check_rating_exists($rating)
    {
        $query = $this->db->get_where('ratings', array('rating' => $rating));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }


    public function add_cinema()
    {
        $id = array(
            'id' => $this->input->post('id')
        );
        $data = array(
            'cinema_name' => $this->input->post('cinema_name')

        );

        $query = $this->db->get_where('cinema', array('cinema_id' => $id['id']));

        if (empty($query->row_array())) {
            /* insert */
            return $this->db->insert('cinema', $data);
        } else {
            $this->db->where('cinema_id', $id['id']);
            return $this->db->update('cinema', $data);
        }
    }

    public function check_cinema_exists($cinema)
    {
        $query = $this->db->get_where('cinema', array('cinema_name' => $cinema));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}
