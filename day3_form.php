<?php
 include('database.php');

 $db = new DB;

 // echo "<pre>",print_r($_POST),"</pre>";
 if(isset($_POST) && !empty($_POST)){
   	$json_response = array();
   	$id = $db->insert_user($_POST);

   	if($id)
		$json_response = array('err'=>0,'err_msg'=>'');   		
   	else
   		$json_response = array('err'=>1,'err_msg'=>'Data not inserted');   
	// echo "<pre>POST data: ",print_r($_POST),"</pre>";

	$response = json_encode($json_response);
	echo $response;		
	// $rows['logins'][] = $_POST;
	exit;
}
?>
<html>
	<head>
	</head>
<pre>
	<div id="response"></div>
	<form name="gradeoutput" method="POST" action="day3_form.php">
			<div>Username: <input name="username" id="username" class="form-control" type="text" required></div>
			<div>Course: <input name="course" type="text" required></div>
		<div class="">Subject Grade<br/></div>
		<div>Math 	 	: <input name="math" type="text" class="form-control" joemel="bscs" required></div>
		<div>English 	: <input name="english" type="text" required></div>
		<div>Filipino 	: <input name="filipino" type="text" required></div>
	<div>Social Studies : <input name="social" type="text" required></div>
		<div> <input type="submit" name="submit" value="Submit" required>
	</form>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script>
	$('form[name=gradeoutput]').submit(function(e){
		e.preventDefault();
	    var username = $("input[name=username]").val();
		var course = $("input[name=course]").val();
		var math = $("input[name=math]").val();
		var english = $("input[name=english]").val();
		var filipino = $("input[name=filipino]").val();
		var social = $("input[name=social]").val();


		$.post('day3_form.php',{'username':username,'course':course,
								'math':math,'english':english,
								'filipino':filipino,'social':social},function(response){
		  var parse = JSON.parse(response);
		if(parse['err']){
		   $("div#response").html('<p><font style="color:red;">error on page</font><p>');
		}else{
		   $("div#response").html('<strong><font style="color:green;background:#eeeee">Successful add!</font></strong');
		}
		});

	 });

	</script>
</pre>
</html>