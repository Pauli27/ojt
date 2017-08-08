<?php
include('db.php');
//echo "<pre>",print_r($_POST),"</pre>"; die();
$db = new datab;

 if(isset($_POST) && !empty($_POST))
 	$json_response = array();
 	$id = $db->insert_newproduct($_POST);

 		if($id)
 		$json_response=array('error'=>0,'error_message'=>'');
 	else
 		$json_response= array('error=>1','error_message'=>'Sorry, Data not added.');

	$response = json_encode($json_response);
	echo $response;	

// echo $_SERVER['SERVER_NAME'];die();
	
?> 
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="design.css">
	</head>
	<body>
	<div id="form">
	<pre>
		<form name="edit" method="POST" action="crud_form.php">
		<div><h1>INPUT THE PHONE'S DETAILS</h1></div>
		<div id="response"></div>
		<div>PhoneName:<input name="phonename" type="text" class="form-control" required></div>
		<div>PhoneMemory:<input name="phonememory" type="number" class="form-control" required></div>
		<div>PhoneStorage:<input name="phonestorage" type="number" class="form-control" required></div>
		<div>PhoneCamera :<input name="phonecamera" type="number" class="form-control" required></div>
		<div>PhoneBattery:<input name="phonebattery" type="number" class="form-control" required></div>
		<div> <input type="submit" name="submit" value="Submit" class="form-control"></div>
		<div><a href='crud.php?id=<?=$id?>'>Admin Options</a></div>
</pre>
</form>
	 <script  type="text/javascript" src="js/jquery.js " ></script>
	<script>
			$=('form[name=edit]').submit=(function(e){
				e.preventDefault();
				var phonename = $("input [name=phonename]").val();
				var phonememory = $("input [name=phonememory]").val();
				var phonestorage = $("input [name=phonestorage]").val();
				var phonecamera = $("input [name=phonecamera]").val();
				var phonebattery = $("input [name=phonebattery]").val();

			$.post('crud_form.php',{'phonename':phonename,'phonememory':phonememory,'phonestorage':phonestorage,'phonecamera':phonecamera
					,'phonebattery':phonebattery},
					function(response){
						var parse = JSON.parse(response);
					if (parse['error']){
						$("div#response").html('<p><font style="color:red;">error on page</font</p>');
					}
					else{
						$("div#response").html('<strong><font style="color:green;background:#eeeee">SUCCESFUL ADD!</font></strong>');
					}
					});

			});



	</script>

</div>
</body>
</html>