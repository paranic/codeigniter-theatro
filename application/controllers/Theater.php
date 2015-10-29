<?php defined('BASEPATH') OR exit('No direct script access allowed');

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

		$this->template_data['theaters'] = $this->theater_model->get_records();

		$this->template->load('main', 'theater/theaters', $this->template_data);
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->load->model('theater_model');

		$this->template_data['theater'] = new theater_model();

		$this->template->load('main', 'theater/theater', $this->template_data);
	}

	public function edit($record_id = NULL)
	{
		$this->load->library('form_validation');
		$this->load->model('theater_model');

		$this->template_data['theater'] = $this->theater_model->get_record(['record_id' => $record_id]);

		$this->template->load('main', 'theater/theater', $this->template_data);
	}

	public function save($record_id = NULL)
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
				$theater = new theater_model(['record_id' => $record_id, 'name' => $this->input->post('name')]);
				$theater->save();

				$this->session->set_flashdata('message', 'Έγινε!');

				$this->load->helper('url');
				redirect('theater', 'location');
			}
		}
	}


}

/* End of file Theater.php */
/* Location: ./application/controllers/Theater.php */