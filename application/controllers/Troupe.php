<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Troupe extends CI_Controller {

	var $template_data = array();
	
	function __construct()
	{
		parent::__construct();

		$this->template_data['active_menu'] = 'troupe';
	}
	
	public function index()
	{
		$this->load->model('troupe_model');
		
		$this->template_data['troupes'] = $this->troupe_model->get_all();
		
		$this->template->load('main', 'troupe/troupes', $this->template_data);
	}
	
	public function add()
	{
		$this->load->library('form_validation');

		$troupe = array('name'=>'');
		$this->template_data['troupe'] = $troupe;
		
		$this->template->load('main', 'troupe/troupe', $this->template_data);
	}
	
	public function edit($troupe_id)
	{
		$this->load->library('form_validation');
		$this->load->model('troupe_model');
		
		$this->template_data['troupe'] = $this->troupe_model->get($troupe_id);

		$this->template->load('main', 'troupe/troupe', $this->template_data);
	}
	
	public function save($troupe_id=NULL)
	{
		$this->load->library('form_validation');
		$this->load->model('troupe_model');
		
		if ($this->input->post())
		{
			$this->form_validation->set_rules('name', 'troupe name', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template_data['error_message'] = validation_errors('', '</br>');
				
				$this->template->load('main', 'troupe/troupe', $this->template_data);
			}
			else
			{
				$this->troupe_model->save($this->input->post());
				
				$this->session->set_flashdata('message', 'Έγινε!');
				
				$this->load->helper('url');
				redirect('troupe', 'location');
			}
		}
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */