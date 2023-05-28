<?php   

 class Blog extends CI_Controller{

    public function __construct(){

    parent::__construct();
    $this->load->model('Blogmodel');
    }

    public function index(){

        
      $result['data'] =   $this->Blogmodel->list();
        $this->load->view('blog/list',$result);

    }

 	 public function add(){


       $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        $this->form_validation->set_rules('description','Description','required|min_length[10]');
        $this->form_validation->set_rules('title','Title','required|min_length[4]');
        $this->form_validation->set_rules('aouthor','Aouthor','required|min_length[4]');
        $this->form_validation->set_rules('special','special','required|min_length[4]');

        if($this->form_validation->run()==true){

        	echo "okkk";

         $formArray  = array(
         'description' => $this->input->post('description'),
         'title' => $this->input->post('title'),
         'aouthor' => $this->input->post('aouthor'),
         'special' => $this->input->post('special'),
         'created_at' => date('y-m-d'),

           );

       

         $this->Blogmodel->create($formArray);

         $this->session->set_flashdata('success','Blog Added Successfull' );

         redirect('blog');
 	 	
        }else{

        	 $this->load->view('blog/add'); 
        }

 	 }



     public function edit($id){

          $this->db->where('id',$id);
        $blog  = $this->db->get('blogs')->row_array();
           if(!$blog){


         $this->session->set_flashdata('success','Records Not Found ' );
            redirect('blog');
         }

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('description','Description','required|min_length[10]');
        $this->form_validation->set_rules('title','Title','required|min_length[4]');
        $this->form_validation->set_rules('aouthor','Aouthor','required|min_length[4]');
        $this->form_validation->set_rules('special','special','required|min_length[5]');
        if($this->form_validation->run()==true){

            echo "okkk";

         $formArray  = [
         'description' => $this->input->post('description'),
         'title' => $this->input->post('title'),
         'aouthor' => $this->input->post('aouthor'),
         'special' => $this->input->post('special'),
         'created_at' => date('y-m-d'),

           ];

       

         $this->Blogmodel->updatedata($id,$formArray);

         $this->session->set_flashdata('success','Blog updated Successfull' );

         redirect('blog');
        
        }else{

             $this->load->view('blog/edit',["blog"=>$blog]); 
        }


       
     }

       public function delete($id){

        $this->db->where('id',$id);
        $this->db->delete('blogs');
         $this->session->set_flashdata('success','Blog deleted Successfull' );
        redirect('blog');
       }
 }



 ?>