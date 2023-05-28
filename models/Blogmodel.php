<?php   


class Blogmodel extends CI_Model{

	  public function create($data){

    $this->db->insert('blogs',$data);

	  }

 public function list(){

 	$this->db->order_by('blogs','DESC');

 $query =	$this->db->query('select * from blogs');
  return $query->result();
 }


   public function updatedata ($id,$data){


   	   $this->db->where('id',$id);
   	   $this->db->update('blogs',$data);
   }

   public function featured(){
   $this->db->order_by('blogs','DESC');

   	$this->db->where('special','featured');

   	$blogs =	$this->db->query('select * from blogs');
       return $blogs->result();


   }

    public function promo(){
    	$this->db->order_by('blogs','DESC');
    	  $this->db->where('special','promo');
    	  $this->db->limit(1);

    		$blogs =	$this->db->query('select * from blogs');
            return $blogs->row();


    }


	}


 ?>