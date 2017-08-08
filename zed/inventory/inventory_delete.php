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
	<link rel="stylesheet" type="text/css" href="day3.css">
	</head>
	
		

		 <?php //echo var_dump($inventorydata);die();?>
<div id="inventory_form">
<h2>Are you sure to delete?</h2>
<div id="response"></div>
	<form name="inventory" method="POST" onsubmit="return ConfirmDelete()">
	<div id="delitem">Item Name  : <?=$inventorydata['itemname']?></div>
	<div id="deldesc">Description: <?=$inventorydata['description']?></div>
	   <div id="delqty">Qty     : <?=$inventorydata['quantity']?></div>
	<input type='hidden' name='id' value="<?=$inventorydata['Id']?>">
		<div id="del"><input type="submit" name="submit" value="Delete" required> </div>

		<div id="admin"><a href='zed_exercise3.php'>Cancel</a></div>
</form>
</div>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script>
	function ConfirmDelete(){
    if (confirm("Delete Account?")){
    	alert('Sucess');
          return true;

    }
    else {
       alert('sorry');
       return false;
    }
}  
</script>

</html>