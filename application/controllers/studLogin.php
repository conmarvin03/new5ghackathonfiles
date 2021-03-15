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
class StudLogin extends CI_Controller 
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
    $this->load->view('studlogin_view');
  }
  else
  {
    
   redirect(base_url('registrar/welcome'), 'refresh');
    }
   
}
   }
function check_database($password)
{
   //Field validation succeeded.  Validate against database
 $username = $this->input->post('username');
 $student = $this->login_model->loginstud($username, $password);
if($student){
  $student_sess = array();

  foreach($student as $row)
  {
   $employee_sess = array(

    'firstName' =>  $row->firstName,
    'studentID' => $row->studentID,
    'username' => $row->userName,

    'gradeLevel' => $row->gradeLevel,

  );

   $this->session->set_userdata('employee_login', $student_sess);
 }
 $this->asd=$row->userlevel;
 return TRUE;
}
else
{
  $this->login_model->login($username, $password);
 $this->form_validation->set_message('check_database', 'Invalid username or password');
 return false;
}
}

}

?>