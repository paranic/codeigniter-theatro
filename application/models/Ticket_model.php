<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket_model extends MY_Model
{
	protected $table_name = 'tickets';

	public $name;

	public function __construct($properties = [])
	{
		parent::__construct($properties);
	}

}

/* End of file Ticket_model.php */
/* Location: ./application/models/Ticket_model.php */