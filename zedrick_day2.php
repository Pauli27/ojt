<?php
session_start();
// if(isset($_POST) && !empty($_POST))
// {
// 	//echo "<pre>POST data: ",print_r($_POST),"</pre>";

// 	$_SESSION['logins'][] = $_POST;
// 	//echo "<pre>SESSION storage: ",print_r($_SESSION),"</pre>";
// }

?>
<html>
	<head>
	</head>
<pre>
	<form name="gradeoutput" method="POST" action="zed.php">
			<div>Username: <input name="username" type="text" required></div>
			<div>Course: <input name="course" type="text" required></div>
		<div>Subject Grade<br/></div>
		<div>Math 	 	: <input name="math" type="text" required></div>
		<div>English 	: <input name="english" type="text" required></div>
		<div>Filipino 	: <input name="filipino" type="text" required></div>
	<div>Social Studies : <input name="social" type="text" required></div>
		<div> <input type="submit" name="submit" value="Submit" required>
	</form>
</pre>
</html>