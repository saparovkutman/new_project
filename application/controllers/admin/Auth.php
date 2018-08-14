<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Example Auth controller using Authit
 *
 * @package Authentication
 * @category Libraries
 * @author Ron Bailey
 * @version 1.0
 */

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('authit');
		$this->load->helper('authit_admin');
		$this->config->load('authit');

		$this->load->helper('url');
	}
	
	public function index()
	{
		if(!logged_in()) redirect('admin/auth/login');
		 
		// Redirect to your logged in landing page here
		redirect('/admin/auth/dash');
	}
	
	/**
	 * Login page
	 */
	public function login()
	{
		if(logged_in()) redirect('admin/auth/dash');
		 
		$this->load->library('form_validation');
		$this->load->helper('form');
        $this->lang->load('error_messages');
        $pass = $this->lang->line('param_pass');
        $param_log = $this->lang->line('param_log');
        $voiti = $this->lang->line('text_login_sumbit');
        $data['error'] = false;
        $data['pass'] = $pass;
        $data['param_log'] = $param_log;
        $data['sumbit'] = $voiti;

		$this->form_validation->set_rules('login', "$param_log",'required');
		$this->form_validation->set_rules('password', "$pass", 'required');
		
		if($this->form_validation->run()){
			if($this->authit->login(set_value('login'), set_value('password'))){
				// Redirect to your logged in landing page here
                redirect('admin');
				return $data;
			} else {
				$data['error'] = 'Your email address and/or password is incorrect.';
			}
		}
		
		$this->load->view('auth/login', $data);
	}
	
	/**
	 * Signup page
	 */
	public function signup()
	{
		// Redirect to your logged in landing page here
		if(logged_in()) redirect('admin/auth/dash');
		 
		$this->load->library('form_validation');
		$this->load->helper('form');
		$data['error'] = '';
		 
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique['. $this->config->item('authit_users_table') .'.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length['. $this->config->item('authit_password_min_length') .']');
		$this->form_validation->set_rules('password_conf', 'Confirm Password', 'required|matches[password]');
		
		if($this->form_validation->run()){
			if($this->authit->signup(set_value('email') , set_value('password') ,set_value('fio'))){
				$this->authit->login(set_value('email'), set_value('password'));
				
				// Do some post signup stuff like send a welcome email...

				
				// Redirect to your logged in landing page here
				redirect('admin/login');
			} else {
				$data['error'] = 'Failed to sign up with the given email address and password.';
			}
		}
		
		$this->load->view('auth/signup', $data);
	}
	
	/**
	 * Logout page
	 */
	public function logout()
	{
		if(!logged_in()) redirect('admin/login');

		// Redirect to your logged out landing page here
		$this->authit->logout('admin/login');
	}
	
	/**
	 * Example dashboard page
	 */
	public function dash()
	{
		if(!logged_in()) redirect('admin/login');
		
        redirect('admin');
		echo 'Hi, '. user('email') .'. You have successfully  logged in. <a href="'. site_url('admin/auth/logout') .'">Logout</a>';
	}
	
	public function update_admin(){
        $login = $this->input->post('example_login', true);   
        $email = $this->input->post('example_email', true);   
        $pass = $this->input->post('example_pass', true);
        $id = $this->input->post('example_id', true);
        $this->load->model('admin/authit_model');
        if($pass){
           $data = array(
               'login'=>$login,
               'email'=>$email,
               'password'=>password_hash($pass, PASSWORD_DEFAULT)
           ); 
        }else{
            $data = array(
               'login'=>$login,
               'email'=>$email
           );
        }
        $result = $this->authit_model->update_user($id, $data);
    }
}