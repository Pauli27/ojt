
<?php// echo base_url();die();?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<?php //echo print_r($dat)?><br/><br/>
<pre>
<form action="<?php echo base_url()?>exercise/form_validation" method="POST">
Firstname :<input type="text" name="firstname"><br/>
Lastname :<input type="text" name="lastname"><br/>
Username :<input type="text" name="username"><br/>
Password :<input type="password" name="password"><br/>
<input type="submit" name="submit" value="Submit">
</form>
</pre>

</body>
</html>