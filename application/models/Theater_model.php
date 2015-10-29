<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theater_model extends MY_Model
{
	protected $table_name = 'theaters';

	public $name;

	public function __construct($properties = [])
	{
		parent::__construct($properties);
	}

}

/* End of file Theater_model.php */
/* Location: ./application/models/Theater_model.php */