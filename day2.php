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

	<form name="login" method="POST" action="">

		<div>Username: <input name="username" type="text" ></div>
		<div>Password: <input name="password" type="password" required></div>
		<div>Gender: <select name="gender"> 
			<option value="Male"> Male</option>
			<option value="Female"> Female</option>
		</select>	
		</div>
		<div> <input type="submit" name="submit" value="Submit">
	</form>
		
	<table border='1'>
	<thead>
		<td>Username</td>
		<td>Password</td>
		<td>Gender</td>
	</thead>
	<tbody>
	<?php foreach($_SESSION['logins'] as $login_data) {  
		$formula = "";

	?>
		<tr>
			<td> <?php echo $login_data['username'] ?> </td>
			<td> <?php echo $login_data['password'] ?> </td>
			<td> <?php echo $login_data['gender'] ?> </td>
			<?= ?>
		</tr>

	<?php } ?>
	</tbody>
	</table>

</html>