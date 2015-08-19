<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ci3 extends CI_Controller {


	public function __construct()
		{
        parent::__construct();
		
	}

	public function index()
	{
		$data['main_content'] = 'main';
		$this->load->view('includes/template', $data);
		
	}
}
