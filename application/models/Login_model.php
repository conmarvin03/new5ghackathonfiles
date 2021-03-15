<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

Class Login_model extends CI_Model{

 	public function login($username , $password)
 	{

 	$sql = "SELECT userID , username , password , firstName ,lastName ,userLvl FROM userlogin WHERE BINARY username= BINARY ? AND BINARY password= BINARY ? LIMIT 1";
$query=$this->db->query($sql, array($username,$password));

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function logincontestant($id,$password)
	{

 	$sql = "SELECT contestantID , username, password ,activated,tme1,loginactivator FROM contestant WHERE BINARY username= BINARY ? AND BINARY password= BINARY ? LIMIT 1";
$query=$this->db->query($sql, array($id,$password));

 	
		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function chckid($id)
	{

			$sql = "SELECT attempt, logTime,username FROM contestant WHERE BINARY  username=BINARY ?";
			$query=$this->db->query($sql, array($id));


		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function updcn($username,$logTime,$attempt)
	{
		   $this->db->set('attempt',$attempt);
      $this->db->set('logTime',$logTime);
      $this->db->where('username',$username);
      $this->db->update('contestant');
        
	}
	public function random($contestantID,$loginactivator)
	{
		 $this->db->set('loginactivator',$loginactivator);
      $this->db->where('contestantID',$contestantID);
      $this->db->update('contestant');
	}
 }
 ?>