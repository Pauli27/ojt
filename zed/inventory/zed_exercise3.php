<?php
include('zed_class.php');

$db = new Inventory;
$rows = $db->select_inventory();

// echo phpinfo();die();
//echo print_r($rows);die();

?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="day3.css">
	</style>
	</head>
<body>

<div id="admin_result">
<div id="b"><a href="zed_exercise_day3.php">BACK</a></div>
	<table border="1">
		<thead>
		<td>Id</td>
		<td>Item Name</td>
		<td>Description</td>
		<td>Quantity</td>
		<td>Edit</td>
		<td>Delete</td>
		</thead>
		<tbody>
<?php
	 // echo print_r($rows);

	 foreach($rows as $inventory_data) 
	{
			$id = $inventory_data['Id'];
		//echo  print_r($inventory_data);
?>
		<tr>
					<td> <?php echo $inventory_data['Id'] ?> </td>

			<td> <?php echo $inventory_data['itemname'] ?> </td>
			<td> <?php echo $inventory_data['description'] ?> </td>
			<td> <?php echo $inventory_data['quantity'] ?> </td>
			 </td>
			 <td><a href='inventory_edit.php?Id=<?=$id?>'>Edit</a></td>
			 <td><a href='inventory_delete.php?Id=<?=$id?>'>Delete</a></td>
		</tr>
	<?php } ?>
	</div>
	</tbody>
	</table>
</body>
</html>