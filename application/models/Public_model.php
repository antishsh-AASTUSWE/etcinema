
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Public_model extends CI_Model
{

    //login user function
    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('user');
        return $result;
    }
    //get movie function
    public function get_movie($id = false, $limit = false, $offset = false)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        if ($id === false) {
            $query = $this->db->get("movie");
            return $query->result_array();
        }
        $this->db->select('*');
        $this->db->from('movie');
        $this->db->join('geners', 'movie.mov_gener=gener_id');
        $this->db->join('ratings', 'movie.mov_ratting=rating_id');
        $this->db->where('movie_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    } //end of get movie
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
    } //end og get ratting

    //get showtime by movie id function
    public function get_showtime_bymovieid($id = false)
    {
        if ($id === false) {
            $this->db->select('*');
            $this->db->from('showtime');
            $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
            $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
            $query = $this->db->get();
            return $query->result_array();
        }
        $this->db->select('*');
        $this->db->from('showtime');
        $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
        $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
        $this->db->where('mov_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    } //end of get showtime by movie id

    //get showtime  function
    public function get_showtime($id = false)
    {
        if ($id === false) {
            $this->db->select('*');
            $this->db->from('showtime');
            $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
            $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
            $query = $this->db->get();
            return $query->result_array();
        }
        $this->db->select('*');
        $this->db->from('showtime');
        $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
        $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
        $this->db->where('show_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    } //end of get showtime 
    public function now_showing()
    {

        //$this->db->select('*');
        $this->db->select('DISTINCT(mov_id),movie_id,mov_poster,mov_name');
        //$this->db->distinct('mov_id');
        $this->db->from('showtime');
        $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
        $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
        $this->db->where('show_date >=', date('y-m-d'));
        $query = $this->db->get();
        return $query->result_array();
    } //end of get showtime 
    public function trending($id = false)
    {

        $query = $this->db->query(
            "SELECT showtime.mov_id,mov_name,movie_id,mov_poster
        ,mov_name,SUM(booking_info.price) as gross 
        FROM booking_info
        join showtime ON showtime.show_id=booking_info.show_id
        join movie ON movie.movie_id=showtime.mov_id
         
        GROUP BY mov_id ORDER by gross DESC"

        );
        return $query->result_array();


        /*  //$this->db->select('*');
            $this->db->select('DISTINCT(mov_id),movie_id,mov_poster,mov_name');
            //$this->db->distinct('mov_id');
            $this->db->from('showtime');
            $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
            $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
            $query = $this->db->get();
            return $query->result_array(); */
    } //end of get showtime 
    public function cooming_soon()
    {
        $this->db->select('movie_id,mov_poster,mov_name,mov_realse_date');
        //$this->db->distinct('mov_id');
        $this->db->from('movie');
        //$this->db->join('movie', 'movie.movie_id=showtime.mov_id');
        //$this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
        $this->db->where('mov_realse_date >', date('y-m-d'));
        $query = $this->db->get();
        return $query->result_array();
    } //end of get showtime 
    public function search_movie()
    {
        $data = array(
            'Search' => $this->input->post('search'),
            'cinema' => $this->input->post('cinema'),
            'date' => $this->input->post('date'),
            'gener' => $this->input->post('gener')
        );
        $this->db->select('*');
        $this->db->from('showtime');
        $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
        $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
        $this->db->join('geners', 'movie.mov_gener=geners.gener_id');
        $this->db->join('ratings', 'movie.mov_ratting=ratings.rating_id');
        $this->db->like('mov_name', $data['Search']);
        $this->db->like('show_date', $data['date']);
        $this->db->like('gener', $data['gener']);
        $this->db->like('cinema_name', $data['cinema']);
        $query = $this->db->get();

        /*    $query = $this->db->like('mov_name', $data['Search'])
        ->join('geners','movie.mov_gener=geners.gener_id')
        ->join('ratings','movie.mov_ratting=ratings.rating_id')
           ->get('movie'); */

        return $query->result_array();
    }

    public function get_seat($id)
    {
        $query = $this->db->get_where('seat_booked', array('show_id' => $id));
        //$query =  $this->db->get('seat_booked');
        return $query->result_array();
    } //end og get ratting
    public function get_seatRow($id = false)
    {
        if ($id === false) {
            $query =  $this->db->get('seat');
            return $query->row_array();
        }
        $query = $this->db->get_where('seat', array('seat_id' => $id));
        return $query->row_array();
    } //end og get ratting

    public function booking_send()
    {

        $query = $this->db->get_where('booking_info', array('user_id' => $this->session->userdata('user_id')));

        foreach ($query->result() as $row) {
            $booking_id = $row->booking_id;
        }
        $query2 = $this->db->get_where('user', array('user_id' => $this->session->userdata('user_id')));

        foreach ($query2->result() as $row) {
            $MessageTo = $row->phone;
        }

        $content = "Dear " . $this->session->userdata('username') . " your ETCINEMA booking code is--- 
        " . $booking_id;
        $data = array(
            'content' => $content,
            'MessageTo' => $MessageTo,
            'MessageFrom' => '0942205164'
        );
        return $this->db->insert('messageout', $data);
    }
    public function reserve_seat()
    {
        $row = $this->public_model->get_seatRow();
        if (isset($row)) {
            $t = 0;
            $t = $row['col'] * $row['row'];
        }

        for ($i = 1; $i < $row['row']; $i++) {
            for ($j = 1; $j < $row['col']; $j++) {

                if (isset($_POST["seat" . $i . '' . $j])) {
                    $data = array(
                        'seat' => $this->input->post("seat" . $i . '' . $j),
                        'show_id' => $this->input->post('show_id'),
                    );

                    $this->db->insert('seat_booked', $data);
                }
            }
        }
        //return $this->db->insert('seat_booked', $data);

    }
    public function book()
    {

        $data = array(
            'seats' =>  $this->input->post('seats'),
            'user_id' => $this->input->post('user_id'),
            'price' => $this->input->post('price'),
            'show_id' => $this->input->post('show_id'),
            'paid_bank' => $this->input->post('bank')

        );

        $this->db->insert('booking_info', $data);

        return $this->db->insert_id();
    }

    //create comment functions
    public function create_comment($movie_id)
    {
        $data = array(
            'title' => $this->input->post('title'),
            'body' => $this->input->post('message'),
            'customer_id' => $this->session->userdata('user_id'),
            'mov_id' => $movie_id
        );

        return $this->db->insert('comment', $data);
    }

    //get comment  function
    public function get_comments($movie_id)
    {
        $this->db->select('*');
        $this->db->from('comment');
        $this->db->join('movie', 'comment.mov_id=movie.movie_id');
        $this->db->join('customer', 'comment.customer_id=customer.cust_id');

        /* $this->db->join('movie', 'comment.mov_id=movie_id');
        $this->db->join('customer', 'comment.customer_id=customer_id'); */
        $this->db->where('mov_id', $movie_id);
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    } //end of get_comments

    //count coment function
    public function count_comment($id)
    {

        $this->db->select('*');
        $this->db->from('comment');
        $this->db->where('mov_id', $id);
        $query = $this->db->get();

        return $query->num_rows();
    }
    public function get_bank()
    {

        $this->db->select('*');
        $this->db->from('bank');
        //$this->db->where('mov_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function booking_sms($id)
    {

        $this->db->select('*');
        $this->db->from('booking_info');
        $this->db->join('showtime', 'showtime.mov_id=booking_info.show_id');
        $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
        $this->db->join('customer', 'customer.cust_id=booking_info.user_id');
        $this->db->join('bank', 'bank.bank_id=booking_info.paid_bank');
        $this->db->where('booking_id', $id);
        //$this->db->limit(1); 
        $query = $this->db->get();
        $row = $query->row();

        if (isset($row)) {
            echo $row->price;
            //echo $row->bank_name;

           /*  $content = "
Dear " . $this->session->userdata('username') . "

Thank you for booking with Etcinema

Please make Payment to the Bank account below to reserve your seat .

Best Regards,
Yeshewas Gatawbza


PAYMENT DETAIL

Amount: " . $row->price . " Birr
-----
" . $row->bank_name . "
" . $row->account_name . "
" . $row->account_number . "
-----
Aftre making payment please Use this link to confirm your payment :
https://yegara.com/pay?d=14058.YES

        ";
            return $content; */
           
        }
        
    }
}
