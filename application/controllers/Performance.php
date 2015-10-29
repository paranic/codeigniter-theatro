<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Performance extends CI_Controller {

	var $template_data;

	function __construct()
	{
		parent::__construct();
		$this->template_data = array();
		$this->template_data['active_menu'] = 'performance';
	}

	public function index()
	{
		$this->template->load('main', 'performance/performances', $this->template_data);
	}

	public function add()
	{
		$this->load->helper('form');
		$this->load->model('troupe_model');
		$this->load->model('theater_model');

		$this->template_data['troupes'] = $this->troupe_model->get_records();
		$this->template_data['theaters'] = $this->theater_model->get_records();

		$this->template_data['performance'] = array('performance_id'=>NULL, 'performance_name'=>NULL);

		$this->template->load('main', 'performance/performance', $this->template_data);
	}

	public function edit($theater_id)
	{
		$this->load->model('performance');

		$this->tempalte_data['performance'] = $this->troupe->get_troupe($troupe_id);

		$this->template->load('main', 'performance/performance', $this->template_data);
	}

	public function save($theater_id=NULL)
	{
		$this->load->library('form_validation');
		$this->load->model('performance_model');

		if ($this->input->post())
		{
			$this->form_validation->set_rules('theater', 'theater', 'is_natural_no_zero');
			$this->form_validation->set_rules('troupe', 'troupe', 'is_natural_no_zero');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->model('troupe_model');
				$this->load->model('theater_model');
				$this->template_data['troupes'] = $this->troupe_model->get_all();
				$this->template_data['theaters'] = $this->theater_model->get_all();


				$this->template_data['error_message'] = validation_errors('', '</br>');

				$this->template->load('main', 'performance/performance', $this->template_data);
			}

		}
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */