<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

	var $template_data = array();

	function __construct()
	{
		parent::__construct();
		$this->template_data['active_menu'] = 'ticket';
	}

	public function index()
	{
		$this->load->model('ticket_model');

		$this->template_data['tickets'] = $this->ticket_model->get_records();

		$this->template->load('main', 'ticket/tickets', $this->template_data);
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->load->model('ticket_model');

		$this->template_data['ticket'] = new ticket_model();

		$this->template->load('main', 'ticket/ticket', $this->template_data);
	}

	public function edit($record_id = NULL)
	{
		$this->load->library('form_validation');
		$this->load->model('ticket_model');

		$this->template_data['ticket'] = $this->ticket_model->get_record(['record_id' => $record_id]);

		$this->template->load('main', 'ticket/ticket', $this->template_data);
	}

	public function save($record_id = NULL)
	{
		$this->load->library('form_validation');
		$this->load->model('ticket_model');

		if ($this->input->post())
		{
			$this->form_validation->set_rules('name', 'ticket name', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$this->template_data['error_message'] = validation_errors('', '</br>');

				$this->template->load('main', 'ticket/ticket', $this->template_data);
			}
			else
			{
				$ticket = new ticket_model(['record_id' => $record_id, 'name' => $this->input->post('name')]);
				$ticket->save();

				$this->session->set_flashdata('message', 'Έγινε!');

				$this->load->helper('url');
				redirect('ticket', 'location');
			}
		}
	}


}

/* End of file Ticket.php */
/* Location: ./application/controllers/Ticket.php */