<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('logged_in'))
		{
			$this->load->helper('url');
			redirect('login');
		}

		$this->view_data['css_includes'] = array();
		$this->view_data['js_includes'] = array();

		$this->include_common_css();
		$this->include_common_js();
	}

	public function include_common_css()
	{
		$this->view_data['css_includes'][] = '/assets/css/bootstrap.min.css';
		$this->view_data['css_includes'][] = '/assets/font-awesome/css/font-awesome.css';
		$this->view_data['css_includes'][] = '/assets/css/animate.css';
		$this->view_data['css_includes'][] = '/assets/css/style.css';
	}

	public function include_css($css_file)
	{
		$this->view_data['css_includes'][] = $css_file;
	}

	public function empty_css_includes()
	{
		$this->view_data['css_includes'] = array();
	}

	public function include_common_js()
	{
		$this->view_data['js_includes'][] = '/assets/js/jquery-2.1.1.js';
		$this->view_data['js_includes'][] = '/assets/js/bootstrap.min.js';
	}

	public function include_js($js_file)
	{
		$this->view_data['js_includes'][] = $js_file;
	}

	public function empty_js_includes()
	{
		$this->view_data['js_includes'] = array();
	}

}