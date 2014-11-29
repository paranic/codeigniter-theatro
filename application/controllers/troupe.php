<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Troupe extends CI_Controller {

	var $template_data;
	
	function __construct() 
	{
		parent::__construct();
		$this->template_data = array();
		$this->template_data['active_menu'] = 'troupe';
	}
	
	public function index()
	{
		$this->template->load('main', 'troupe/troupes', $this->template_data);
	}
	
	public function add()
	{
		$this->template_data['troupe'] = array('troupe_id'=>NULL, 'troupe_name'=>NULL);
		
		$this->template->load('main', 'troupe/troupe', $this->template_data);
	}
	
	public function edit($troupe_id)
	{
		$this->load->model('troupe');
		
		$this->tempalte_data['troupe'] = $this->troupe->get_troupe($troupe_id);
		
		$this->template->load('main', 'troupe/troupes', $this->template_data);
	}
	
	public function save($troupe_id=NULL)
	{
		$this->load->library('form_validation');
		$this->load->model('troupe');
		
		if ($this->input->post())
		{
			$this->form_validation->set_rules('troupe name', 'store name', 'required');
		}
		var_dump($troupe_id, $this->input->post());
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */