<?php    

class Bloginmodel extends CI_Model{

  public function login($username,$password){

	 $q = 	$this->db->where(['username'=>$username,'password'=>$password])->get('login');

	 if($q->num_rows()==true){

	 	  return true;
	 }else{

	   	return FALSE;
	 } 

	}





	public function insert($data){

		$this->db->insert('blog',$data);
		return true;
	}

	public function all(){
    $this->db->order_by('id','DESC');
	$result =  $this->db->query('select * from blog');
	return $result->result();
	}

	public function updatedata($id,$data){
		 
		$this->db->where('id',$id);
		$this->db->update('blog',$data);
		
	}

	public function allfeatured(){
		
		$this->db->where('special','featured');
		$this->db->order_by('id','DESC');
		;
		$result =  $this->db->query('select * from blog');
	      return $result->result();
	}

	public function allpromo(){

		$this->db->where('special','promo');
		$this->db->order_by('id','DESC');
		
		$this->db->limit(1);
		$result =  $this->db->query('select * from blog');
	      return $result->row();
	}
}



 ?>