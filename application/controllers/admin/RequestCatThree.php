<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestCatThree extends CI_Controller
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

//======================= CATALOG THREE ==========================//
    public function insert_cat_three()
    {
        $this->load->model('admin/RequestCatThreeModels');
        $this->RequestCatThreeModels->insert_cat_three();
    }

    public function update_cat_three()
    {
        $this->load->model('admin/RequestCatThreeModels');
        $this->RequestCatThreeModels->update_cat_three();
    }

    public function delete_cat_three()
    {
        $this->load->model('admin/RequestCatThreeModels');
        $this->RequestCatThreeModels->delete_cat_three();
    }

    //======================= SUBCATALOG THREE ==========================//
    public function insert_subcat_three()
    {
        $this->load->model('admin/RequestCatThreeModels');
        $this->RequestCatThreeModels->insert_subcat_three();
    }

    public function update_subcat_three()
    {
        $this->load->model('admin/RequestCatThreeModels');
        $this->RequestCatThreeModels->update_subcat_three();
    }

    public function delete_subcat_three()
    {
        $this->load->model('admin/RequestCatThreeModels');
        $this->RequestCatThreeModels->delete_subcat_three();
    }
}