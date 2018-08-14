<?php
/**
 * Authit Authentication Library
 *
 * @package Authentication
 * @category Libraries
 * @author Ron Bailey
 * @version 1.0
 */

class AuthitAllUser_Model extends CI_Model {

	public $users_table;
	
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->config->load('authit');

		$this->users_table = $this->config->item('authit_all_users_table');
		
		if(!$this->db->table_exists($this->users_table)) $this->create_users_table();
	}
	
	public function get_user($user_id)
	{
		$query = $this->db->get_where($this->users_table, array('id' => $user_id));
		if($query->num_rows()) return $query->row();
		return false;
	}
	
	public function get_user_by_email($email)
	{
		$query = $this->db->get_where($this->users_table, array('email' => $email));
		if($query->num_rows()) return $query->row();
		return false;
	}
	
	public function get_users($order_by = 'id', $order = 'asc', $limit = 0, $offset = 0)
	{
		$this->db->order_by($order_by, $order); 
		if($limit) $this->db->limit($limit, $offset);
		$query = $this->db->get($this->users_table);
		return $query->result();
	}

	public function get_user_count()
	{
		return $this->db->count_all($this->users_table);
	}
	
	public function create_user($fullname, $email, $password, $number)
	{
		$data = array(
            'fullname' => $fullname,
			'email' => filter_var($email, FILTER_SANITIZE_EMAIL),
			'password' => $password,
            'sex' => '',
            'phone_number' => $number,
			'created' => date('Y-m-d H:i:s')
		);
		$this->db->insert($this->users_table, $data);
		return $this->db->insert_id();
	}
	
	public function update_user($user_id, $data)
	{
		$this->db->where('id', $user_id);
		$this->db->update($this->users_table, $data); 
	}
	
	public function delete_user($user_id)
	{
		$this->db->delete($this->users_table, array('id' => $user_id));
	}
	
	private function create_users_table()
	{
		$this->load->dbforge();
		$this->dbforge->add_field('id');
		$this->dbforge->add_field('email VARCHAR(255) NOT NULL');
		$this->dbforge->add_field('password VARCHAR(255) NOT NULL');
		$this->dbforge->add_field('fullname VARCHAR(255) NOT NULL');
		$this->dbforge->add_field('sex VARCHAR(255) NOT NULL');
		$this->dbforge->add_field('phone_number VARCHAR(255) NOT NULL');
		$this->dbforge->add_field('created DATETIME NOT NULL');
		$this->dbforge->add_field('last_login DATETIME NOT NULL');
		$this->dbforge->create_table($this->users_table);
	}
	
}

/* End of file: Authit_model.php */
/* Location: application/models/Authit_model.php */