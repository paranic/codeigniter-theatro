<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sale_model extends MY_Model
{
	protected $table_name = 'sales';

	public $performance_record_id;
	public $ticket_record_id;
	public $sales;

	private $ticket;
	private $theater;

	public function __construct($properties = [])
	{
		parent::__construct($properties);
	}

	public function ticket()
	{
		if ($this->ticket) return $this->ticket;

		$this->load->model('ticket_model');

		$this->ticket = $this->ticket_model->get_record(['record_id' => $this->ticket_record_id]);

		return $this->ticket;
	}

	public function theater()
	{
		if ($this->theater) return $this->theater;

		$this->load->model('theater_model');

		$this->theater = $this->theater_model->get_record(['record_id' => $this->theater_record_id]);

		return $this->theater;
	}

}

/* End of file Sale_model.php */
/* Location: ./application/models/Sale_model.php */