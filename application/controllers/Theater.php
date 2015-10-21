<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Theater extends CI_Controller {

	var $template_data = array();
	
	function __construct() 
	{
		parent::__construct();
		$this->template_data['active_menu'] = 'theater';
	}
	
	public function index()
	{
		$this->load->model('theater_model');
		
		$this->template_data['theaters'] = $this->theater_model->get_all();
		
		$this->template->load('main', 'theater/theaters', $this->template_data);
	}
	
	public function add()
	{
		$this->load->library('form_validation');

		$theater = array('name'=>'');
		$this->template_data['theater'] = $theater;
		
		$this->template->load('main', 'theater/theater', $this->template_data);
	}
	
	public function edit($theater_id)
	{
		$this->load->library('form_validation');
		$this->load->model('theater_model');
		
		$this->template_data['theater'] = $this->theater_model->get($theater_id);
		
		$this->template->load('main', 'theater/theater', $this->template_data);
	}
	
	public function save($theater_id=NULL)
	{
		$this->load->library('form_validation');
		$this->load->model('theater_model');
		
		if ($this->input->post())
		{
			$this->form_validation->set_rules('name', 'theater name', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template_data['error_message'] = validation_errors('', '</br>');
				
				$this->template->load('main', 'theater/theater', $this->template_data);
			}
			else
			{
				$this->theater_model->save($this->input->post());
				
				$this->session->set_flashdata('message', 'Έγινε!');
				
				$this->load->helper('url');
				redirect('theater', 'location');
			}
		}
	}
	
	
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */