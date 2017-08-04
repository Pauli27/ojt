<?php
 include('student_class.php');

 $db = new Studentrecord;

 // echo "<pre>",print_r($_POST),"</pre>";
 $id = $db->insert_user($_POST);
 if(isset($_POST) && !empty($_POST)){
	echo "<pre>POST data: ",print_r($_POST),"</pre>";

	$rows['logins'][] = $_POST;
	// echo "<pre>SESSION storage: ",print_r($_SESSION),"</pre>";

?>
<html>
	<head>
	</head>
<pre>
	<form name="gradeoutput" method="POST" action="">
			<div>First Name: <input name="username" type="text" required></div>
			<div>Last Name: <input name="course" type="text" required></div>
		
		<div> <input type="submit" name="submit" value="Submit" required>
	</form>
</pre>
</html> 