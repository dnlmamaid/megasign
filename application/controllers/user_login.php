<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_login extends CI_Controller {


	public function __construct()
		{
        parent::__construct();
		
	}

	public function index()
	{
		$data['main_content'] = 'login_view';
		$this->load->view('includes/template', $data);
		
	}
}
