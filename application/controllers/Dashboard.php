<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	var $template_data;
	
	function __construct() 
	{
		parent::__construct();
		$this->template_data = array();
		//$this->template_data['page'] = 'dashboard';
	}
	
	public function index()
	{
		$this->template->load('main', 'dashboard/dashboard', $this->template_data);
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */