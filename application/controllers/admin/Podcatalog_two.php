<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Podcatalog_two extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('admin/MainModels');
		$this->load->model('admin/Podcatalog_two_models');
        $this->load->library('authit');
        $this->load->helper('authit_admin');
        $this->config->load('authit');

	}

	// для каталог 2 . тут услуги
	public function uslugi($id)
	{
        $this->load->view('admin/header/header.php');
	    $result = $this->MainModels->get_services();
	     $data = array(
	         'cat_two_id'=>$id,
            "data" => $result
        );
		$this->load->view('admin/podcatalogs_show',$data);
		$this->load->view('admin/footer/footer.php');
	}
    public function show_services_vip($id){
        $this->load->view('admin/header/header.php');
        $result = $this->Podcatalog_two_models->show_services_vip($id);
        $data = array(
            'cat_two_id'=>$id,
            "data" => $result
        );
		$this->load->view('admin/pod_cat_serv_vip',$data);
        $this->load->view('admin/footer/footer.php');
    }
    public function show_services_restaurant($id){
        $this->load->view('admin/header/header.php');
        $result = $this->Podcatalog_two_models->show_services_restaurant($id);
        $data = array(
            'cat_two_id'=>$id,
            "data" => $result
        );
        $this->load->view('admin/pod_cat_serv_rest',$data);
        $this->load->view('admin/footer/footer.php');
    }
    public function get_show($id){
        $this->load->view('admin/header/header.php');
        $result = $this->Podcatalog_two_models->get_show($id);
        $data = array(
            'cat_two_id'=>$id,
            "data" => $result
        );
        $this->load->view('admin/pod_cat_serv_shw',$data);
        $this->load->view('admin/footer/footer.php');
    }
//	restaurants

    public function update_restaurants(){
        $this->Podcatalog_two_models->update_restaurants();
    }
    public function add_restaurants(){
      $this->Podcatalog_two_models->add_restaurants();

    }
    public function delete_res(){
        $this->Podcatalog_two_models->delete_res();
    }


// show
	public function add_show(){
        $this->Podcatalog_two_models->add_show();
    }
    public function update_show(){
        $this->Podcatalog_two_models->update_show();
    }
    public function delete_show(){
        $this->Podcatalog_two_models->delete_show();
    }
//    travel packts
    public function add_book(){
    $this->Podcatalog_two_models->add_book();
    }
    public function update_book(){
	    $this->Podcatalog_two_models->update_book();
    }
    public function delete_book(){
        $this->Podcatalog_two_models->delete_book();
    }

//    SERVICES VIEW
    public function get_serv_vip_view($id){
        $this->load->view('admin/header/header.php');
        $result = $this->Podcatalog_two_models->get_serv_vip_view($id);
        $data = array(
            'sub_cat_id'=>$id,
            "data" => $result
        );
        $this->load->view('admin/services/services_book',$data);
        $this->load->view('admin/footer/footer.php');
    }
    public function get_serv_rest_view($id){
        $this->load->view('admin/header/header.php');
        $result = $this->Podcatalog_two_models->get_serv_rest_view($id);
        $data = array(
            'sub_cat_id'=>$id,
            "data" => $result
        );
        $this->load->view('admin/services/services_restaurants',$data);
        $this->load->view('admin/footer/footer.php');
    }
    public function get_serv_show_view($id){
        $this->load->view('admin/header/header.php');
        $result = $this->Podcatalog_two_models->get_serv_show_view($id);
        $data = array(
            'sub_cat_id'=>$id,
            "data" => $result
        );
        $this->load->view('admin/services/services_show',$data);
        $this->load->view('admin/footer/footer.php');
    }

    public function insert_vip(){
        $this->Podcatalog_two_models->insert_vip();
    }

    public function update_vip(){
        $this->Podcatalog_two_models->update_vip();
    }

    public function delete_vip(){
        $this->Podcatalog_two_models->delete_vip();
    }

    public function insert_res(){
        $this->Podcatalog_two_models->insert_res();
    }
    public function update_rest(){
        $this->Podcatalog_two_models->update_rest();
    }
    public function delete_rest(){
        $this->Podcatalog_two_models->delete_rest();
    }

    public function insert_show_view(){
        $this->Podcatalog_two_models->insert_show_view();
    }
    public function update_show_view(){
        $this->Podcatalog_two_models->update_show_view();
    }
    public function delete_show_view(){
        $this->Podcatalog_two_models->delete_show_view();
    }
}