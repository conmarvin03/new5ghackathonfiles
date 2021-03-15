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
class PrivacyPolicy extends CI_Controller 
{
  private $asd;
 
  function __construct()
  {
   parent::__construct(); }

 function index()
 {
$this->load->view('privacypolicy_view');
 }
}
?>
