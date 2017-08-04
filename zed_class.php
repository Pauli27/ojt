<?php
class Inventory
{

	public function conn()
	{

	$conn = new mysqli("localhost","root","","inventory");
		
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		return $conn;

	}


	public function select_inventory(){
		$conn = $this->conn();
		// var_dump($conn);die();
			$query = "SELECT * from inventoryrecord";
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
	public function select_inventory_where($id=NULL){
		$conn = $this->conn();
		$query = "SELECT * from inventoryrecord WHERE Id=".$id;
		$result = $conn->query($query);
		$rows =array();
			if ($result){
				$rows = $result->fetch_assoc();
			}
			else {
				$rows = array('error'=>'1','msg'=>$conn->error);
			}
			return $rows;
	}

	public function insert_inventory($inventdata = array()){
		$conn = $this->conn();
		$query = "INSERT into inventoryrecord (`itemname`,`description`,`quantity`) 
		VALUES ('".$inventdata['itemname']."','".$inventdata['desc']."','".$inventdata['qty']."') ";
		$result = $conn->query($query);

		if($result){

			$id = $conn->insert_id;
		}else{
			$id = false;
		}

		return $id;

	}

	public function update_inventory($inventdata = array()){

		$conn = $this->conn();
		$query = "UPDATE inventoryrecord SET itemname='".$inventdata['itemname']."' , description='".$inventdata['desc']."' , 
									quantity='".$inventdata['qty']."' WHERE Id=".$inventdata['Id'];
		$result = $conn->query($query);

		return $result;

	}
	public function deleteinventory($id = null){
		$conn = $this->conn();
		$query = "DELETE from inventoryrecord WHERE Id=".$id;
		// echo $query;die();
		$result = $conn->query($query);
		return $result;


	}
}
?>