<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    public function get_booking()
    {
        $this->db->select('*');
        $this->db->from('booking_info');
        $this->db->join('customer', 'customer.cust_id=booking_info.user_id');
        $this->db->join('showtime', 'showtime.show_id=booking_info.show_id');
        $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
        $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
        $this->db->join('bank', 'bank.bank_id=booking_info.paid_bank');
        $this->db->where('username',$this->session->tempdata('username'));
        //$this->db->join('seat', 'seat.seat_id=booking_info.seat_id');
        //$this->db->order_by('booking_id', 'ASC');
        $query = $this->db->get();

        return $query->result_array();
    }
    public function get_active_booking()
    {
        $this->db->select('*');
        $this->db->from('booking_info');
        $this->db->join('customer', 'customer.cust_id=booking_info.user_id');
        $this->db->join('showtime', 'showtime.show_id=booking_info.show_id');
        $this->db->join('movie', 'movie.movie_id=showtime.mov_id');
        $this->db->join('cinema', 'cinema.cinema_id=showtime.cinema_id');
        $this->db->join('bank', 'bank.bank_id=booking_info.paid_bank');
        $this->db->where('username',$this->session->tempdata('username'));
        $this->db->where('status','');
        //$this->db->join('seat', 'seat.seat_id=booking_info.seat_id');
        //$this->db->order_by('booking_id', 'ASC');
        $query = $this->db->get();

        return $query->result_array();
    }
    public function cancel_ticket($id)
    {

        $data = array(
            'status' => 'canceled'
        );
        if( $this->db->where('booking_id', $id)->update('booking_info', $data)){

            $this->db->where('booking_id', $id);
            $this->db->delete('seat_booked');
            return true;
            
        }
        else{
            return false;
        }
    }
    public function countTotalbooking()
	{
        $this->db->select('*');
        $this->db->from('booking_info');
        $this->db->where('user_id',$this->session->tempdata('user_id'));
        //$this->db->like('joined_date', date('y-m-d'));
        //$this->db->where('joined_date', date('y-m-d'));
        $query = $this->db->get();

        return $query->num_rows();
    }
    public function count_canceled()
	{
        $this->db->select('*');
        $this->db->from('booking_info');
        $this->db->where('user_id',$this->session->tempdata('user_id'));
        $this->db->where('status','canceled');
        //$this->db->where('joined_date', date('y-m-d'));
        $query = $this->db->get();

        return $query->num_rows();
    }
    public function countPaid()
	{
        $this->db->select('*');
        $this->db->from('booking_info');
        $this->db->where('user_id',$this->session->tempdata('user_id'));
        $this->db->where('status','paid');
        //$this->db->where('joined_date', date('y-m-d'));
        $query = $this->db->get();

        return $query->num_rows();
    }
    public function get_profile()
    {
        $this->db->select('*');
        $this->db->from('customer');
       
        $this->db->where('cust_id', $this->session->tempdata('user_id'));
        $query = $this->db->get();


        return $query->result_array();
    }
}
