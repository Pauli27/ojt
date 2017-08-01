-- FORM $_SESSION , $_COOKIE , $_SERVER , $_POST , $_GET , $_REQUEST --


<?php
session_start();

// session_destroy();exit;

// $_SESSION['authentication'] = array('username'=>'Justin','password'=>'password');
// $_COOKIE['authentication']= array('username'=>'Justin','password'=>'password');

// // echo "<pre>SESSION: ",print_r($_SESSION),"</pre>";
// // echo "<pre>COOKIE: ",print_r($_COOKIE),"</pre>";die();
//  echo "<pre>COOKIE: ",print_r($_SERVER),"</pre>";die();

// echo "<pre>",print_r($_POST['username']),"</pre>";die();

if(isset($_POST['username']) && !empty($_POST['username'])) {
	echo $_POST['username'];
}else{
	echo "<p>Username is required.</p>";
}
// echo phpinfo();die()
?>

<html>
	<head>
	</head>

	<form name="login" method="POST" action="">

		<div>Username: <input name="username" type="text" required></div>
		<div>Password: <input name="password" type="password" required></div>
		<div>Gender: <select name="gender"> 
			<option value="Male"> Male</option>
			<option value="Female"> Female</option>
		</select>	
		</div>
		<div> <input type="submit" name="submit" value="Submit">
	</form>
	
</html>