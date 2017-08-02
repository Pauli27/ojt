<?php

	session_start();
	// session_destroy();die();


	if (isset($_POST) && !empty($_POST))
	{
	$_SESSION['logins'][]=$_POST;
	}

	
?>
	<html>
	<body>
		<table border='2'>
		<thead>
		<td>Studentname</td>
		<td>Course</td>
		<td>Math</td>
		<td>English</td>
		<td>Social Studies</td>
		<td>Student Average</td>
		<td>Student Remarks</td>
	</thead>
<tbody>




<?php 
foreach ($_SESSION['logins']as $login_data) 
{
$math = $login_data['math'];
$eng = $login_data['english'];
$fil = $login_data['filipino'];
$ss = $login_data['social_studies'];
$ave = ($math+$eng+$fil+$ss)/400*100;

?>


<tr>
<td> <?php echo $login_data['studentname']?></td>
<td> <?php echo $login_data['course']?></td>
<td> <?php echo $login_data['math']?></td>
<td> <?php echo $login_data['english']?></td>
<td> <?php echo $login_data['filipino']?></td>
<td> <?php echo $login_data['social_studies']?></td>
<td> <?php echo $ave;?></td>
<td>

<?php

	if ($ave>=70)
	{

		echo "Passed";
	}
	else
		echo "Failed";?>
</td>
</tr>
<?php
 }
 ?>
</tbody>
</table>
</body>
</html>




