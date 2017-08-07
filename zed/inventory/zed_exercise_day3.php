<?php
include ('zed_class.php');

$db = new Inventory;
f(isset($_POST) && !empty($_POST)){
   	$json_response = array();
   	$id = $db->insert_inventory($_POST);

   	if($id)
		$json_response = array('err'=>0,'err_msg'=>'');   		
   	else
   		$json_response = array('err'=>1,'err_msg'=>'Data not inserted');   
	// echo "<pre>POST data: ",print_r($_POST),"</pre>";

	$response = json_encode($json_response);
	echo $response;		
	// $rows['logins'][] = $_POST;
	exit;
}
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="day3.css">
	</head>
<body>
<div id="inventory_form">

<h1>Welcome</h1>
	<form name="inventory" method="POST" action="zed_exercise_day3.php">
	<div id="itemname">Item Name: <input type="text" name="itemname"></div>
	<div id="desc">Description:   <input type="text" name="desc" ></div>
	    <div id="qty">  Qty:      <input type="text" name="qty" ></div>
	<div id="submit"> <input type="submit" name="submit" value="Submit">
	<div id="admin"><a href='zed_exercise3.php'>ADMIN</a></div>

</form>
</div>

</body>
</html>