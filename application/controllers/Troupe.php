<?php defined('BASEPATH') OR exit('No direct script access allowed');

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

		$this->template_data['troupes'] = $this->troupe_model->get_records();

		$this->template->load('main', 'troupe/troupes', $this->template_data);
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->load->model('troupe_model');

		$this->template_data['troupe'] = new troupe_model();

		$this->template->load('main', 'troupe/troupe', $this->template_data);
	}

	public function edit($record_id = NULL)
	{
		$this->load->library('form_validation');
		$this->load->model('troupe_model');

		$this->template_data['troupe'] = $this->troupe_model->get_record(['record_id' => $record_id]);

		$this->template->load('main', 'troupe/troupe', $this->template_data);
	}

	public function save($record_id = NULL)
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
				$troupe = new troupe_model(['record_id' => $record_id, 'name' => $this->input->post('name')]);
				$troupe->save();

				$this->session->set_flashdata('message', 'Έγινε!');

				$this->load->helper('url');
				redirect('troupe', 'location');
			}
		}
	}

}

/* End of file Troupe.php */
/* Location: ./application/controllers/Troupe.php */