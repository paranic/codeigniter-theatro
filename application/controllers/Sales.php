<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	var $template_data;

	function __construct()
	{
		parent::__construct();
		$this->template_data = array();
		$this->template_data['active_menu'] = '';
	}

	public function index()
	{
		$this->load->model('troupe_model');
		$this->load->model('theater_model');
		$this->load->model('performance_model');

		$this->template_data['performances'] = $this->performance_model->get_records();

		$this->template->load('main', 'performance/performances', $this->template_data);
	}

	public function edit($performance_record_id = NULL)
	{
		$this->load->helper('form');
		$this->load->model('sale_model');
		$this->load->model('performance_model');
		$this->load->model('ticket_model');

		$this->template_data['performance'] = $this->performance_model->get_record(['record_id' => $performance_record_id]);
		$this->template_data['tickets'] = $this->ticket_model->get_records();

		$sales = [];
		foreach ($this->template_data['tickets'] as $ticket)
		{
			$sale = $this->sale_model->get_record(['performance_record_id' => $performance_record_id, 'ticket_record_id' => $ticket->record_id]);
			if (!$sale) $sale = new sale_model(['performance_record_id' => $performance_record_id, 'ticket_record_id' => $ticket->record_id]);
			array_push($sales, $sale);
		}
		$this->template_data['sales'] = $sales;

		$this->template->load('main', 'sale/sales', $this->template_data);
	}

	public function save($performance_record_id = NULL)
	{
		$this->load->library('form_validation');

		if ($this->input->post())
		{
			var_dump($this->input->post('sales'));
			die();

// 			if ($this->form_validation->run() == FALSE)
// 			{
// 				$this->load->model('theater_model');
// 				$this->load->model('troupe_model');
// 				$this->template_data['theaters'] = $this->theater_model->get_records();
// 				$this->template_data['troupes'] = $this->troupe_model->get_records();

// 				$this->template_data['performance'] = new performance_model([
// 					'record_id' => $record_id,
// 					'theater_record_id' => $this->input->post('theater_record_id'),
// 					'troupe_record_id' => $this->input->post('troupe_record_id')
// 				]);

// 				$this->template_data['error_message'] = validation_errors('', '</br>');

// 				$this->template->load('main', 'performance/performance', $this->template_data);
// 			}
// 			else
// 			{
// 				$performance = new performance_model([
// 					'record_id' => $record_id,
// 					'theater_record_id' => $this->input->post('theater_record_id'),
// 					'troupe_record_id' => $this->input->post('troupe_record_id'),
// 					'datetime' => $this->input->post('datetime')
// 				]);
// 				$performance->save();

// 				$this->session->set_flashdata('message', 'Έγινε!');

// 				$this->load->helper('url');
// 				redirect('performance', 'location');
// 			}

		}
	}
}

/* End of file Sales.php */
/* Location: ./application/controllers/Sales.php */