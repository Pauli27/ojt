
<?php
session_start();

?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<pre>
		<form name="input" method="POST" action="joemelDay2_Student_List.php">
		<div>Student Name:<input name="studentname" type="text" required></div>
		<div>course:<input name="course"  type="text" required></div>
		<br>-----SUBJECT GRADE-----<br>
		<div>Math:<input name="math" type="number" required></div>
		<div>English:<input name="english"  type="number" required></div>
		<div>Filipino:<input name="filipino"  type="number" required></div>
		<div>Social Studies:<input name="social_studies"  type="number" required></div>

		<div> <input type="submit" name="submit" value="Submit"></div>

</pre>
</html>




