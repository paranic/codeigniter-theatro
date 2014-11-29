<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Authentication {

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('users_model');
	}

	public function login($user_login_data)
	{
		if ($user = $this->ci->users_model->get_user_by_userpass($user_login_data))
		{
			$this->ci->session->set_userdata('logged_in', TRUE);
			$this->ci->session->set_userdata('person', $user);
			return TRUE;
		}
		return FALSE;
	}

	public function logout()
	{
		$this->ci->session->sess_destroy();
	}

}

/* End of file authentication.php */
/* Location: ./application/libraries/authentication.php */