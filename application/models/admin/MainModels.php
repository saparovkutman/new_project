<?php
class MainModels extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

//========================= CATALOG ONE ==========================//
    public function get_cat_one()
    {
        $select = $this->db->get('category_one');
        $cat_one = $select->result();
        return $cat_one;
    }

//========================= CATALOG TWO ==========================//
    public function get_cat_two()
    {
        $select = $this->db->get('category_two');
        $cat_two = $select->result();
        return $cat_two;
    }
   

//========================= CATALOG THREE ==========================//
    public function get_cat_three()
    {
        $select = $this->db->get('category_three');
        $cat_three = $select->result();
        return $cat_three;
    }
//========================= SUBCATALOG THREE ==========================//
    // get podcatalog
    public function get_podcatalog_three($id){
        $this->db->where('cat_three_id',$id);
        $select = $this->db->get('sub_category_three');
        $sub_cat_three = $select->result();
        return $sub_cat_three;
    }
//=========================  ==========================//
// get services
//    public function get_services($id){
//          $this->db->where('category_id',$id);
//          $select = $this->db->get('sub_category_two');
//          $cat_three = $select->result();
//          return $cat_three;
//    }

//=========================  ==========================//
    public function profile($user_id)
    {   
        $this->db->where('id',  $user_id);
        $select = $this->db->get('users_admin');
        $user = $select->result();
        return $user;
    }
//========================= RESTAURANTS ==========================//
    // get_kitchen
    public function get_kitchen(){
//        $this->db->where('cat_id', $id);
        $select = $this->db->get('booking_restaurants');
        $cat_kitchen = $select->result();
        return $cat_kitchen;
    }
    public function get_services(){
      $select = $this->db->get('sub_category_two');
      return $select->result();
    }
//========================= TICKET BOOKING(SHOW) ==========================//
    // get_show
    public function get_show(){
        $select = $this->db->get('ticket_booking');
        $cat_show = $select->result();
        return $cat_show;
    }

//========================= TRANSPORTATION SERVICES ==========================//
// get_transport
    public function get_transport(){
        $select = $this->db->get('transportation_services');
        $cat_transport = $select->result();
        return $cat_transport;
    }

//========================= BOOKING PACKAGE (CHIP) ==========================//
// get_chip
    public function get_chip(){
        $select = $this->db->get('booking_package');
        $cat_chip = $select->result();
        return $cat_chip;
    }

//========================= VIP_BOOKING_SERVICES  ==========================//
// get_vip
    public function get_vip(){
        $select = $this->db->get('VIP_booking_services');
        $cat_vip = $select->result();
        return $cat_vip;
    }

//=========================  ACCOMMODATION PACKAGE  ==========================//
// get_accommodation
    public function get_accommodation(){
        $select = $this->db->get('accommodation_package');
        $cat_accommodation = $select->result();
        return $cat_accommodation;
    }



}
