<?php
include ('db.php');

$db = new datab;

if(isset($_POST) && !empty($_POST))
{
	$result = $db->update_specs($_POST);
		if($result){
						header("Location: crud.php");
					}
}
if(isset($_GET['id']) && !empty($_GET['id']))
{
		$id = $_GET['id'];
		$specs_data = $db->select_specs_where($id);
}

?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="design.css">
	</head>
	<body><div id="edit">
	<pre>
		
		<?php //print_r($specs_data); ?>
		<form name="edit" method="POST" onsubmit="return validate(this);">
		<div>PhoneName:<input name="phonename" type="text"  value="<?=$specs_data['phonename']?>"required></div>
		<div>PhoneMemory:<input name="phonememory" type="number" value="<?=$specs_data['phonememory']?>"required></div>
		<div>PhoneStorage:<input name="phonestorage" type="number" value="<?=$specs_data['phonestorage']?>"required></div>
		<div>PhoneCamera :<input name="phonecamera" type="number" value="<?=$specs_data['phonecamera']?>"required></div>
		<div>PhoneBattery:<input name="phonebattery" type="number" value="<?=$specs_data['phonebattery']?>"required></div>

		<input type='hidden' name='id' value="<?=$specs_data['id']?>">
		<div> <input type="submit" name="submit" value="Submit"></div>


		<div><a href='crud_form.php?id=<?=$id?>'>BACK</a></div>

 		<script src="text/javascript">

 </script>

<script>
function validate(form) {
	if (confirm("edit account?")){
		alert('done!');
		return true;
	}
	else {
		alert('Action failed to execute');
		return false;
	}
}

</script>
</body>
</html>		
</form>
</div>
</pre>