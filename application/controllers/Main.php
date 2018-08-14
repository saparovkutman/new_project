<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
        $this->load->library('authitalluser');
		$this->load->helper('authit');
		$this->config->load('authit');
        $this -> load -> library( 'session' );

        $lang =$this -> session -> userdata ('lang');
        $data['lang_sel']=$lang;
        if(isset($lang)){
            $this->config->set_item('language', $lang);
        }
        $this->lang->load('main');
        $this->lang->load('error_messages');
        $this->load->view('main/header/header.php',$data);
	}

//========================== INDEX ==========================//
	public function index()
	{
        $read_m = $this->lang->line('art_tx_read_m');
        $this->load->model('Main_Model');
        $result = $this->Main_Model->get_cat_one();

        $data = array(
            "data" => $result,
            "read_m"=>$read_m
        );
		$this->load->view('main/main', $data);
		$this->load->view('main/footer/footer.php');
	}
    public function lang_show()
    {
//        $this->session->sess_destroy();
        $lang = $this->input->post('lang', true);
        $newdata  =  array (
            'lang'   =>  $lang
        );
        $this -> session -> set_userdata ( $newdata );
    }
    public function subcategory_one()
	{
        $data['cat_id'] = $this->input->get('id');
		$this->load->view('main/subcategory_one',$data);
		$this->load->view('main/footer/footer.php');
	}
    public function subcategory_two()
	{
		$this->load->view('main/subcategory_two');
		$this->load->view('main/footer/footer.php');
	}
    public function reserve_form_package_subcattwo($id)
	{
        $form_depar = $this->lang->line('form_depar');
        $form_dest = $this->lang->line('form_dest');
        $form_num_people = $this->lang->line('form_num_people');
        $form_date_depar = $this->lang->line('form_date_depar');
        $form_date_retr = $this->lang->line('form_date_retr');
        $data['id'] = $id;
        $data['form_depar'] = $form_depar;
        $data['form_dest'] = $form_dest;
        $data['form_num_people'] = $form_num_people;
        $data['form_date_depar'] = $form_date_depar;
        $data['form_date_retr'] = $form_date_retr;
		$this->load->view('main/package_form', $data);
		$this->load->view('main/footer/footer.php');
	}
    public function reserve_form_restaurant_subcattwo($id)
	{
        $form_num_people = $this->lang->line('form_num_people');
        $form_date = $this->lang->line('form_date');
        $form_time = $this->lang->line('form_time');
        $data['id'] = $id;
        $data['form_num_people'] = $form_num_people;
        $data['form_date'] = $form_date;
        $data['form_time'] = $form_time;
		$this->load->view('main/restaurants_form',$data);
		$this->load->view('main/footer/footer.php');
	}
    public function reserve_form_tichet_subcattwo()
	{
        $data['id'] = $this->input->get('id');
		$this->load->view('main/tichet_form', $data);
		$this->load->view('main/footer/footer.php');
	}
    
    public function subcategory_three()
	{
		$this->load->view('main/subcategory_three');
		$this->load->view('main/footer/footer.php');
	}
     public function reserve_form_subcattree()
	{
		$this->load->view('main/reserve_form_cattree');
		$this->load->view('main/footer/footer.php');
	}
    public function subcategory_two_view($id)
	{
        $subm_reserve = $this->lang->line('subm_reserve');
        $form_depar = $this->lang->line('form_depar');
        $form_dest = $this->lang->line('form_dest');
        $form_num_people = $this->lang->line('form_num_people');
        $form_date_depar = $this->lang->line('form_date_depar');
        $form_date_retr = $this->lang->line('form_date_retr');
        if($id==1){
            $data['id']=$id;
            $data['subm_reserve']=$subm_reserve;
            $this->load->view('main/package', $data);
        }
		elseif($id==2){
            $data['id']=$id;
            $data['form_depar'] = $form_depar;
            $data['form_dest'] = $form_dest;
            $data['form_num_people'] = $form_num_people;
            $data['form_date_depar'] = $form_date_depar;
            $data['form_date_retr'] = $form_date_retr;

            $this->load->view('main/transportation', $data);
        }
        elseif($id==3){
            $data['id']=$id;
            $data['subm_reserve']=$subm_reserve;
            $this->load->view('main/restaurants',$data);
        }
        elseif($id==4){
            $data['id']=$id;
            $this->load->view('main/tichet', $data);
        }
		$this->load->view('main/footer/footer.php');
	}
}
