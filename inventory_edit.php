<?php
include('zed_class.php');

 $db = new Inventory;
if(isset($_POST) && !empty($_POST)){
  echo "<pre>",print_r($_POST),"</pre>";
 $db->update_inventory($_POST);

}
if(isset($_GET['Id']) && !empty($_GET['id'])){
	$id = $_GET['Id'];
	$inventorydata = $db->select_inventory_where($id);
}



?>
<html>

<head>	</head>
<body>
<div id="inventory_form">
 <?php echo var_dump($inventorydata);die();?>
	<form name="inventory" method="POST" action="zed_exercise3.php">
	<div>Item Name: <input type="text" name="itemname" values="<?=$inventorydata['itemname']?>"></div>
	<div>Description: <input type="text" name="desc" values="<?=$inventorydata['description']?>"></div>
	<div>Qty: <input type="text" name="qty" values="<?=$inventorydata['quantity']?>"></div>

	<input type='hidden' name='id' value="<?=$inventorydata['id']?>">
		<div> <input type="submit" name="submit" value="Submit" >
</form>
</div>

</body>
</html>