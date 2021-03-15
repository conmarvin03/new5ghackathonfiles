<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_model extends CI_Model {

    public function __construct() {  
        parent::__construct();
    }

function getContestants()
{
   $this->db->select('contestantID, username,password,tme1');
        $this->db->from('contestant');

   return $this->db->get()->result_array();
}function viewContestants($id)
{
   $this->db->select('*');
        $this->db->from('contestant');

        $this->db->where('contestantID',$id);

   return $this->db->get()->result_array();
}

 function editUser($contestantID,$username,$password,$tmfn1,$tmln1,$tme1,$contactno1 ,$pos,$org ,$tmfn2, $tmln2, $tme2,$contactno2 ,$tmfn3, $tmln3, $tme3,$contactno3,$tmfn4, $tmln4, $tme4,$contactno4 ,$tmfn5, $tmln5, $tme5,$contactno5)
 {
      $this->db->set('username',$username);
      $this->db->set('password',$password);
      $this->db->set('tmfn1',$tmfn1);
      $this->db->set('tmln1',$tmln1);
      $this->db->set('contactno1',$contactno1);
      $this->db->set('pos',$pos);
      $this->db->set('tmfn2',$tmfn2);
      $this->db->set('tmln2',$tmln2);
      $this->db->set('tme2',$tme2);
      $this->db->set('contactno2',$contactno2);
      $this->db->set('tmfn3',$tmfn3);
      $this->db->set('tmln3',$tmln3);
      $this->db->set('tme3',$tme3);
      $this->db->set('contactno3',$contactno3);
      $this->db->set('tmfn4',$tmfn4);
      $this->db->set('tmln4',$tmln4);
      $this->db->set('tme4',$tme4);
      $this->db->set('contactno4',$contactno4);
      $this->db->set('tmfn5',$tmfn5);
      $this->db->set('tmln5',$tmln5);
      $this->db->set('tme5',$tme5);
      $this->db->set('contactno5',$contactno5);
      $this->db->where('contestantID',$contestantID);
      $this->db->update('contestant');
        
        }

 function reply($concernID,$reply)
 { $this->db->set('reply',$reply);
 $this->db->set('status',"Replied");
      $this->db->where('concernID',$concernID);
      $this->db->update('concerns');
    }
   function changestatt($annid,$statussc)
   {
    $this->db->set('status', $statussc);
      $this->db->where('announcementID',$annid);
      $this->db->update('announcements');
   }
     function postann($data)
  
 {
       $this->db->insert('announcements',$data);
    }
function viewConcerns()
{
   $this->db->select('*');
        $this->db->from('concerns');


   return $this->db->get()->result_array();
}
function viewAnnouncement()
{
   $this->db->select('*');
        $this->db->from('announcements');


   return $this->db->get()->result_array();
}






function getBal($id)
{
 $this->db->select('balance, paymentMode');
        $this->db->from('finance');

        $this->db->where('financeID', $id);
   return $this->db->get()->result_array();

}function getPayment($id,$gradeLevel)
{
 $this->db->select('paymentID, payment');
        $this->db->from('payment');

        $this->db->where('studentID', $id);
        $this->db->where('gradeLevel', $gradeLevel);
   return $this->db->get()->result_array();

}

function viewUser()
{  

	   $this->db->select('userid, userlname,userfname,username,userlevel');
        $this->db->from('userlogin');

        $this->db->where('status', 'Active');
   return $this->db->get()->result_array();
		}
    function deadlineOnOff()
    {
      $this->db->select('stat');
        $this->db->from('deadline');
        $this->db->where('id',1);

   return $this->db->get()->result_array();

    } function deadlineOnOff1()
    {
      $this->db->select('stat');
        $this->db->from('deadline');
        $this->db->where('id',2);

   return $this->db->get()->result_array();

    }
    function upddatedeadline($sd)
    {
      $this->db->set('stat',$sd);
      $this->db->where('id','1');
      $this->db->update('deadline');

    }
    function upddatedeadline1($sd)
    {
      $this->db->set('stat',$sd);
      $this->db->where('id','2');
      $this->db->update('deadline');

    }
function viewStudent()
{  

     $this->db->select('studentID, firstName,lastName,middleName,gradeLevel,idNumber,password');
        $this->db->from('student');

        $this->db->where('status', 'Active');
   return $this->db->get()->result_array();
    }
    function viewstudents()

    {
        $query=$this->db->query('SELECT student.studentID,student.firstName,student.lastName,student.idNumber,student.gradeLevel,finance.balance FROM student INNER JOIN finance ON student.studentID=finance.financeID where  finance.balance >0 AND  student.status="Active"');
   if($query->num_rows() > 0)
  {
    return $query->result_array();
    }
    else
    {
      return false;
    }
    }function viewstudentsid($id)

    {
        $query=$this->db->query('SELECT student.studentID,student.gradeLevel,student.firstName,student.lastName,student.idNumber ,finance.paymentMode,student.gradeLevel,finance.balance FROM student INNER JOIN finance ON student.studentID=finance.financeID where student.status="Active" AND student.studentID='.$id);
   if($query->num_rows() > 0)
  {
    return $query->result_array();
    }
    else
    {
      return false;
    }
    }
    function addPayment($asd)
    {
       $this->db->insert('payment',$asd);

    }
    function updateFinance($balance,$paymentMode,$id)
    {
       $this->db->set('balance',$balance);

       $this->db->set('paymentMode',$paymentMode);
  $this->db->where('financeID',$id);
  $this->db->update('finance');

    }
function viewStudentid($ids)
{  

     $this->db->select('studentID, firstName,lastName,middleName,gradeLevel,idNumber,password');
        $this->db->from('student');

        $this->db->where('status', 'Active');

        $this->db->where('studentID', $ids);
   return $this->db->get()->result_array();
    }

    function viewGrades($gradeLevel,$studentID)
    {
$this->db->select('*');
        $this->db->from('grades');
        $this->db->where('gradeLevel', $gradeLevel);
        $this->db->where('gradeID', $studentID);
   return $this->db->get()->result_array();
    } 
    function viewGradesAll()
    {
$query=$this->db->query("SELECT student.firstName,student.lastName,student.middleName,student.gradeLevel,student.idNumber,
ROUND((grades.1math+grades.1science+grades.1filipino+grades.1english+grades.1gmrc+grades.1hekasi)/6,2) AS 'firstgrading',
ROUND((grades.2math+grades.2science+grades.2filipino+grades.2english+grades.2gmrc+grades.2hekasi)/6,2) AS 'secondgrading',
ROUND((grades.3math+grades.3science+grades.3filipino+grades.3english+grades.3gmrc+grades.3hekasi)/6,2) AS 'thirdgrading',
ROUND((grades.4math+grades.4science+grades.4filipino+grades.4english+grades.4gmrc+grades.4hekasi)/6,2) AS 'fourthgrading',
ROUND((ROUND((grades.1math+grades.1science+grades.1filipino+grades.1english+grades.1gmrc+grades.1hekasi)/6,2)+ROUND((grades.2math+grades.2science+grades.2filipino+grades.2english+grades.2gmrc+grades.2hekasi)/6,2) +ROUND((grades.3math+grades.3science+grades.3filipino+grades.3english+grades.3gmrc+grades.3hekasi)/6,2) +ROUND((grades.1math+grades.1science+grades.1filipino+grades.1english+grades.1gmrc+grades.1hekasi)/6,2))/4,2) AS 'finalgrading' FROM student INNER Join grades on student.studentID = grades.gradeID AND grades.status='Active'");
     if($query->num_rows() > 0)
  {
    return $query->result_array();
    }
    else
    {
      return false;
    }
    
    }
 function viewPastGrades()
    {
$query=$this->db->query("SELECT student.firstName,student.lastName,student.middleName,student.gradeLevel,student.idNumber,
ROUND((grades.1math+grades.1science+grades.1filipino+grades.1english+grades.1gmrc+grades.1hekasi)/6,2) AS 'firstgrading',
ROUND((grades.2math+grades.2science+grades.2filipino+grades.2english+grades.2gmrc+grades.2hekasi)/6,2) AS 'secondgrading',
ROUND((grades.3math+grades.3science+grades.3filipino+grades.3english+grades.3gmrc+grades.3hekasi)/6,2) AS 'thirdgrading',
ROUND((grades.4math+grades.4science+grades.4filipino+grades.4english+grades.4gmrc+grades.4hekasi)/6,2) AS 'fourthgrading',
ROUND((ROUND((grades.1math+grades.1science+grades.1filipino+grades.1english+grades.1gmrc+grades.1hekasi)/6,2)+ROUND((grades.2math+grades.2science+grades.2filipino+grades.2english+grades.2gmrc+grades.2hekasi)/6,2) +ROUND((grades.3math+grades.3science+grades.3filipino+grades.3english+grades.3gmrc+grades.3hekasi)/6,2) +ROUND((grades.1math+grades.1science+grades.1filipino+grades.1english+grades.1gmrc+grades.1hekasi)/6,2))/4,2) AS 'finalgrading' FROM student INNER Join grades on student.studentID = grades.gradeID WHERE grades.status='Archive'");
     if($query->num_rows() > 0)
  {
    return $query->result_array();
    }
    else
    {
      return false;
    }
    
    }

function passStudent($gradeLevel,$gradeID)
{

  $this->db->set('status','Archive');
  $this->db->where('gradeID',$gradeID);
  $this->db->where('gradeLevel',$gradeLevel);
  $this->db->update('grades');


  $this->db->set('status','Archive');
  $this->db->where('studentID',$gradeID);
  $this->db->where('gradeLevel',$gradeLevel);
  $this->db->update('student');
}
function viewUsers($studentID)
{  

     $this->db->select('studentID, firstName,lastName,middleName,idNumber');
        $this->db->from('student');

        $this->db->where('studentID', $studentID);
   return $this->db->get()->result_array();
    }
    function viewStudentinfo()
    {  $query=$this->db->query('Select student.studentID,student.lastName,student.gradeLevel,student.birthDay,student.idNumber,student.firstName,student.middleName,userlogin.userFName,userlogin.userLName,userlogin.userID FROM student INNER JOIN userlogin ON student.teacherID=userlogin.userID where student.status="Active"');

     if($query->num_rows() > 0)
  {
    return $query->result_array();
    }
    else
    {
      return false;
    }
    

    }    function viewStudentinfoss($id)
    {  $query=$this->db->query('Select student.studentID,student.password,student.lastName,student.gradeLevel,student.birthDay,student.idNumber,student.firstName,student.middleName,userlogin.userFName,userlogin.userLName,userlogin.userID FROM student INNER JOIN userlogin ON student.teacherID=userlogin.userID  where student.studentID = '.$id);

     if($query->num_rows() > 0)
  {
    return $query->result_array();
    }
    else
    {
      return false;
    }
    }
    function addfin($asd)
    {  $this->db->insert('finance',$asd);


    }
function addstudentss($data)
{


      $this->db->insert('student',$data);

    if ($affected_rows > 0) {
            return true;
        } else {
            return false;
        }
           
}


function addgrades($data)
{

      $this->db->insert('grades',$data);

    if ($affected_rows > 0) {
            return true;
        } else {
            return false;
        }
}
    function viewTeachers()
{  

     $this->db->select('userID, userFName,userLName,userlevel');  
        $this->db->from('userlogin');

        $this->db->where('userlevel', 2);
   return $this->db->get()->result_array();
    }
 function check_if_exst($id) {
        $this->db->select('*');
        $this->db->from('userlogin');
        $this->db->where('userID', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

 function viewUseriD($id)
    {  
          $this->db->select('userID, userlname,userfname,username,userlevel,password');
          $this->db->from('userlogin');
          $this->db->where('userID', $id);
          return $this->db->get()->result_array();
    }

function viewUserteacher($ID)
  {  
    $query=$this->db->query('Select student.studentID,student.lastName,student.firstName,student.gradeLevel,student.idNumber FROM student INNER JOIN grades ON student.studentID=grades.gradeID  where grades.status="Active" and student.teacherID = '.$ID);

	   if($query->num_rows() > 0)
        {
          return $query->result_array();
        }
    
    else
        {
          return false;
        }
	}


  function viewteacher()
    {  
        $query=$this->db->query('Select userlogin.userFName,userlogin.userLName,userlogin.userID FROM userlogin where userlogin.userlevel = 2');

     if($query->num_rows() > 0)
        {
          return $query->result_array();
        }

    else
        {
          return false;
        }
    }






  function addAnnouncement($data)
    {
      $this->db->insert('announcement',$data);
      if ($affected_rows > 0)
          {
            return true;
          }

      else 
          {
            return false;
          }

   
    }

    function draftannouncement()
      {  

          $this->db->select('userid, what,wheree,whenn,who,announcementID');
          $this->db->from('announcement');
          $this ->db->where('announcementID', 1);
          return $this->db->get()->result_array();
        }
 function updateGrades($gradeID,$gradeLevel,$math,$math1,$math2,$math3,$sci1,$sci2,$sci3,$sci4,$fil1,$fil2,$fil3,$fil4,$eng1,$eng2,$eng3,$eng4,$gmrc1,$gmrc2,$gmrc3,$gmrc4,$hek1,$hek2,$hek3,$hek4){
 
  $this->db->set('1math',$math);
  $this->db->set('2math',$math1);
  $this->db->set('3math',$math2);
  $this->db->set('4math',$math3);
  $this->db->set('1science',$sci1);
  $this->db->set('2science',$sci2);
  $this->db->set('3science',$sci3);
  $this->db->set('4science',$sci4);
  $this->db->set('1filipino',$fil1);
  $this->db->set('2filipino',$fil2);
  $this->db->set('3filipino',$fil3);
  $this->db->set('4filipino',$fil4);
  $this->db->set('1english',$eng1);
  $this->db->set('2english',$eng2);
  $this->db->set('3english',$eng3);
  $this->db->set('4english',$eng4);
  $this->db->set('1gmrc',$gmrc1);
  $this->db->set('2gmrc',$gmrc2);
  $this->db->set('3gmrc',$gmrc3);
  $this->db->set('4gmrc',$gmrc4);
  $this->db->set('1hekasi',$hek1);
  $this->db->set('2hekasi',$hek2);
  $this->db->set('3hekasi',$hek3);
  $this->db->set('4hekasi',$hek4);
  $this->db->where('gradeID',$gradeID);
  $this->db->where('gradeLevel',$gradeLevel);
     $this->db->update('grades');
}
         function editstudentinformation($fname,$lname,$username,$password,$id){
      $this->db->set('firstName',$fname);
      $this->db->set('lastName',$lname);
      $this->db->set('idNumber',$username);
      $this->db->set('password',$password);
      $this->db->where('studentID',$id);
      $this->db->update('student');
        
        }
        

  function editStudent($fname,$lname,$mname,$password,$bday,$ids){
      $this->db->set('firstName',$fname);
      $this->db->set('lastName',$lname);
      $this->db->set('middleName',$mname);
      $this->db->set('password',$password);
      $this->db->set('birthDay',$bday);
      $this->db->where('studentID',$ids);
      $this->db->update('student');
        
        }
    
    function delete($id)
        {

          $this->db->set('status', 'Archive');
          $this->db->where('userID', $id);
          $this->db->update('userlogin');
        }  

    function deleteStud($id)
        {

          $this->db->set('status', 'Archive');
          $this->db->where('studentID', $id);
          $this->db->update('student');
        }

    function autofill()
    {
        $this->db->select('firstName');
        $this->db->from('student');
        $this->db->where('idNumber',151645884);
        return $this->db->get()->result_array();
    }
}