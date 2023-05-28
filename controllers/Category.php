<?php     
 class Category extends CI_Controller{

 	public function index(){

    $this->load->model('Category_model');

    $query_string = $this->input->get('q');
    $params['query_string'] = $query_string;
   $categories = $this->Category_model->getcategories($params);

    $data['categories'] = $categories;

   $this->load->view('admin/Categories/list',$data);

 	}

 	public function create(){

       $config['upload_path']          = './upload/';
       $config['allowed_types']        = 'gif|jpg|png';
        $config['allowed_name']        =  TRUE;
       
       

       $this->load->library('upload', $config); 

    $this->load->model('Category_model');
    $this->form_validation->set_error_delimiters('<div class= "error">','</div>');


  $this->form_validation->set_rules('name','Name','required');

  if($this->form_validation->run()==true){
    
   
    
    if(!empty($_FILES['image']['name'])){
  
   if ($this->upload->do_upload('image')){
   // successfully upload



    $data = $this->upload->data();

   //   echo "<pre>";
  //    print_r($data);
  //     echo "</pre>"; 
 //      die();
      
    $formArray['image']  = $data['file_name'];
     $formArray['name']  = $this->input->post('name');
     $formArray['status']  = $this->input->post('status');
      $formArray['created_at']  = date('y-m-d H:i:s');
     $this->Category_model->create($formArray);
     $this->session->set_flashdata('success','Category added successfully');
     redirect(base_url().'Category/index');


   }else{

       // some errors
       $error = $this->upload->display_errors("<p class 'invalid-feedback'>",'</p>');
       $data['errorImageUpload']  =  $error;
       $this->load->view('admin/categories/create',$data);

   }


    }else{
     

    $formArray['name']  = $this->input->post('name');
     $formArray['status']  = $this->input->post('status');
      $formArray['created_at']  = date('y-m-d H:i:s');
     $this->Category_model->create($formArray);
     $this->session->set_flashdata('success','Category added successfully');
     redirect(base_url().'Category/index');



    }

  }else{
    $this->load->view('admin/categories/create');
  }
  
 	}

 	public function edit($id){
   
    $this->load->model('Category_model');
 $category =  $this->Category_model->edit($id);

   $data['category']=$category;

    $this->load->view('admin/categories/edit',$data);

 	}

  public function update($id){
    echo "yesssss";

    $this->load->model('Category_model');
     $category= new Category_model;
       $category->update($id);
       redirect(base_url('category'));
  //  $category= new Category_model;

   // $category->update($id);


  }


 	public function delete($id){

 echo "okkkkk";
   $this->load->model('Category_model');
    $this->Category_model->delete($id);


 	}

 }




?>