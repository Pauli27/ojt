<?php

include ('db.php');

$db = new datab;

if(isset($_POST) && !empty($_POST))
{
	$result=$db->delete_specs($_POST['id']);

		if($result)
		{
			header('Location:crud.php');
		}
}

if (isset($_GET['id'])&&!empty($_GET['id'])) 
{
	$id=$_GET['id'];
	$specs_data=$db->select_specs_where($id);
}
?>

<html>
	<head>
	</head>
<pre>
		<p>Are you sure you want to delete this product?</p>
	<form name="specs" method="POST" action="crud_delete.php?id=<?=$specs_data['id']?>">
			<div>PhoneName : <?=$specs_data['phonename']?></div>
			<div>PhoneMemory : <?=$specs_data['phonememory']?></div>
			<div>PhoneStorage : <?=$specs_data['phonestorage']?></div>
			<div>PhoneCamera : <?=$specs_data['phonecamera']?></div>
			<div>PhoneBattery : <?=$specs_data['phonebattery']?></div>
		
		<input type='hidden' name='id' value="<?=$specs_data['id']?>">
		<div> <input type="submit" name="submit" value="Submit" required>
	</form>
</pre>
</html>