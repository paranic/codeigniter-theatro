<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

	var $ci;

	function __construct() 
	{
		$this->ci =& get_instance();
	}
	
	function load($tpl_view, $body_view = null, $data = null) 
	{
		if ( ! is_null( $body_view ) ) 
		{
			$body = $this->ci->load->view($body_view, $data, TRUE);
			
			if ( is_null($data) ) 
			{
				$data = array('body' => $body);
			}
			else if ( is_array($data) )
			{
				$data['body'] = $body;
			}
			else if ( is_object($data) )
			{
				$data->body = $body;
			}
		}

		$this->ci->load->view($tpl_view, $data);
	}
}


/* End of file template.php */
/* Location: ./application/libraries/template.php */