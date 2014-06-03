<?php

class Project extends CI_Controller
{
	function __construct()
	{

		parent::__construct();	

	    		//$this->load->model('project_model');
		$this->load->helper('url');
		$this->load->helper('html');	

		
	}

	public function index()
	{
		
		$this->load->view("main.php");

	}
}


