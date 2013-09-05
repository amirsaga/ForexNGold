<?php

class Forex extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('chart');
		$this->load->helper('form');
	}

	function index()
	{
//		$this->forex_json();
//		$this->current_forex();
		$data = array();
		$data['forex_dates'] = $this->chart->get_date('forex');
		$this->load->view('header');
		$this->load->view('forex', $data);
		$this->load->view('footer');
	}


}

?>