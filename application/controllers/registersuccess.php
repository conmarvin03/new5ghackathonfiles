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
class Registersuccess extends CI_Controller 
{
  function __construct()
  {
   parent::__construct();
   $this->load->model('register_model','register');
 }

 function index($zxc)
 {

$this->load->view('registersuccess_view',$zxc);
 }

}
?>