<?php
session_start();
	if(isset($_POST) && !empty($_POST))
{
	//echo "<pre>POST data: ",print_r($_POST),"</pre>";

	$_SESSION['logins'][] = $_POST;
	//echo "<pre>SESSION storage: ",print_r($_SESSION),"</pre>";
}

?>

<html>
<body>
	<table border='1'>
	<thead>
		<td>Username</td>
		<td>Course</td>
		<td>Math</td>
		<td>English</td>
		<td>Filipino</td>
		<td>Social Studies </td>
		<td>Average </td>
		<td>Remarks </td>
	</thead>
	<tbody>	
	<?php foreach($_SESSION['logins'] as $login_data) {
		$math = $login_data['math'];
		$english = $login_data['english'];
		$english = $login_data['filipino'];
		$social = $login_data['social'];
		$ave=($math+$english+$english+$social)/400*100;
	?>
		<tr>
			<td> <?php echo $login_data['username'] ?> </td>
			<td> <?php echo $login_data['course'] ?> </td>
			<td> <?php echo $login_data['math'] ?> </td>
			<td> <?php echo $login_data['english'] ?> </td>
			<td> <?php echo $login_data['filipino'] ?> </td>
			<td> <?php echo $login_data['social'] ?> </td>
			<td> <?php echo $ave;?></td>
			<td><?php
				if($ave > 70){
						echo "PASSED";
				}
				else {
					echo "FAILED";
				}
			 ?>
			 </td>
		</tr>
	<?php } ?>
	</tbody>
	</table>
</body>
</html>