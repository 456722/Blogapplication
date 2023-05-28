<?php   
 class Home extends CI_Controller{

    public function __construct(){
    parent::__construct();
    $this->load->model('Comment_model');
    $this->load->model('Bloginmodel');

    
    }

 	 public function index(){

  

  $data = array();
  $allblogs =  $this->Bloginmodel->all();
   $featured=   $this->Bloginmodel->allfeatured();
   $promo   =   $this->Bloginmodel->allpromo();

   $data['allblogs'] =  $allblogs;
   $data['featured'] =  $featured; 
   $data['promo']    =   $promo; 
      
 //  print_r($promo);
 //  die();
    

     $this->load->view('home/new',$data);
     
 	 }


      public function blogdetail($id){


      $comments= $this->Comment_model->allblogcomment($id);
      
      $data['comments'] = $comments;
    //    print_r($data);
    //   die();

      $blog['data'] = $this->db->get_where('blog',['id'=>$id])->row();

   // print_r($blog);
   // die();
      if(empty($blog)){
         return redirect('home');
      }
     
      $this->form_validation->set_error_delimiters('<div class= "error">', "</div>" );
      $this->form_validation->set_rules('name','Name','required');
      $this->form_validation->set_rules('comment','Comment','required');
     
      if($this->form_validation->run() == true){

         $data  = array(
         'name'=>$this->input->post('name'),
         'blog_id'=>$id,
         'comment'=>$this->input->post('comment'),
         'created_at'=>date('y-m-d'),
         );
        
     //   print_r($data);
     //   die();

         $this->Comment_model->insert($data);
         $this->session->set_flashdata('message','comment inserted succesfully');
         redirect('home');


      }else{
      $this->load->view('home/detail',$blog);

   }

   }
 }


  ?>