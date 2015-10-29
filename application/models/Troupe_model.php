<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Troupe_model extends MY_Model
{
	protected $table_name = 'troupes';

	public $name;

	public function __construct($properties = [])
	{
		parent::__construct($properties);
	}

}

/* End of file Troupe_model.php */
/* Location: ./application/models/Troupe_model.php */