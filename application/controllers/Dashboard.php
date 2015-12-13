<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	var $template_data;

	function __construct()
	{
		parent::__construct();
		$this->template_data = [];
	}

	public function index()
	{
		$this->template->load('main', 'dashboard/dashboard', $this->template_data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */