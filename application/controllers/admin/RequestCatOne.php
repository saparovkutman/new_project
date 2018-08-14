<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestCatOne extends CI_Controller
{

    public function __construct()
    {
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

//======================= CATALOG ONE ==========================//
    public function insert_cat_one()
    {
        $this->load->model('admin/RequestCatOneModels');
        $this->RequestCatOneModels->insert_cat_one();
    }

    public function update_cat_one()
    {
        $this->load->model('admin/RequestCatOneModels');
        $this->RequestCatOneModels->update_cat_one();
    }

    public function delete_cat_one()
    {
        $this->load->model('admin/RequestCatOneModels');
        $this->RequestCatOneModels->delete_cat_one();
    }
}