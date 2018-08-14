<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestCatTwo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library('image_lib');
        $this->load->library('upload');
        $this->load->library('authit');
        $this->load->helper('authit_admin');
        $this->config->load('authit');
        if (!logged_in()) redirect('admin/login');
    }


//======================= CATALOG TWO ==========================//
    public function insert_cat_two() {
        $this->load->model('admin/RequestCatTwoModels');
        $this->RequestCatTwoModels->insert_cat_two();
    }

    public function update_cat_two() {
        $this->load->model('admin/RequestCatTwoModels');
        $this->RequestCatTwoModels->update_cat_two();
    }

    public function delete_cat_two() {
        $this->load->model('admin/RequestCatTwoModels');
        $this->RequestCatTwoModels->delete_cat_two();
    }


}