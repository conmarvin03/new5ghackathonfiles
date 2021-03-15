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
class Announcements extends CI_Controller {

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
            $view= $this->manage->viewAnnouncement();
            $data['datas'] = $view;
            // $view= $this->manage->viewAnnouncement();   //display annnouncements
            // $data['datas'] = $view;
            $this->load->view('pages/admin/announcements_view', $data);
        }
        else
        {
            redirect(base_url('/login'), 'refresh');
        }
    }
    function postan()
    {

         $title= $this->input->post('title');   
         $announcement= $this->input->post('announcement');
 $em_data = array(
            'title'=> $title,
            'message'=> $announcement,
            'status'=> "ON"
        );
    $result =$this->manage->postann($em_data);
 if ($result) {
              $this->session->set_flashdata('error_msg' , 'Failed to edit user info!');
            # code...
        }
        else{$this->session->set_flashdata('success_msg' , 'Annoucement posted successfuly!');
          

        }
        redirect(base_url('admin/announcements/'));
    }
    function changestat()
    {
         $annid= $this->input->post('annid');   
         $statuss= $this->input->post('statuss');
         if($statuss=="ON")
         {
            $statussc="OFF";
         }else
         {
             $statussc="ON";
         }

    $result =$this->manage->changestatt($annid,$statussc);
    if ($result) {
              $this->session->set_flashdata('error_msg' , 'Failed to edit user info!');
            # code...
        }
        else{$this->session->set_flashdata('success_msg' , 'Status of announcement changed successfuly!');
          

        }
        redirect(base_url('admin/announcements/'));
    }
    
}