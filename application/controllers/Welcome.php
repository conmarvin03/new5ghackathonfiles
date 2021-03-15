<?php
if (defined('ENVIRONMENT'))
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
class Welcome extends CI_Controller {


	public function index()
	{
		if ($this->session->userdata('contestant_login')){
          
            $session_data = $this->session->userdata('contestant_login');
            $data['contestantID'] = $session_data['contestantID'];
            $data['username'] = $session_data['username'];
            $this->load->view('welcome_view', $data);
        }
        else
        {
            redirect(base_url('/login'), 'refresh');
        }
    }
    }

