<?php    

 class Login extends CI_Controller {

   public function __construct(){

    parent::__construct();

     $this->load->model('Loggmodel');
   }


 	public function index(){

 	
 	

  

           $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]');
          if($this->form_validation->run()==true){


          

            $username = $this->input->post('username');
            $password = $this->input->post('password');

          $id =   $this->Loggmodel->login($username,$password);

       
          

          if($id){
             $this->session->set_userdata('id',$id);
             return redirect('blogin');
          }else{



           $this->session->set_flashdata('message',' Username/password is incorrect!');


            $this->load->view('admin/login');

          }


           
          }else{


          
          $this->load->view('admin/login');


          }

}

       public function logout(){

  $this->session->userdata('id');
  return redirect('login');

      
     }

     public function changepassword(){
      $this->form_validation->set_error_delimiters('<div class= "error">', "</div>" );
      $this->form_validation->set_rules('oldpass','Old password','callback_checkpassword');
      $this->form_validation->set_rules('newpass','New Password','required');
      $this->form_validation->set_rules('cpass','Confirm password','required|matches[newpass]');
      if($this->form_validation->run() == true){

        echo "okkk";
      }else{
      $this->load->view('admin/changepass');
    }
  }

   public function checkpassword($oldpass){

    $id= $this->session->set_userdata('id');

     $row['data'] = $this->db->get_where('login',['id'=>$id])->row($id);

      print_r($row);
      die();
    if($user->password !== md5($oldpass)){
      $this->form_validation->set_message('checkpassword','old password field is not mactch!');
      return FALSE;


    }

     return true;
   }

 }


 ?>