<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_model extends MY_Model
{
	protected $table_name = 'performances';

	public $theater_record_id;
	public $troupe_record_id;
	public $datetime;

	private $theater;
	private $troupe;
	private $total_sales_count;
	private $sales = [];

	public function __construct($properties = [])
	{
		parent::__construct($properties);
	}

	public function theater()
	{
		if ($this->theater) return $this->theater;

		$this->load->model('theater_model');

		return $this->theater_model->get_record(['record_id' => $this->theater_record_id]);
	}

	public function troupe()
	{
		if ($this->troupe) return $this->troupe;

		$this->load->model('troupe_model');

		return $this->troupe_model->get_record(['record_id' => $this->troupe_record_id]);
	}

	public function total_sales_count()
	{
		if ($this->total_sales_count) return $this->total_sales_count;

		foreach ($this->sales() as $sale)
		{
			$this->total_sales_count += $sale->sales;
		}

		return $this->total_sales_count;
	}

	public function sales()
	{
		if ($this->sales) return $this->sales;

		$this->load->model('ticket_model');
		$this->load->model('sale_model');
		foreach ($this->ticket_model->get_records() as $ticket)
		{
			$sale = $this->sale_model->get_record([
				'performance_record_id' => $this->record_id,
				'ticket_record_id' => $ticket->record_id
			]);

			if (!$sale)
			{
				$sale = new sale_model([
					'performance_record_id' => $this->record_id,
					'ticket_record_id' => $ticket->record_id
				]);
			}

			array_push($this->sales, $sale);
		}

		return $this->sales;
	}

}

/* End of file Performance_model.php */
/* Location: ./application/models/Performance_model.php */