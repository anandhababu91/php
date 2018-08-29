<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		 
	}

	public function index()
	{
		$data['title']="Forgot Password";
		$this->load->view('forgot_password', $data, FALSE);
	}

}
 