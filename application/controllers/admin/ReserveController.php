<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ReserveController  extends CI_Controller
{
    /**
     * ReserveController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('image_lib');
    }

//========================= RESTAURANTS ==========================//
//delete
    public function delete_kitchen()
    {
        $id_cat = $this->input->post('id', true);
        $this->db->where('id', $id_cat);
        $this->db->delete('booking_restaurants');
    }

//========================= TICKET BOOKING(SHOW) ==========================//
//delete
    public function delete_show()
    {
        $id_cat = $this->input->post('id', true);
        $this->db->where('id', $id_cat);
        $this->db->delete('ticket_booking');
    }

//========================= TRANSPORTATION SERVICES ==========================//
//delete
    public function delete_transport()
    {
        $id_cat = $this->input->post('id', true);
        $this->db->where('id', $id_cat);
        $this->db->delete('transportation_services');
    }

//========================= BOOKING PACKEGE (CHIP) ==========================//
//delete
    public function delete_chip()
    {
        $id_cat = $this->input->post('id', true);
        $this->db->where('id', $id_cat);
        $this->db->delete('booking_package');
    }

//=========================  ==========================//
//delete
    public function delete_vip()
    {
        $id_cat = $this->input->post('id', true);
        $this->db->where('id', $id_cat);
        $this->db->delete('VIP_booking_services');
    }

    //========================= ACCOMMODATION PACKAGE ==========================//
//delete
    public function delete_accommodation_package()
    {
        $id_cat = $this->input->post('id', true);
        $this->db->where('id', $id_cat);
        $this->db->delete('accommodation_package');
    }



}