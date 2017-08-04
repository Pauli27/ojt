<?php
 include('zed_class.php');

 $db = new Inventory;
if(isset($_POST) && !empty($_POST)){
// echo "<pre>",print_r($_POST),"</pre>";die();
 $result = $db->deleteinventory($_POST['id']);		

 if($result){
 	header('Location: zed_exercise3.php');
 }
}
if(isset($_GET['Id']) && !empty($_GET['Id'])){
	$id = $_GET['Id'];
	$inventorydata = $db->select_inventory_where($id);
}

?>
<html>
	<head>
	</head>
		<p>Are you sure to delete?</p>

		 <?php //echo var_dump($inventorydata);die();?>
	<form name="inventory" method="POST" action="inventory_delete.php?Id=<?=$inventorydata['Id']?>">
	<div>Item Name: <?=$inventorydata['itemname']?></div>
	<div>Description: <?=$inventorydata['description']?></div>
	<div>Qty: <?=$inventorydata['quantity']?></div>
	<input type='hidden' name='id' value="<?=$inventorydata['Id']?>">
		<div> <input type="submit" name="submit" value="Delete" required> </div>
</form>

</html>