<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model { 

	public function get_user($data)
	{ 
		$query = $this->db->query("select * from 360_admin where username='".$data['username']."' and password='".md5($data['password'])."'");  
		if($query->num_rows() == 1)
		{
			$list=$query->result_array()[0]; 
			$array = array('user_id' => $list['id'] ,'firstname' => $list['firstname']);		
			$this->session->set_userdata( $array );
			return 1;
		}else
		{
			return 0;
		} 
		
	}
	public function profile_get($id)
	{
		$query = $this->db->query("select * from 360_admin where id=$id");  
		if($query->num_rows() == 1)
		{
			return $query->result_array()[0];  
		} 
	}
	public function profile_update($data)
	{
		
	}

} 