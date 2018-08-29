<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
	}

	public function index()
	{ 
		$this->load->model('Login_Model');
		$data['info']=$this->Login_Model->profile_get($this->session->userdata('user_id')); 
		$data['title']="Profile";
		$this->load->template('profile', $data, FALSE);
	}
	public function update()
	{		
		 $this->load->model('Login_Model');
		$array=array('first_name' => $this->input->post('first_name'),
					 'last_name' =>  $this->input->post('last_name'),
					 'email'  =>  $this->input->post('email'),
					 'phone' => $this->input->post('phone'),
					 'password' => $this->input->post('password'),
					 'old_password' => $this->input->post('old_password'),
					 'image' => $this->input->post('image'),
					 'old_image' => $this->input->post('old_image')
					 );
		 $config['upload_path'] = APPPATH.'views/profile/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);

		$this->upload->do_upload('image');
		//$this->Login_Model->profile_update($array); 
		//$data['info']=$this->Login_Model->profile_get($this->session->userdata('user_id')); 
		$data['title']="Profile";
		$this->load->template('profile', $data, FALSE);
	}

} 