<?php
include ('zed_class.php');

$db = new Inventory;
// echo "<pre>",print_r($_POST),"</pre>"; die();
 $id = $db->insert_inventory($_POST);
 // echo $id;die();
 // echo $id;die();
 if(isset($_POST) && !empty($_POST))
 {
	  // echo "<pre>POST data: ",print_r($_POST),"</pre>";
 	$rows['logins'][] = $_POST;
	// echo "<pre>SESSION storage: ",print_r($rows),"</pre>";
}
 
?>

<html>

<head>	</head>
<body>
<div id="inventory_form">
<pre>
	<form name="inventory" method="POST" action="zed_exercise_day3.php">
	<div>Item Name: <input type="text" name="itemname"></div>
	<div>Description: <input type="text" name="desc" ></div>
	<div>Qty: <input type="text" name="qty" ></div>
	<div> <input type="submit" name="submit" value="Submit">
	<div><a href='zed_exercise3.php'>ADMIN</a></div>
</pre>
</form>
</div>

</body>
</html>