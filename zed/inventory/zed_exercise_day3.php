<?php
include ('zed_class.php');

$db = new Inventory;
if(isset($_POST) && !empty($_POST)){
   	$json_response = array();
   	$id = $db->insert_inventory($_POST);

   	if($id)
		$json_response = array('err'=>0,'err_msg'=>'');   		
   	else
   		$json_response = array('err'=>1,'err_msg'=>'failed to add!');   
 // echo "<pre>POST data: ",print_r($_POST),"</pre>";

	$response = json_encode($json_response);
	echo $response;		
	// $rows['logins'][] = $_POST;
	exit;
}
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="day3.css">
	</head>
<body>


<div id="inventory_form">
<h1>Welcome</h1>
<div id="response"></div>
	<form name="inventory" method="POST" action="zed_exercise_day3.php">
	<div id="itemname">Item Name: <input type="text" name="itemname"></div>
	<div id="desc">Description:   <input type="text" name="desc" ></div>
	    <div id="qty">  Qty:      <input type="text" name="qty" ></div>
	<div id="submit"> <input type="submit" name="submit" value="Submit">
	<div id="admin"><a href='zed_exercise3.php'>ADMIN</a></div>
</div>
</form>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script>
	$('form[name=inventory]').submit(function(z){
		z.preventDefault();
	    var itemname = $("input[name=itemname]").val();
		var desc = $("input[name=desc]").val();
		var qty = $("input[name=qty]").val();
		$.post('zed_exercise_day3.php',{'itemname':itemname,'desc':desc,
								'qty':qty},function(response){
		  var parse = JSON.parse(response);
		if(parse['error']){
		   $("div#response").html('<p><font style="color:blue;">error on page</font><p>');
		}else{
		   $("div#response").html('<strong><font style="color:#fff;font-size:30px;font-style:italic;">Successfully add!</font></strong');
		}
		});
	 });

</script>
</body>
</html>