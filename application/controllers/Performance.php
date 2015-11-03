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
		$this->load->model('troupe_model');
		$this->load->model('theater_model');
		$this->load->model('performance_model');

		$this->template_data['performances'] = $this->performance_model->get_records();

		$this->template->load('main', 'performance/performances', $this->template_data);
	}

	public function add()
	{
		$this->load->helper('form');
		$this->load->model('troupe_model');
		$this->load->model('theater_model');
		$this->load->model('performance_model');

		$this->template_data['troupes'] = $this->troupe_model->get_records();
		$this->template_data['theaters'] = $this->theater_model->get_records();

		$this->template_data['performance'] = new performance_model();

		$this->template->load('main', 'performance/performance', $this->template_data);
	}

	public function edit($record_id = NULL)
	{
		$this->load->helper('form');
		$this->load->model('troupe_model');
		$this->load->model('theater_model');
		$this->load->model('performance_model');

		$this->template_data['troupes'] = $this->troupe_model->get_records();
		$this->template_data['theaters'] = $this->theater_model->get_records();
		$this->template_data['performance'] = $this->performance_model->get_record(['record_id' => $record_id]);

		$this->template->load('main', 'performance/performance', $this->template_data);
	}

	public function save($record_id = NULL)
	{
		$this->load->library('form_validation');
		$this->load->model('performance_model');

		if ($this->input->post())
		{
			$this->form_validation->set_rules('theater_record_id', 'theater', 'required|is_natural_no_zero');
			$this->form_validation->set_rules('troupe_record_id', 'troupe', 'required|is_natural_no_zero');
			$this->form_validation->set_rules('datetime', 'datetime', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->model('theater_model');
				$this->load->model('troupe_model');
				$this->template_data['theaters'] = $this->theater_model->get_records();
				$this->template_data['troupes'] = $this->troupe_model->get_records();

				$this->template_data['performance'] = new performance_model([
					'record_id' => $record_id,
					'theater_record_id' => $this->input->post('theater_record_id'),
					'troupe_record_id' => $this->input->post('troupe_record_id')
				]);

				$this->template_data['error_message'] = validation_errors('', '</br>');

				$this->template->load('main', 'performance/performance', $this->template_data);
			}
			else
			{
				$performance = new performance_model([
					'record_id' => $record_id,
					'theater_record_id' => $this->input->post('theater_record_id'),
					'troupe_record_id' => $this->input->post('troupe_record_id'),
					'datetime' => $this->input->post('datetime')
				]);
				$performance->save();

				$this->session->set_flashdata('message', 'Έγινε!');

				$this->load->helper('url');
				redirect('performance', 'location');
			}

		}
	}

}

/* End of file Performance.php */
/* Location: ./application/controllers/Performance.php */