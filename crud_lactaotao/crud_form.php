<?php
include('db.php');
//echo "<pre>",print_r($_POST),"</pre>"; die();
$db = new datab;

$id = $db->insert_newproduct($_POST);

 if(isset($_POST) && !empty($_POST))
 {
	  echo "<pre>POST data: ",print_r($_POST),"</pre>";
 	$rows['logins'][] = $_POST;
	// echo "<pre>SESSION storage: ",print_r($rows),"</pre>";
}
?>


<html>
	<head>
	<link rel="stylesheet" type="text/css" href="design.css">

	</head>
	<body>
	<div id="form">
	<pre>
		<form name="edit" method="POST" action="crud_form.php">
		<div>PhoneName:<input name="phonename" type="text" required></div>
		<div>PhoneMemory:<input name="phonememory" type="number" required></div>
		<div>PhoneStorage:<input name="phonestorage" type="number" required></div>
		<div>PhoneCamera :<input name="phonecamera" type="number" required></div>
		<div>PhoneBattery:<input name="phonebattery" type="number" required></div>
		<div> <input type="submit" name="submit" value="Submit"></div>


		<div><a href='crud.php?id=<?=$id?>'>Admin Options</a></div>

</pre>
</form>
</div>
</body>
</html>