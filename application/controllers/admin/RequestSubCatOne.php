<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestSubCatOne extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('admin/MainModels');

        $this->load->library('authit');
        $this->load->helper('authit_admin');
        $this->config->load('authit');
        if (!logged_in()) redirect('admin/login');


	}
    public function show_sub_catalogs_one($id)
	{
        $this->load->view('admin/header/header.php');
        $this->load->model('admin/RequestSubCatOneModels');
        $result = $this->RequestSubCatOneModels->sub_catalogs_one($id);
        $data = array(
            "data" => $result,
            'cat_one_id'=>$id
        );
		$this->load->view('admin/podcatalogs_one', $data);
		$this->load->view('admin/footer/footer.php');
	}
    public function insert_sub_cat_one()
    {
        $this->load->model('admin/RequestSubCatOneModels');
        $this->RequestSubCatOneModels->insert_sub_cat_one();   
    }
    public function update_sub_cat_one()
    {
        $this->load->model('admin/RequestSubCatOneModels');
        $this->RequestSubCatOneModels->update_sub_cat_one();   
    }
    public function delete_sub_cat_one()
    {
        $this->load->model('admin/RequestSubCatOneModels');
        $this->RequestSubCatOneModels->delete_sub_cat_one();   
    }
}
