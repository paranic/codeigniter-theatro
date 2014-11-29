<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->template_data = array();

		$this->load->helper('url');
		$this->load->library('authentication');
		$this->load->library('form_validation');

		if ($this->input->post())
		{

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == true)
			{
				// if get person from model.
				if ($this->authentication->login($this->input->post()))
				{
					redirect('dashboard', 'location');
				}
				else
				{
					$this->template_data['error_message'] = 'login error';
				}
			}
			else
			{
				$this->template_data['error_message'] = validation_errors();
			}

			// reset username variable so the user don't have to rewrite his username again.
			if (strlen($this->input->post('username'))>0) $this->template_data['username'] = $this->input->post('username');
		}
		$this->load->view('login', $this->template_data);
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */