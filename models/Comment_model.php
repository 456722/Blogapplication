<?php 
    

class Comment_model extends CI_Model{


    public function insert($data){

		$this->db->insert('comments',$data);
		return true;
	}

	public function allcomment(){
    $this->db->order_by('id','DESC');
	$result =  $this->db->query('select * from comments');
	return $result->result();
	}

	 	public function allblogcomment($blog_id){
    $this->db->order_by('id','DESC');
   	$this->db->where('id',$blog_id);
   	$this->db->where('status','Active');
    $comment = $this->db->get('comments')->result_array();
    	return $comment;
	}

	public function updatecomment($id,$data){
		 
		$this->db->where('id',$id);
		$this->db->update('blog',$data);
		
	}

	public function getcomment($id){

		$this->db->where('id',$id);
		$comment = $this->db->get('comments')->row_array();
		return $comment;

	}

	 public function deletecomment($id){

	 	$this->db->where('id',$id);
	 	$this->db->delete('comments');
	 	return true;
	 }

	public function allfeatured(){
		
		$this->db->where('special','featured');
		$this->db->order_by('id','DESC');
		;
		$result =  $this->db->query('select * from comments');
	      return $result->result();
	}

	public function allpromo(){

		$this->db->where('special','promo');
		$this->db->order_by('id','DESC');
		
		$this->db->limit(1);
		$result =  $this->db->query('select * from comments');
	      return $result->row();
	}
}







  ?>