<?php
include ('zed_class.php');

$db = new Inventory;
//echo "<pre>",print_r($_POST),"</pre>"; die();
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