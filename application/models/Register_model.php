<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
function addUser($em_data)
{  $this->db->insert('userlogin',$em_data);

    if ($affected_rows > 0) {
            return true;
        } else {
            return false;
        }
   
    }
        function checkTeam()
{  

     $this->db->select('teamname');  
        $this->db->from('contestant');
   return $this->db->get()->result_array();
    }
    function addContestant($data)
    {
    	$this->db->insert('contestant',$data);

    if ($affected_rows > 0) {
            return true;
        } else {
            return false;
        }
        }
        public function checkuser($teamname) 
    {
        $this->db->where('teamname',$teamname);
        $query=$this->db->get('contestant');
        if($query->num_rows()>0)
        {
        return 1;   
        }
        else
        {
        return 0;   
        }
    }

    function verifyEmailID($key)
    {
        $data = array('activated' => 1);
        $this->db->where('md5(tme1)', $key);
        return $this->db->update('contestant', $data);
    }

}  
?>