<?php  

  class Category_model extends CI_Model{


  	public function create($formArray){

  		$this->db->insert('categories',$formArray);
  	}

      public function getcategories($params=[]){
        if(!empty($params['query_string'])){
          $this->db->like('name',$params['query_string']);
        }

  $result=  $this->db->get('categories')->result_array();
     return $result;

      }

      public function edit($id){

        $this->db->where('id',$id);
     $category=    $this->db->get('categories')->row_array();
        return $category;

      }

      public function update($id) {
        $data=array(
            'name' => $this->input->post('name'),
            'image'=> $this->input->post('image'),
        );
        if($id==0){
            return $this->db->update('categories',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('categories',$data);
        }        
    }

      public function delete($id){

         $this->db->where('id',$id);
         $this->db->delete('categories');

         redirect('category/index');

        
}

}



  ?>