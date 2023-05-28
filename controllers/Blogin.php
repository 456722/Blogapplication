<?php  

 class Blogin extends CI_Controller{

 	public function __construct(){

 		parent::__construct();
        $this->load->model('Bloginmodel');
 	}


    



 	public  function index(){

 		$this->load->view('blogin/dashboard');
 	}

 	 public function addblog(){
        $this->form_validation->set_error_delimiters('<div class= "error">', "</div>" );
        $this->form_validation->set_rules('title','Title','required|min_length[4]');
        $this->form_validation->set_rules('description','Description','required|min_length[10]');
        $this->form_validation->set_rules('aouthor','Aouthor','required');
        if($this->form_validation->run() == true){

         $data = array(
          'title'=>$this->input->post('title'),
          'description'=>$this->input->post('description'),
          'aouthor'=>$this->input->post('aouthor'),
          'special'=>$this->input->post('special'),
          'created_at' => date('y-m-d'),
         );

        $this->Bloginmodel->insert($data);
        $this->session->set_flashdata('message','Blog inserted succesfully');
          return redirect('blogin/show');
        }else{

 	 	$this->load->view('blogin/addblog');
     }

 	 }

     public function show(){

       $all['data'] = $this->Bloginmodel->all();

       $this->load->view('blogin/all',$all);

      }

    public function edit($id){
        $row['data'] = $this->db->get_where('blog',['id'=>$id])->row();

         $this->form_validation->set_error_delimiters('<div class= "error">', "</div>" );
         $this->form_validation->set_rules('title','Title','required|min_length[4]');
         $this->form_validation->set_rules('description','Description','required|min_length[10]');
         $this->form_validation->set_rules('aouthor','Aouthor','required');
         if($this->form_validation->run() == true){

         $data = array(
        'title'=>$this->input->post('title'),
        'description'=>$this->input->post('description'),
        'aouthor'=>$this->input->post('aouthor'),
        'special'=>$this->input->post('special'),
        'created_at' => date('y-m-d'),
         );



        $this->Bloginmodel->updatedata($id,$data);
        $this->session->set_flashdata('message','Blog Updated succesfully');
          return redirect('blogin/show');
        }else{

       $this->load->view('blogin/edit',$row);
     }
       
       }

    public function delete($id){

       $this->db->where('id',$id);
       $this->db->delete('blog');
       $this->session->set_flashdata('message','Blog Deleted Sucessfully');
       return  redirect('blogin/show');
    }
 }




  ?>