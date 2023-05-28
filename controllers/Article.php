<?php   

class  Article extends CI_Controller{

	public function index(){

		echo "omkkk";
		


		$this->load->view('admin/article/list');
	}


	public function create(){
		$this->load->model('Category_model');
	
		$categories =	$this->Category_model->getcategories();
		 $data['categries']=$categories;
       $this->load->view('admin/article/create',$data);

       $this->form_validation->set_rules('category','category','required');
         $this->form_validation->set_rules('title','Title','required');
           $this->form_validation->set_rules('description','Description','required');

             if($this->form_validation->run()==true){
              //   form validation succesfully

             }else{
               //       invalid
             //	 $this->load->view('admin/article/create',$data);
             }




	}
}

 ?>