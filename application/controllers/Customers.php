<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function index()
	{
		$this->load->view('view_customer');
	}
}
