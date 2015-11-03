<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

	var $ci;

	function __construct()
	{
		$this->ci =& get_instance();
	}

	function load($tpl_view, $body_view = NULL, $data = NULL)
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


/* End of file Template.php */
/* Location: ./application/libraries/Template.php */