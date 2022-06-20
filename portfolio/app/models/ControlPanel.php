<?php 

class ControlPanel{
	private $db;

	public function __construct(){

		$this->db = new Database;   

	}


	
	public function login($username,$password){
		$this->db->query('SELECT * FROM users WHERE username = :username');

		$this->db->bind(':username',$username);

		$row=$this->db->single();
		
		$hashedPassword= $row->password;
		
		if(password_verify($password,$hashedPassword)){
			return $row;

		}else{

			return false;

		}
	}

	public function findPostById($id){
		$this->db->query('SELECT * FROM posts WHERE id= :id');
		
		$this->db->bind(':id',$id);

		$row=$this->db->single();

		return $row;

	}
}

 ?>