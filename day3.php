<?php
include('database.php');

$db = new DB;

$rows = $db->select_users();

// echo phpinfo();die();
// echo print_r($rows);die();

?>

<html>
<style>
	table{
		margin: 0 auto;
    	width: 70%;
	}
</style>
<body>
	<h1>Student Information</h1>
	<table border='1'>
	<thead>
		<td>Id</td>

		<td>Username</td>
		<td>Course</td>
		<td>Math</td>
		<td>English</td>
		<td>Filipino</td>
		<td>Social Studies </td>
		<td>Average </td>
		<td>Remarks </td>
		<td>Edit </td>
		<td>Delete </td>
	</thead>
	<tbody>	
	<?php
	// echo print_r($rows);

	 foreach($rows as $login_data) 
	{
		// echo  print_r($login_data);
		$id = $login_data['id'];

		$math = $login_data['math'];
		$english = $login_data['english'];
		$english = $login_data['filipino'];
		$social = $login_data['social'];
		$ave=($math+$english+$english+$social)/400*100;
	?>
		<tr>
					<td> <?php echo $login_data['id'] ?> </td>

			<td> <?php echo $login_data['username'] ?> </td>
			<td> <?php echo $login_data['course'] ?> </td>
			<td> <?php echo $login_data['math'] ?> </td>
			<td> <?php echo $login_data['english'] ?> </td>
			<td> <?php echo $login_data['filipino'] ?> </td>
			<td> <?php echo $login_data['social'] ?> </td>
			<td> <?php echo $ave;?></td>
			<td><?php
				if($ave >= 70){
						echo "PASSED";
				}
				else {
					echo "FAILED";
				}
			 ?>
			 </td>
			 <td><a href='day3_form_edit.php?id=<?=$id?>'>Edit</a></td>
			 <td><a href='day3_form_delete.php?id=<?=$id?>'>Delete</a></td>
		</tr>
	<?php } ?>
	</tbody>
	</table>
</body>
</html>