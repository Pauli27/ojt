<?php
include('zed_class.php');

 $db = new Inventory;
if(isset($_POST) && !empty($_POST)){
  //echo "<pre>",print_r($_POST),"</pre>";
 $result= $db->update_inventory($_POST);
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
<body>
<div id="inventory_form">
 <?php //echo var_dump($inventorydata);die();?>
	<form name="inventory" method="POST" onsubmit="return ConfirmEdit()">
	<pre>
	<div>Item Name: <input type="text" name="itemname" value="<?=$inventorydata['itemname']?>"></div>
	<div>Description: <input type="text" name="desc" value="<?=$inventorydata['description']?>"></div>
	<div>Qty: <input type="text" name="qty" value="<?=$inventorydata['quantity']?>"></div>

	<input type='hidden' name='id' value="<?=$inventorydata['Id']?>">
		<div> <input type="submit" name="submit" value="Submit" ></div>
		<div id="admin"><a href='zed_exercise3.php'>Back</a></div>
	</pre>
</form>
</div>
<script>
	function ConfirmEdit(){
    if (confirm("Edit account?")){
    	alert('Sucess');
          return true;

    }
    else {
       alert('Fail to edit');
       return false;
    }
}  
</script>

</body>
</html>