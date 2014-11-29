<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');

		if ($this->session->userdata('logged_in') === TRUE)
		{
			redirect('/dashboard', 'refresh');
		}
		else
		{
			redirect('login', 'location');
		}
	}

	public function logout()
	{
		$this->load->helper('url');
		$this->load->library('authentication');
		
		$this->authentication->logout();
		redirect('login', 'location');
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */