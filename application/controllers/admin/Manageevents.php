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
class Manageevents extends CI_Controller {

  function __construct() {
        parent::__construct();
        $this->load->model('manage_model', 'manage');
    }

	public function index()
	{
		if ($this->session->userdata('employee_login')){
          
            $session_data = $this->session->userdata('employee_login');
            $data['user_id'] = $session_data['user_id'];
            $data['lname'] = $session_data['lname'];
            $data['fname'] = $session_data['fname']; 
            $data['fname'] = $session_data['fname']; 
            $data['userlevel'] = $session_data['userlevel']; 
            
            // $view= $this->manage->viewAnnouncement();   //display annnouncements
            // $data['datas'] = $view;
            $this->load->view('pages/admin/manageevents_view', $data);
        }
        else
        {
            redirect(base_url('/login'), 'refresh');
        }
    }
    }

 