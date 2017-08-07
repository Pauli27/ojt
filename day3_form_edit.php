<?php
 include('database.php');

 $db = new DB;
if(isset($_POST) && !empty($_POST)){
 // echo "<pre>",print_r($_POST),"</pre>";
 $db->update_user($_POST);

}
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = $_GET['id'];
	$user_data = $db->select_users_where($id);
}



?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="day3.css">
	</head>

<pre>
	<form name="gradeoutput" method="POST" action="day3_form_edit.php?id=<?=$user_data['id']?>">
			<div>Username: <input name="username" type="text" value="<?=$user_data['username']?>" required></div>
			<div>Course: <input name="course" type="text" value="<?=$user_data['course']?>" required></div>
		<div>Subject Grade<br/></div>
		<div>Math 	 	: <input name="math" type="text" value="<?=$user_data['math']?>" required></div>
		<div>English 	: <input name="english" type="text" value="<?=$user_data['english']?>" required></div>
		<div>Filipino 	: <input name="filipino" type="text" value="<?=$user_data['filipino']?>" required></div>
					<div>Social Studies : <input name="social" type="text" value="<?=$user_data['social']?>" required></div>
		<input type='hidden' name='id' value="<?=$user_data['id']?>">
		<div> <input type="submit" name="submit" value="Submit" required>
	</form>
</pre>
</html>