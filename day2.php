-- FORM $_SESSION , $_COOKIE , $_SERVER , $_POST , $_GET , $_REQUEST --


<?php
//session_start();

// session_destroy();exit;

 // $_SESSION['authentication'] = array('username'=>'Justin','password'=>'password');
// $_COOKIE['authentication']= array('username'=>'Justin','password'=>'password');

// // echo "<pre>SESSION: ",print_r($_SESSION),"</pre>";
// // echo "<pre>COOKIE: ",print_r($_COOKIE),"</pre>";die();
//  echo "<pre>COOKIE: ",print_r($_SERVER),"</pre>";die();

// echo "<pre>",print_r($_POST['username']),"</pre>";die();

// if(isset($_POST['username']) && !empty($_POST['username'])) {
// 	//echo $_POST['username'];
// }else{
// 	//echo "<p>Username is required.</p>";
// }
// echo phpinfo();die()



if(isset($_POST) && !empty($_POST)){
	echo "<pre>POST data: ",print_r($_POST),"</pre>";

	$_SESSION['logins'][] = $_POST;
	echo "<pre>SESSION storage: ",print_r($_SESSION),"</pre>";
}
?>

<html>
	<head>
	</head>

		<form name="login" method="POST" action="zed.php">
		<div>Username: <input name="username" type="text" required></div>
		<div>Course: <input name="course" type="text" required></div>
		<div>Subject Grade<br/></div>
		<div>Math 	 	: <input name="math" type="text" required></div>
		<div>English 	: <input name="english" type="text" required></div>
		<div>Filipino 	: <input name="filipino" type="text" required></div>
	<div>Social Studies : <input name="social" type="text" required></div>
		<div> <input type="submit" name="submit" value="Submit" required>
	</form>
		
	
</html>