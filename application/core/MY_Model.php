<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	public $table_name;
	
	
	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function save($record)
	{
		if (isset($record['record_id']) AND is_numeric($record['record_id']))
		{
			$this->update($record);
		}
		else
		{
			$this->insert($record);
		}
	}
	
	
	public function insert($record)
	{
		return $this->db->insert($this->table_name, $record);
	}
	
	
	public function update($record)
	{
		return $this->db->update($this->table_name, $record, array('record_id'=>$record['record_id']));
	}
	
	
	public function delete($record)
	{
		return $this->db->delete($this->table_name, array('record_id'=>$record['record_id']));
	}
	
	
	public function soft_delete($record)
	{
		$record['deleted_at'] = date('Y-m-d H:i:s');
		$this->db->update($this->table_name, $record, array('record_id'=>$record['record_id']));
	}
	
	
	public function un_delete($record)
	{
		$record['deleted_at'] = NULL;
		$this->db->update($this->table_name, $record, array('record_id'=>$record['record_id']));
	}
	
	
	public function get_all()
	{
		return $this->db->get($this->table_name)->result_array();
	}
	
	
	public function get($record_id)
	{
		$result = $this->db->get_where($this->table_name, array('record_id'=>$record_id))->result_array();
		if (count($result) == 1) return $result[0];
		return NULL;
	}

}