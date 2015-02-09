<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Theater extends CI_Controller {

	var $template_data;
	
	function __construct() 
	{
		parent::__construct();
		$this->template_data = array();
		$this->template_data['active_menu'] = 'theater';
	}
	
	public function index()
	{
		$this->template->load('main', 'theater/theaters', $this->template_data);
	}
	
	public function add()
	{
		$this->template_data['theater'] = array('theater_id'=>NULL, 'theater_name'=>NULL);
		
		$this->template->load('main', 'theater/theater', $this->template_data);
	}
	
	public function edit($theater_id)
	{
		$this->load->model('theater');
		
		$this->tempalte_data['theater'] = $this->theater->get_theater($theater_id);
		
		$this->template->load('main', 'theater/theater', $this->template_data);
	}
	
	public function save($theater_id=NULL)
	{
		$this->load->library('form_validation');
		$this->load->model('theater');
		
		if ($this->input->post())
		{
			$this->form_validation->set_rules('theater_name', 'theater name', 'required');
		}
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */