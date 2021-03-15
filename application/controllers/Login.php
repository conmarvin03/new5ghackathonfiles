<?php if (defined('ENVIRONMENT'))

{

  switch (ENVIRONMENT)

  {

    case 'development':

    case 'testing':

    case 'staging':

      error_reporting(E_ALL & ~E_NOTICE);

    break;



    case 'production':

      error_reporting(0);

    break;



    default:

      exit('The application environment is not set correctly.');

  }

} 

class Login extends CI_Controller 

{

  private $asd;

 

  function __construct()

  {

   parent::__construct();

   $this->load->model('login_model');

 }



 function index()

 {



   $this->form_validation->set_rules('username', 'Username', 'trim|required');

   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

    if($this->form_validation->run() == false)

   {

    $this->load->view('login_view');

  }

  else

  {

    $userLevel=$this->asd;

    if($userLevel=="1")

    {

   redirect(base_url('admin/welcome'), 'refresh');

    }

    elseif($userLevel=="2")

    {

   redirect(base_url('judge/welcome'), 'refresh');

    }

  

    else

    {

        redirect(base_url('/welcome'), 'refresh');

  

    }

   

}

   }

function check_database($password)

{

   //Field validation succeeded.  Validate against database

 $username = $this->input->post('username');

 $employee = $this->login_model->login($username, $password);

if($employee){

  $employee_sess = array();



  foreach($employee as $row)

  {

   $employee_sess = array(



    'lname' =>  $row->lastName,

    'fname' =>  $row->firstName,

    'user_id' => $row->userID,

    'username' => $row->username,



    'userlevel' => $row->userLvl,



  );



   $this->session->set_userdata('employee_login', $employee_sess);

 }

 $this->asd=$row->userLvl;

 return TRUE;

}

else

{





  $contestant=$this->login_model->logincontestant($username, $password);

  if($contestant)

  {

  $conestant_sess = array();



  foreach($contestant as $row)

  {

   $contestant_sess = array(

    'username' =>  $row->username,

    'contestantID' => $row->contestantID,

    'tme1' => $row->tme1,

    'activated' =>$row->activated,

    'loginactivator'=>$row->loginactivator



  );



   $this->session->set_userdata('contestant_login', $contestant_sess);

 }

if($row->activated==0)

{

 $this->form_validation->set_message('check_database', '<h4 style="color:red;">Please verify your team account by clicking the link sent to '.$row->tme1.'!</h4>');

return False;

}else{



$this->login_model->updcn($username,0,0);

$randy=rand ( 1000 , 9999 );

if($row->loginactivator==0)

{

$this->login_model->random($row->contestantID,$randy);



}

 return TRUE;

}

  }

  else{





  $contestan=$this->login_model->chckid($username);

if($contestan)

{





  foreach($contestan as $rows)

  {

   $contestant_sess = array(

    'attempt' =>  $rows->attempt,

    'logTime' => $rows->logTime

  );

}

date_default_timezone_set("Asia/Manila");

$date_now = date("m/d/Y");

$time_now = date("h:i a");



$end_time = date("h:i A", strtotime("+5 minutes", strtotime($time_now)));

$logTime=strtotime($rows->logTime);

             $new_time = strtotime($time_now);







if($logTime>= $new_time)

{

 $this->form_validation->set_message('check_database', '<div class="alert alert-danger" role="alert"><h4>Account Disabled</h4><p> Your account has been disabled, you can try again in '.$end_time.'. For questions or concern you can email us at test@gmail.com. Thank you!</p></div>');

 return false;

}else{





















  if($rows->attempt==4)

   {





$this->login_model->updcn($username,$end_time,0);

 $this->form_validation->set_message('check_database', '<div class="alert alert-danger" role="alert"><h4>Account Disabled</h4><p> Your account has been disabled, you can try again in '.$end_time.'. For questions or concern you can email us at test@gmail.com. Thank you!</p></div>');

 return false;

   }

   else if($rows->attempt==0){

$this->login_model->updcn($username,0,1);

 $this->form_validation->set_message('check_database', '<div class="alert alert-danger" role="alert"><h4>Invalid username or password</h4></div>');

 return false;

}else

{

$attempt=$rows->attempt+1;

$left= 5-$attempt;

$this->login_model->updcn($username,0,$attempt);



 $this->form_validation->set_message('check_database', '<div class="alert alert-danger" role="alert"><h4>Wrong Password! You only have '.$left.' tries left. </div>');

 return false;

 

}





} $this->form_validation->set_message('check_database', '<div class="alert alert-danger" role="alert">Invalid username or password</h4></div>');

 return false;

}else

{

  $this->form_validation->set_message('check_database', '<div class="alert alert-danger" role="alert">Invalid username or password</div>');

 return false;

}

}

}



}}



?>