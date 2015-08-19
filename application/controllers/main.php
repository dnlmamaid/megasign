<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {


	public function __construct()
		{
        parent::__construct();
		
	}

	public function index()
	{
		$data['main_content'] = 'landing_page';
		$this->load->view('includes/template', $data);
		
	}
}
