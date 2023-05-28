<?php 
 
  class Dashboard extends CI_Controller{


  	public function __construct(){

  		parent::__construct();
  	}

  	 public function index(){

  	 	$this->load->view('dashboard/dashboard');
  	 }

      public function email(){
         $this->form_validation->set_error_delimiters( '<div class= "error">',  "</div>"); 

         $this->form_validation->set_rules('email','Email','required');
         if($this->form_validation->run() == true){

          echo "okkkk";
          // $this->load->library('email');

           $config['protocol']  = 'smtp';
        $config['smtp_host'] = 'mail.imrostom.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = 'imrostom@imrostom.com';
        $config['smtp_pass'] = 'imrostomali';

        // Load email library and passing configured values to email library
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        // Sender email address
        $this->email->from('rrr@gmail.com', 'ss');
        // Receiver email address
        $this->email->to('rostomali4444@gmail.com');
        // Subject of email
        $this->email->subject('subject');
        // Message in email
        $this->email->message('Message Send Here');
        $this->email->send();
        $this->email->print_debugger(array('headers'));
         }else{

        $this->load->view('dashboard/dashboard');

    }
    
   
  }


     public function add(){

      
       
     }

      }

  	
  



 ?>