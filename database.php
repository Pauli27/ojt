<?php
class DB{
	public function conn(){
		$conn = new mysqli("localhost","root","","table");
		
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		return $conn;

	}

	public function select_users(){
		$conn = $this->conn();
		// var_dump($conn);die();
		//SELECT 
			$query = "SELECT * from user";
			$result = $conn->query($query);
			$rows = array();
				// var_dump($conn->error);die();
			    if($result){
			      while ($row = $result->fetch_assoc()){
			        $rows[] = $row;
			      }
			    }else{
			    	$rows = array('error'=>'1','msg'=>$conn->error);
			    }
			 
			return $rows;
		
	}

	public function select_users_where($id=NULL){
		$conn = $this->conn();
		// var_dump($conn);die();
		//SELECT 
			$query = "SELECT * from user WHERE id=".$id;
			$result = $conn->query($query);
			$rows = array();
				// var_dump($conn->error);die();
			    if($result){
			      $rows = $result->fetch_assoc();
			      
			    }else{
			    	$rows = array('error'=>'1','msg'=>$conn->error);
			    }
			 
			return $rows;
		
	}

	public function insert_user($data = array()){
		$conn = $this->conn();
		$query = "INSERT into user (`username`,`course`,`math`,`english`,`filipino`,`social`) 
				 VALUES ('".$data['username']."','".$data['course']."','".$data['math']."',
				 	     '".$data['english']."','".$data['filipino']."','".$data['social']."') ";
		$result = $conn->query($query);

		if($result){

			$id = $conn->insert_id;
		}else{
			$id = false;
		}

		return $id;


	}

	public function update_user($data = array()){
		$conn = $this->conn();
		$query = "UPDATE user SET username='".$data['username']."' , course = '".$data['course']."' , 
									math = '".$data['math']."' , english = '".$data['username']."',
									filipino = '".$data['filipino']."', social = '".$data['social']."'
							WHERE id=".$data['id'];
		$result = $conn->query($query);

		return $result;


	}

		public function delete_user($id = null){
		$conn = $this->conn();
		$query = "DELETE from user WHERE id=".$id;
		$result = $conn->query($query);

		return $result;


	}

}


?>