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
class Viewuser extends CI_Controller {

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
            
            $idz=$_POST['id'];

             $views= $this->manage->viewContestants($idz);
             $data['datas'] = $views;
            // $view= $this->manage->viewAnnouncement();   //display annnouncements
            // $data['datas'] = $view;
            $this->load->view('pages/admin/viewuser_view', $data);
        }
        else
        {
            redirect(base_url('/login'), 'refresh');
        }
    }
     function editeams()
    {
         $contestantID= $this->input->post('id');   
         $username= $this->input->post('username');
         $password= $this->input->post('password');
         $tmfn1= $this->input->post('tmfn1');
         $tmln1= $this->input->post('tmln1');
         $tme1= $this->input->post('tme1');
         $contactno1= $this->input->post('contactno1');
         $pos= $this->input->post('pos');
         $org= $this->input->post('org');
        $tmfn2= $this->input->post('tmfn2');
         $tmln2= $this->input->post('tmln2');
         $tme2= $this->input->post('tme2');
         $contactno2= $this->input->post('contactno2');
          $tmfn3= $this->input->post('tmfn3');
         $tmln3= $this->input->post('tmln3');
         $tme3= $this->input->post('tme3');
         $contactno3= $this->input->post('contactno3');
          $tmfn4= $this->input->post('tmfn4');
         $tmln4= $this->input->post('tmln4');
         $tme4= $this->input->post('tme4');
         $contactno4= $this->input->post('contactno4');
          $tmfn5= $this->input->post('tmfn5');
         $tmln5= $this->input->post('tmln5');
         $tme5= $this->input->post('tme5');
         $contactno5= $this->input->post('contactno5');


    $result =$this->manage->editUser($contestantID,$username,$password,$tmfn1,$tmln1,$tme1,$contactno1 ,$pos,$org ,$tmfn2, $tmln2, $tme2,$contactno2 ,$tmfn3, $tmln3, $tme3,$contactno3 ,$tmfn4, $tmln4, $tme4,$contactno4 ,$tmfn5, $tmln5, $tme5,$contactno5);

    if ($result) {
              $this->session->set_flashdata('error_msg' , 'Failed to edit user info!');
            # code...
        }
        else{$this->session->set_flashdata('success_msg' , 'User information edit successfuly!');
          

        }
        redirect(base_url('admin/manageusers/'));

    
        
        }
    }

 