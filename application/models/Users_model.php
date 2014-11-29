<?php

class Users_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function get_user_by_userpass($user_login_data)
	{
		$this->db->select('user_id, firstname, lastname');
		$query = $this->db->get_where('users', array('email' => $user_login_data['username'], 'password' => $user_login_data['password']));

		if ($query->num_rows() == 1)
		{
			return $query->row();
		}

		return FALSE;
	}

}

/* End of file users_model.php */
/* Location: ./application/models/users_model.php */