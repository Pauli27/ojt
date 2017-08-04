<?php
include('db.php');

$db = new datab;

$id=$db->insert_newproduct($_POST);

?>


<!DOCTYPE html>
<html>
	<head>
	</head>
	<pre>
		<form name="edit" method="POST" action="crud.php">
		<div>PhoneName:<input name="phonename" type="text"  required></div>
		<div>PhoneMemory:<input name="phonememory"  type="number" required></div>
		<div>PhoneStorage:<input name="phonestorage" type="number" required></div>
		<div>PhoneCamera :<input name="phonecamera"  type="number" required></div>
		<div>PhoneBattery:<input name="phonebattery"  type="number" required></div>


		
		<div> <input type="submit" name="submit" value="Submit"></div>

</pre>
</form>
</html>