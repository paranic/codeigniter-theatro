<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{

	public function index()
	{
		$this->load->helper('url');
		$this->load->library('authentication');

		$this->authentication->logout();

		redirect('login', 'location');
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */