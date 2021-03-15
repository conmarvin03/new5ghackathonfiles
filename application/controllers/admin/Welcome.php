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

class Welcome extends CI_Controller {

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
            $view= $this->manage->viewConcerns();
            $data['datas'] = $view;
            // $view= $this->manage->viewAnnouncement();   //display annnouncements
            // $data['datas'] = $view;
            $this->load->view('pages/admin/welcome_view', $data);
        }
        else
        {
            redirect(base_url('/login'), 'refresh');
        }
    }
     function reply()
    {
         $concernID= $this->input->post('concernID');   
         $reply= $this->input->post('reply');

    $result =$this->manage->reply($concernID,$reply);
 if ($result) {
              $this->session->set_flashdata('error_msg' , 'Failed to edit user info!');
            # code...
        }
        else{$this->session->set_flashdata('success_msg' , 'Reply sent successfuly!');
          

        }
        redirect(base_url('admin/welcome/'));

    }
    }

 