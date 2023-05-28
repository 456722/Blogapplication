<?php   


class Categorymodel extends CI_Model{

  public function addcategory($data){

 $this->db->insert('tbl_category',$data);

 return true;
  }

   public function alldata(){

   $query= $this->db->query("select * from tbl_category");
   return $query->result();

   }

    public function updatecategory($id,$data){
     
      $this->db->where('id',$id);
      $this->db->update('tbl_category',$data);

    }


}





?>