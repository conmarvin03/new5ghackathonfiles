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
class Registernew extends CI_Controller 
{
  private $asd;
 
  function __construct()
  {
   parent::__construct();
   $this->load->model('register_model','register');
 }

 function index()
 {
 	$teamNames=$this->register->checkTeam();
 	   $data['userdata']=$teamNames;
$this->load->view('registernew_view',$data);
 }  
 
 function register(){
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          redirect(base_url('registernew'));
        
    }
   
    try{
      $teamname= $this->input->post('teamname');
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
      $quest1= $this->input->post('quest1');
      $reason= $this->input->post('reason');
      $quest2= $this->input->post('quest2');
      $teamnames = preg_replace('/\s*/', '', $teamname);
      $username = strtolower($teamnames);
     if($teamname=="")
     {
        redirect(base_url('registernew'));
        $this->session->set_flashdata('error_msg' , 'Please input information needed!');
     
     }else
     {
      $em_data = array( 
        'teamname'=> $teamname,
        'username'=> $username,
        'password'=> $password,
        'tmfn1'=> $tmfn1,
        'tmln1'=> $tmln1,
        'tme1'=> $tme1,
        'contactno1'=> $contactno1,
        'pos'=> $pos,
        'org'=> $org,
        'tmfn2'=> $tmfn2,
        'tmln2'=> $tmln2,
        'tme2'=> $tme2,
        'contactno2'=> $contactno2,
        'tmfn3'=> $tmfn3,
        'tmln3'=> $tmln3,
        'tme3'=> $tme3,
        'contactno3'=> $contactno3,
        'tmfn4'=> $tmfn4,
        'tmln4'=> $tmln4,
        'tme4'=> $tme4,
        'contactno4'=> $contactno4,
        'tmfn5'=> $tmfn5,
        'tmln5'=> $tmln5,
        'tme5'=> $tme5,
        'contactno5'=> $contactno5,
        'quest1'=> $quest1,
        'reason'=> $reason,
        'quest2'=> $quest2, 'activated' => 0
      );
      $result =$this->register->addContestant($em_data);
      if ($result) {
        $this->session->set_flashdata('error_msg' , 'Failed to add new user!');
      }else{
        $this->session->set_flashdata('success_msg' , 'Registered Successfully! Please click the link sent to your email for verification purposes before logging in (Check Spam Messages).<a href="http://gmail.com/"   target="_blank">Go to email </a>');
        $subject = 'Verify Your Email Address';
        $message = 'Dear '.$tmfn1.' ,<br />Use <b>'.$username.'</b> as your team username and <b>'.$password.' </b> as your team password. <br />Please click on the below activation link to verify your email address.<br /><br />' . base_url() . 'Registernew/verify/' . md5($tme1) . '<br /><br /><br />Good luck to you and your team!<br />Animo Labs x Globe';
       

        $emailconfig = Array(
            'protocol' => 'sendmail',
            'smtp_host' => 'localhost',
            'smtp_port' => 25,
            'smtp_user' => 'conaaanzxc@gmail.com',
            'smtp_pass' => 'Consy03!',
            'mailtype' => 'html',
    'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $emailconfig);
        $this->email->set_newline("\r\n");
        $this->email->from('conaaanzxc@gmail.com', 'Email Verification 5G Competition');
        $this->email->to($tme1);
        $this->email->subject("Animo Labs 5G-Competition");
        $this->email->message($message);
        $this->email->send();
        redirect(base_url('registernew'));
      }
    }}
  catch (\Exception $e){
    $this->load->view('Auth_view');
  }
}
public function checkUser()
   {
      
        $teamname=$this->input->post('teamname');
                
        $result=$this->register->checkuser($teamname);
        if($result)
        {
        echo  1;    
        }
        else
        {
        echo  0;    
        }
    }
 function verify($hash = NULL) {
        if ($this->register->verifyEmailID($hash)) {
            $this->session->set_flashdata('success_msg', '<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
        
        
        redirect(base_url('login'));
        } else {
            $this->session->set_flashdata('error_msg', '<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
     
        
        redirect(base_url('login'));
        }
    }



    function send_email($email) {
       
    }   
}


    //     $emailconfig = Array(
    //         'protocol' => 'sendmail',
    //         'smtp_host' => 'localhost',
    //         'smtp_port' => 25,
    //         'smtp_user' => 'conaaanzxc@gmail.com',
    //         'smtp_pass' => 'Consy03!',
    //         'mailtype' => 'html',
    // 'charset'   => 'iso-8859-1'
    //     );
    //     $this->load->library('email', $emailconfig);
    //     $this->email->set_newline("\r\n");
    //     $this->email->from('conaaanzxc@gmail.com', 'Email Verification 5G Competition');
    //     $this->email->to($tme1);
    //     $this->email->subject("Animo Labs 5G-Competition");
    //     $this->email->message($message);
    //     $this->email->send();
    
        
?>
