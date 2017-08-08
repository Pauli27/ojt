<?php

class datab
{

	public function conn()
	{

		$conn = new mysqli("localhost","root","","db");


		if ($conn->connect_error)
		{
			die("connection failed!".$conn->connect_error);
		}
		return $conn;

	}

	public function select_specs()
	{
		$conn = $this->conn();

	//to select
		$query="SELECT * from specs";
		$result=$conn->query($query);
		$rows=array();

			if($result)
			{
				while($row=$result->fetch_assoc())
				{
					$rows[]=$row;
				}
			}
			else 
			{
				$rows=array('error'=>'1','msg'=>$conn->error);
			} 
		return $rows;
	}


	public function select_specs_where($id=NULL){
		$conn = $this->conn();

			$query="SELECT * from specs WHERE id=".$id;
			$result = $conn->query($query);
			$rows = array();
				if($result)
				{
					$rows = $result->fetch_assoc();

				}
				else
				{
					$rows=array ('error'=>'1','msg'=>$conn->error);
				}
			return $rows;	
	}

	public function insert_newproduct($data = array())
	{
		
		$conn = $this->conn();$query = "INSERT into specs (`phonename`,`phonememory`,`phonestorage`,`phonecamera`,`phonebattery`)
		 VALUES ('".$data['phonename']."','".$data['phonememory']."','".$data['phonestorage']."', '".$data['phonecamera']."','".$data['phonebattery']."') "; 
		$result=$conn->query($query);
		// echo $result;die();

			if ($result)
			{
				$id = $conn->insert_id;
			}
			else
			{
				$id = false;
			}



	return $id;

	}


	public function update_specs($data = array())
	{
		$conn = $this->conn();
		$query = "UPDATE specs SET phonename ='".$data['phonename']."', phonememory ='".$data['phonememory']."',phonestorage ='".$data['phonestorage']."',
											phonecamera ='".$data['phonecamera']."',phonebattery ='".$data['phonebattery']."'WHERE id=".$data['id'];
									
						

			$result = $conn->query($query);

			return $result;
	}

	public function delete_specs($id=NULL){
		$conn=$this->conn();
		$query="DELETE from specs WHERE id=".$id;
		$result=$conn->query($query);

		return $result;



	}

}	




?>








