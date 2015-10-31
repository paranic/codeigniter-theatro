<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_model extends MY_Model
{
	protected $table_name = 'performances';

	public $theater_record_id;
	public $troupe_record_id;
	public $datetime;

	private $theater;
	private $troupe;

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
}

/* End of file Performance_model.php */
/* Location: ./application/models/Performance_model.php */