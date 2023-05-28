<?php    

class Brandmodel extends CI_Model{


   public function insert($data){
   $this->db->insert('brand',$data);
   return true;

   }

   public function all(){

   $this->db->select('*');
   $this->db->from('brand');
   $info =$this->db->get();
   return $info->result();
   }

    public function updatedata($id,$data){
      $this->db->where('id',$id);
      $this->db->update('brand',$data);
    }

}





   ?>