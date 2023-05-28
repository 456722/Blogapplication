<?php    

class Admin_model extends CI_Model{

	public  function getByUsername($username){
     $this->db->where('username',$username);
  $admin=   $this->db->get('admin')->row_array();
    return $admin;



	}


   public function update($id,$formArray){

    echo "yesss";
    $this->db->where('id',$id);
    $this->db->update($formArray);


   }


}


 ?>