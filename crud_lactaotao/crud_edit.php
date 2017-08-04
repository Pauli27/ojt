<?php
include ('db.php');

$db=new datab;

if(isset($_POST) && !empty($_POST))
{
	$db->update_specs($_POST);

}
if(isset($_GET['id']) && !empty($_GET['id']))
{
	$id=$_GET['id'];
	$specs_data=$db->select_specs_where($id);
}

?>


<!DOCTYPE html>
<html>
	<head>
	</head>
	<pre>
		<form name="edit" method="POST" action="crud_edit.php?id=<?$specs_data['id']?>">
		<div>PhoneName:<input name="phonename" type="text" value="<?=$specs_data['phonename']?>" required></div>
		<div>PhoneMemory:<input name="phonememory"  type="number" valuee="<?=$specs_data['phonememory']?>"required></div>
		<div>PhoneStorage:<input name="phonestorage" type="number" value="<?=$specs_data['phonestorage']?>"required></div>
		<div>PhoneCamera :<input name="phonecamera"  type="number" value="<?=$specs_data['phonecamera']?>"required></div>
		<div>PhoneBattery:<input name="phonebattery"  type="number" value="<?=$specs_data['phonebattery']?>"required></div>


		<input type='hidden' name='id' value="?$specs_data['ids']">
		<div> <input type="submit" name="submit" value="Submit"></div>

</pre>
</html>