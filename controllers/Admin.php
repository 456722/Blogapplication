<?php   
class Admin extends CI_Controller{

	public function __construct(){


		parent::__construct();

		$this->load->model('Matchmodel');
	}

	public function index(){
     
	}

	public function login(){
				
    $this->form_validation->set_error_delimiters(
            '<div class= "error">',
            "</div>");

		$this->form_validation->set_rules('email',"Email",'required|min_length[8]');
		$this->form_validation->set_rules('password',"Password",'required|min_length[4]');

		if($this->form_validation->run()== true){


			 $email =   $this->input->post('email');
            $password = $this->input->post('password');
      
		$id  = 	$this->Matchmodel->login($email,$password);


		 //  print_r($id);
	//	 die();

	   

		  if($id)
			$this->session->set_userdata('id',$id);


			return redirect('school/category');


		}else{

			 $this->session->set_flashdata('errorMsg','Either Username/password is incorrect.');


		$this->load->view('signin/login');


	}
	}

	 public function logout(){

	 	echo "yesss";
	 	if($this->session->unset_userdata('id',$id));
	 	return redirect('admin/login');
	 }
}




 ?>