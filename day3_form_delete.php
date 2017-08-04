<?php
 include('database.php');

 $db = new DB;
if(isset($_POST) && !empty($_POST)){
 // echo "<pre>",print_r($_POST),"</pre>";
 $result = $db->delete_user($_POST['id']);		

 if($result){
 	header('Location: day3.php');
 }
}
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = $_GET['id'];
	$user_data = $db->select_users_where($id);
}


?>
<html>
	<head>
	</head>
<pre>
		<p>Are you sure you want to delete this user?</p>
	<form name="gradeoutput" method="POST" action="day3_form_delete.php?id=<?=$user_data['id']?>">
			<div>Username:<?=$user_data['username']?></div>
			<div>Course: <?=$user_data['course']?></div>
		<div>Subject Grade<br/></div>
		<div>Math 	 	: <?=$user_data['math']?></div>
		<div>English 	:<?=$user_data['english']?></div>
		<div>Filipino 	: <?=$user_data['filipino']?></div>
					<div>Social Studies : <?=$user_data['social']?></div>
		<input type='hidden' name='id' value="<?=$user_data['id']?>">
		<div> <input type="submit" name="submit" value="Submit" required>
	</form>
</pre>
</html>