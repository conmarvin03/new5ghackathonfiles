<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

Class Index_model extends CI_Model{

 	public function getEvents()
 	{
 		$this -> db -> select('*');
		$this -> db -> from('program');

   return $this->db->get()->result_array();
		}

		public function getEventss($id)
 	{
 		$this -> db -> select('*');
		$this -> db -> from('program');

        $this->db->where('programID', $id);

          return $this->db->get()->result_array();
      }
 }
 ?>