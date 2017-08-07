<?php
include('db.php');

$db = new datab;

$rows = $db->select_specs();
?>


<html>
<body>


	<table boarder="2">
	<thead>
		<td>PRODUCT ID</td>
		<td>PhoneName</td>
		<td>PhoneMemory</td>
		<td>PhoneStorage</td>
		<td>PhoneCamera</td>
		<td>PhoneBattery</td>
		<td>EDIT</td>
		<td>DELETE</td>
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
			<td> <?php echo $phonespecs['phonecamera'] ?> </td>
			<td> <?php echo $phonespecs['phonebattery'] ?> </td>
			</td>
			 <td><a href='crud_edit.php?id=<?=$id?>'>Edit</a></td>
			 <td><a href='crud_delete.php?id=<?=$id?>'>Delete</a></td>
			
	</tr>
<?php } ?>
</tbody>
</table>


</body>
</html>