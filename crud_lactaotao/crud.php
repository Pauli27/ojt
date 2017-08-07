<?php
include('db.php');

$db = new datab;

$rows = $db->select_specs();
?>


<html>
<head>
<body>


	<table boarder="2">
	<thead>
		<font color="#33ff33"><td>PRODUCT ID</td></font>
		<font color="#33ff33"><td>PhoneName</td></font>
		<font color="#33ff33"><td>PhoneMemory</td></font>
		<font color="#33ff33"><td>PhoneStorage</td></font>
		<font color="#33ff33"><td>PhoneCamera</td></font>
		<font color="#33ff33"><td>PhoneBattery</td></font>
		<font color="#33ff33"><td>EDIT</td></font>
		<font color="#33ff33"><td>DELETE</td></font>
	</thead>
	<tbody>
	<?php
			// print_r($rows);die();
		foreach($rows as $phonespecs)
			{
			$id = $phonespecs['id'];?>
		<tr> 
			<td> <?php echo $phonespecs['id'] ?> </td>
			<td> <?php echo $phonespecs['phonename'] ?> </td>
			<td> <?php echo $phonespecs['phonememory'] ?> </td>
			<td> <?php echo $phonespecs['phonestorage'] ?> </td>
			><td> <?php echo $phonespecs['phonecamera'] ?> </td>
			<td> <?php echo $phonespecs['phonebattery'] ?> </td>
			
			<td><a href='crud_edit.php?id=<?=$id?>'>Edit</a></td>
			<td><a href='crud_delete.php?id=<?=$id?>'>Delete</a></td>
			
	</tr>
<?php } ?>
</tbody>
</table>
</head>
</body>
</html>