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

		$this->load->model('sale_model');

		$sales = $this->sale_model->get_records(['performance_record_id' => $this->record_id]);
		foreach ($sales as $sale)
		{
			$this->total_sales_count += $sale->sales;
		}

		return $this->total_sales_count;
	}

}

/* End of file Performance_model.php */
/* Location: ./application/models/Performance_model.php */