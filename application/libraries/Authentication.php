<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication {

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('user_model');
	}

	public function login($user_login_data)
	{
		if ($user = $this->ci->user_model->get_record(['email' => $user_login_data['username'], 'password' => $user_login_data['password']]));
		{
			$this->ci->session->set_userdata('logged_in', TRUE);
			$this->ci->session->set_userdata('user', $user);
			return TRUE;
		}
		return FALSE;
	}

	public function logout()
	{
		$this->ci->session->sess_destroy();
	}

}

/* End of file Authentication.php */
/* Location: ./application/libraries/Authentication.php */