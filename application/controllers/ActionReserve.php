<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActionReserve extends CI_Controller {

    /**
     * ActionReserveController constructor.
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
//insert
    public function insert_kitchen() {
        $this->load->model('admin/ReserveModels');
        $this->ReserveModels->insert_kitchen();
    }

//========================= TICKET BOOKING(SHOW) ==========================//
//insert
    public function insert_show() {
        $this->load->model('admin/ReserveModels');
        $this->ReserveModels->insert_show();
    }

//========================= TRANSPORTATION SERVICES ==========================//
//insert
    public function insert_transport() {
        $this->load->model('admin/ReserveModels');
        $this->ReserveModels->insert_transport();
    }

//========================= BOOKING PACKEGE (CHIP) ==========================//
//insert
    public function insert_package() {
        $this->load->model('admin/ReserveModels');
        $this->ReserveModels->insert_package();
    }

//========================= ACCOMMODATION PACKAGE ==========================//
//insert
    public function insert_accommodation() {

        $this->load->model('admin/ReserveModels');
        $this->ReserveModels->insert_accommodation();
    }

//=========================  ==========================//











}