<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller { 
	 public function __construct()
	{
		parent::__construct(); 
	    $this->load->database();

	    if($this->session->userdata('user_id'))
		    {
		    	//redirect('dashboard','refresh');
		    } 
	}
	public function index()
	{
		$data['title']="Login";
		$data['result']="";

		$this->load->view('login',$data); 
	}

	public function check()
	{

	    $this->load->model('login_model');
	    $data = array(
			'username' => $this->input->post('username'), 
			'password' => $this->input->post('password')
			);

	    $data['title']="Login";
	    $data['result']=$this->alert->danger("Invalid Username & Password ?");
	    $this->login_model->get_user($data);
	    $this->load->view('login',$data);
		 	
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id','firstname');
		redirect('login','refresh');
	}
}
